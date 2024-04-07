<?php
$command = "python C:\\Users\\amilj\\PycharmProjects\\pythonProject1\\php.py"; // Use 'python' command to execute the Python script
$output = shell_exec($command); // Using shell_exec instead of exec
echo $output;
?>
