<!DOCTYPE html>
<html lang="en">
<head>
<script defer src="js/script.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/40ad289a3a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>UGame?</title>+
</head>
<body>

<div class="container">
  <h2 class="text-center">basket</h2>
  <br>
  <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">First Name:</label>
    <input type="text" class="form-control" placeholder="First Name" name="first_name">
    <label>Last Name:</label>
    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
    <label>Phone number:</label>
    <input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber">
  <label>City Name:</label>
  <select class="form-control" name="city_name">
    <option value="bhubaneswar">Bhubaneswar</option>
    <option value="cuttack">Cuttack</option>
  </select>
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>