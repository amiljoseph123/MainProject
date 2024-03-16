<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Comparison</title>
    <link rel="stylesheet" href="styles.css">ffv
</head>
<body>
    <div class="container">
        <h1>Image Comparison</h1>
        <div class="file-input-container">
            <input type="file" id="imageInput1" accept="image/*" onchange="previewImage(this, 'imagePreview1')">
            <label for="imageInput1" class="file-input-label">Choose Image 1</label>
            <img id="imagePreview1" alt="Image 1 Preview" class="image-preview">
        </div>
  
        <button onclick="compareImages()">Compare</button>
        <div id="result"></div>
        <canvas id="comparisonCanvas" width="500" height="300"></canvas>
    </div>

    <style>
        /* Your existing styles here */

        .image-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
            display: block;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>

    <script src="script.js"></script>
    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = '';
            }
        }

        // Rest of your JavaScript code here
    </script>
</body>
</html>
