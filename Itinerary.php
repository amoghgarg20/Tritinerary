<?php
session_start();
$con=mysqli_connect('localhost','root','','tritinerary_login');
if($_SESSION["Username"]==true){}
else{header('location:Signup.php');}
$username=$_SESSION["Username"];
if(isset($_REQUEST["submit"])){
    $day=$_REQUEST["day"];
    $content=$_REQUEST["content"];
    $q="insert into itinerary(username,day,Content) values ('$username','$day','$content')";
    mysqli_query($con,$q);
}
if(isset($_REQUEST["submit2"])){
    $daydel=$_REQUEST["daydel"];
    $s="delete from itinerary where username='$username' and day='$daydel'";
    mysqli_query($con,$s);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Itinerary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="IS.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fs-5 sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand fs-3" href="#">Tritinerary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Home-Login.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="Discover_Login.html">Discover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Itinerary.php">My Itinerary</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
        <ul class="navbar-nav">
          <li><a class="nav-link" href="Logout.php">LogOut</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="input-table">
    <h2>ADD TO YOUR ITINERARY</h2>
        <form method="post">
            <table>
                <tr>
                    <td>Trip-Day</td>
                    <td><input type="text" name="day" size="30"></td>
                </tr>
                <tr>
                    <td>Places you wish to Visit</td>
                    <td><textarea name="content" cols="33"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="input-table2">
        <h2>DELETE FROM ITINERARY</h2>
        <form method="post">
            <table>
                <tr>
                    <td>Enter the day you want to delete from your Itinerary</td>
                    <td><input type="text" name="daydel"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit2" value="Delete"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="view"><a href="View_Post.php">View Itinerary</a></div>
</body>
</html>