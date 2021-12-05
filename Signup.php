<!-- Sign-Up Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Login-Style.css">
    <title>Sign-Up</title>
</head>
<body>
    <div class="header">TRITINERARY</div>
    <div class="signup">
        <h2>SIGN-UP</h2>
        <form action="Registration.php" method="post">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="Name" class="form-control" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" name="Username" class="form-control" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="Password" class="form-control" id="inputPassword3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" name="CPassword" class="form-control" id="inputPassword3" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign-Up</button>
        </form>    
    </div>
    <div class="redirect">
        Already have an account?
        <a href="Login.php"> Login</a>
    </div>
</body>
</html>