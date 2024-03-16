<?php
include "config.php"; // Make sure this file contains your database connection details

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'];

    // Assuming you have a table named 'messages' with columns 'id', 'message', and 'timestamp'
    $sql = "INSERT INTO messages (message, timestamp) VALUES (?, NOW())";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $message);

    if ($stmt->execute()) {
        echo "Message inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .chatbox {
            max-width: 600px;
            margin: 50px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;

        }

        .chat-header {
            background-color: #5ac1bc;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }

        .chat-body {
            padding: 10px;
            height: 500px;
            overflow-y: auto;
        }

        .message {
            margin-bottom: 15px;
            font-size: 20px;
        }

        .message .sender {
            font-weight: bold;
            color: #333;
        }

        .message .text {
            background-color: #e6e6e6;
            border-radius: 5px;
            padding: 8px;
            display: inline-block;
            font-size: 20px;
        }

        .user-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-top: 1px solid #ccc;
            font-size: 20px;
        }

        .user-input input {
            flex: 1;
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
        }

        .user-input button {
            background-color: #5ac1bc;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>
<body>

    <div class="chatbox">
        <div class="chat-header">Chat with infantcare</div>
        <div class="chat-body" id="chatBody">
            <!-- Messages will be displayed here -->
        </div>
        <div class="user-input">
            <input type="text" id="messageInput" placeholder="Type your message">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            var messageInput = document.getElementById("messageInput");
            var chatBody = document.getElementById("chatBody");

            if (messageInput.value.trim() !== "") {
                var message = document.createElement("div");
                message.className = "message";

                var text = document.createElement("div");
                text.className = "text";
                text.textContent = messageInput.value;

                message.appendChild(text);
                chatBody.appendChild(message);

                // Clear input after sending message
                messageInput.value = "";

                // Scroll to the bottom to show the latest message
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        }
    </script>

</body>
</html>
