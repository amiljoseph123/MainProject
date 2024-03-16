<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat App</title>
</head>
<body>
    <div id="chat"></div>
    <input type="text" id="message" placeholder="Type your message">
    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            var sender = "user1"; // You can replace this with dynamic user information
            var receiver = "user2"; // You can replace this with dynamic user information
            var message = document.getElementById("message").value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "sendMessage.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("message").value = "";
                    loadChat();
                }
            };
            xhr.send("sender=" + sender + "&receiver=" + receiver + "&message=" + message);
        }

        function loadChat() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "getMessages.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("chat").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Load chat on page load
        loadChat();
    </script>
</body>
</html>
