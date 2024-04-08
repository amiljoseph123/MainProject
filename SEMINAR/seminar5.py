import cv2
import numpy as np
import tensorflow as tf
from sklearn.metrics.pairwise import cosine_similarity
import os
import streamlit as st

st.markdown(
    """
    <h1 style='text-align: center; color: #5ac1bc;'>InfantCare</h1>
    """,
    unsafe_allow_html=True
)
# st.markdown(
#     """
#     <style>
#         .navbar {
#             overflow: hidden;
#             background-color: #333;
#             width: 100%;
#         }
#
#         .navbar a {
#             float: left;
#             display: block;
#             color: #f2f2f2;
#             text-align: center;
#             padding: 14px 20px;
#             text-decoration: none;
#         }
#
#         .navbar a:hover {
#             background-color: #ddd;
#             color: black;
#         }
#     </style>
#     <div class="navbar">
#         <a href="#">Home</a>
#         <a href="#">About</a>
#         <a href="#">Services</a>
#         <a href="#">Contact</a>
#     </div>
#     """,
#     unsafe_allow_html=True
# )

st.markdown(
    """
    <style>
        .full-width {
            width: 100%;
        }
    </style>
    """,
    unsafe_allow_html=True
)
st.title("Face detection")
# Load VGG16 model pre-trained on ImageNet data
model = tf.keras.applications.VGG16(weights='imagenet', input_shape=(224, 224, 3), include_top=False, pooling='avg')

# Function to preprocess image for the VGG16 model
def preprocess_image(image):
    try:
        image = cv2.resize(image, (224, 224))
        # Convert image to float32
        image = image.astype(np.float32)
        # Mean subtraction
        image -= np.array([123.68, 116.779, 103.939])
        # Scale pixel values
        image /= 255.0
        image = np.expand_dims(image, axis=0)
        return image
    except Exception as e:
        st.write(f"Error preprocessing image: {e}")
        return None

# Function to calculate similarity between embeddings using cosine similarity
def calculate_similarity(image1, image2):
    try:
        image1 = preprocess_image(image1)
        image2 = preprocess_image(image2)

        if image1 is None or image2 is None:
            return None

        # Get embeddings
        embedding1 = model.predict(image1)
        embedding2 = model.predict(image2)

        # Calculate cosine similarity
        similarity_score = cosine_similarity(embedding1, embedding2)[0][0]
        return similarity_score
    except Exception as e:
        st.write(f"Error calculating similarity: {e}")
        return None

# Function to detect faces in an image
def detect_faces(image):
    # Load the pre-trained face detector
    face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

    # Convert the image to grayscale
    gray_image = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

    # Detect faces in the image
    faces = face_cascade.detectMultiScale(gray_image, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))

    return faces

# Function to calculate similarity with given image for all images in the folder
def calculate_similarity_with_folder(given_image, folder_images):
    try:
        highest_similarity_image = ""  # Initialize with an empty string
        highest_similarity_score = 0  # Initialize with 0

        for image_path, image_data in folder_images.items():
            # Detect faces in the given image
            given_faces = detect_faces(given_image)
            # Detect faces in the folder image
            folder_faces = detect_faces(image_data)

            # Proceed only if a face is detected in both images
            if len(given_faces) > 0 and len(folder_faces) > 0:
                # Calculate similarity
                similarity_score = calculate_similarity(given_image, image_data)

                if similarity_score is not None:
                    # Update the highest similarity image if current similarity is higher
                    if similarity_score > highest_similarity_score:
                        highest_similarity_score = similarity_score
                        highest_similarity_image = image_path

        # Open and show the highest similar image
        if highest_similarity_image:
            given_image_data = given_image
            highest_similarity_image_data = folder_images[highest_similarity_image]

            # Show images on the Streamlit interface
            show_images_same_screen(given_image_data, highest_similarity_image_data)

            return highest_similarity_score

    except Exception as e:
        st.write(f"Error calculating similarity with folder: {e}")

# Function to show the given image and the highest similar image in a smaller size
def show_images_same_screen(given_image_data, highest_similarity_image_data):
    try:
        # Convert images to RGB format
        given_image_rgb = cv2.cvtColor(given_image_data, cv2.COLOR_BGR2RGB)
        highest_similarity_image_rgb = cv2.cvtColor(highest_similarity_image_data, cv2.COLOR_BGR2RGB)

        # Resize images
        given_image_resized = cv2.resize(given_image_rgb, (300, 300))  # Adjust size as needed
        highest_similarity_image_resized = cv2.resize(highest_similarity_image_rgb, (300, 300))  # Adjust size as needed

        # Concatenate images horizontally
        concatenated_image = np.hstack((given_image_resized, highest_similarity_image_resized))

        # Display images on the Streamlit interface
        st.image(concatenated_image, caption='Given and Highest Similar Images (Resized)', use_column_width=True)

    except Exception as e:
        st.write(f"Error showing images on the same screen: {e}")

# Function to load images from a folder
def load_folder_images(folder_path):
    try:
        folder_images = {}
        # Get the list of all image files in the folder
        image_files = [f for f in os.listdir(folder_path) if f.endswith(('.jpg', '.jpeg', '.png'))]

        for image_file in image_files:
            # Construct the full path to the image in the folder
            image_path = os.path.join(folder_path, image_file)
            # Read image data
            image_data = cv2.imread(image_path)
            folder_images[image_path] = image_data

        return folder_images
    except Exception as e:
        st.write(f"Error loading images from folder: {e}")
        return {}

# Display file uploader widget
uploaded_file = st.file_uploader("Upload an image...", type=["jpg", "jpeg", "png"])

# Display uploaded image
if uploaded_file is not None:
    image = cv2.imdecode(np.frombuffer(uploaded_file.read(), np.uint8), -1)

    if image.shape[2] == 4:
        image = cv2.cvtColor(image, cv2.COLOR_BGRA2BGR)

    image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
    st.image(image_rgb, caption='Uploaded Image.', use_column_width=True)

# Paths to your images
# given_image_path = "C:\\Users\\amilj\\PycharmProjects\\pythonProject1\\sara.jpg"
# student_folder_path = "F:\\xampp\\htdocs\\Infantcare_main\\imageupload"
student_folder_path = "C:/Users/amilj/Desktop/images"
student_folder_path ="C:/Users/amilj/Desktop/images/dataset5"
st.markdown('<a href="http://localhost/Infantcare_main/orphanage_homepage.php" target="_self">BACK</a>', unsafe_allow_html=True)
if st.button('Calculate Similarity'):
    folder_images = load_folder_images(student_folder_path)
    similarity_score = calculate_similarity_with_folder(image, folder_images)
    if similarity_score is not None:
        st.write(f"Percentage Similarity: {similarity_score * 100:.2f}%")
    else:
        st.write("No matched faces")