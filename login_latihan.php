<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Registration</title>
</head>
<body>
<div class="fs-2 ms-3">
    Form Login
</div>
 <hr>
    <form method="post" action="loginaction_latihan.php">
          <div class="col-5 col-sm-3 mb-3 ms-5">
              <label  class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
          </div>

          <div class="col-5 col-sm-3 mb-3 ms-5">
              <label  class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
          </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-success ms-5">
    </form>
</body>
</html>