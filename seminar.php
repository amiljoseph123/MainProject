<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Comparison</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container11 {
      margin-top: 50px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
    }
    h2 {
      color: #343a40;
      text-align: center;
      margin-bottom: 30px;
    }
    .form-group label {
      color: #343a40;
    }
    .btn-primary {
      background-color: #5ac1bc;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #5ac1bc;
      border-color: #0056b3;
    }
    #results {
      margin-top: 20px;
      border-top: 1px solid #dee2e6;
      padding-top: 20px;
    }
    #results h4 {
      color: #343a40;
    }
  </style>
</head>
<br><br><br>
<body>

  <div class="container11">
    <h2>Image Comparison</h2>
    <form id="uploadForm" enctype="multipart/form-data" action="compare.php" method="POST">
      <div class="form-group">
        <label for="image">Choose Image to find similarity</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Compare</button>
    </form>
    <div id="results">
      <h4 class="text-center mb-3">Results(%) :</h4>
      <!-- Results will be displayed here after form submission -->
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
