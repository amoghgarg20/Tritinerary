<?php
session_start();
$con=mysqli_connect('localhost','root','','tritinerary_login');
if($_SESSION["Username"]==true){}
else{header('location:Signup.php');}
$username=$_SESSION["Username"];
$s="select * from itinerary where username='$username' order by day asc";
$query=mysqli_query($con,$s);
$num=mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Itinerary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="View-Post.css" rel="stylesheet"/>
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
            <a class="nav-link active" aria-current="page" href="Discover_Login.html">Discover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Itinerary.php">My Itinerary</a>
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
  <div class="header"><h2>YOUR TRIP SCHEDULE</h2></div>
    <div class="input-table">
      
        <table>
            <tr>
                <td>Day</td>
                <td>Your Plan</td>
            </tr>
            <?php
            for($i=0;$i<$num;$i++){
                $row=mysqli_fetch_array($query);
            ?>
            <tr>
                <td><?php echo($row["day"]) ?></td>
                <td><?php echo($row["Content"]) ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    
</body>
</html>