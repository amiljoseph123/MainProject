<?php
//  session_start();
//  require 'header.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orphanage Selection</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      max-width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
    }
    #orphanageList {
      margin-top: 10px;
    }
    button {
      margin-top: 10px;
      background-color: #4caf50;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="card">
    <h1>Choose an Orphanage</h1>

    <select id="orphanageList" name="orphanageList">
      <option value="orph1">Orphanage 1</option>
      <option value="orph2">Orphanage 2</option>
      <option value="orph3">Orphanage 3</option>
      <!-- Add more orphanages as needed -->
    </select>

    <button onclick="submitSelection()">Select</button>

    <p id="selectedOrphanage"></p>
  </div>

  <script>
    function submitSelection() {
      var orphanageSelect = document.getElementById("orphanageList");
      var selectedOrphanage = orphanageSelect.options[orphanageSelect.selectedIndex].text;

      var displayDiv = document.getElementById("selectedOrphanage");
      displayDiv.innerHTML = "You have chosen: <strong>" + selectedOrphanage + "</strong>";
    }
  </script>

</body>
</html>
