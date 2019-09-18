<?php
// Start the session
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
            <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips --> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
    <title>Document</title>
</head>
<body>
  <!-- As a heading -->
<nav class="navbar navbar">
<div class="text-center">
      <h3 class="blue-text weight-bold"><strong>tapfHOTEL</strong> <a
          class="blue-text font-weight-bold"><strong> BOOKING</strong></a></h3>
    </div>


</nav>
        <br>
        <!--HOTEL IMAGES AND PRICES-->
  <div class="container">
  <div class="row text-">
            <div class="col-md-4">
              <!--Carousel Wrapper-->
<div id="carousel" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" src="https://images.pexels.com/photos/338504/pexels-photo-338504.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="First slide">
              <div class="mask rgba-black-light"></div>
            </div>
               <h3 class="h3-responsive">Holiday Inn Hotel</h3>
               <h3 class="h3-responsive blue-text">R200</h3>
               <p class="card-text black-text">Rating: 5<i class="fas fa-star"></i></p>
               <p class="card-text black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper</p>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="https://images.pexels.com/photos/189296/pexels-photo-189296.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
              <div class="mask rgba-black-light"></div>
            </div>
              <h3 class="h3-responsive">City Logde Hotel</h3>
              <h3 class="h3-responsive blue-text">R400</h3>
              <p class="card-text black-text">Rating: 5<i class="fas fa-star"></i></p>
              <p class="card-text black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper</p>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="https://image.freepik.com/free-photo/umbrella-chair-around-swimming-pool_74190-4618.jpg" alt="Third slide">
              <div class="mask rgba-black-light"></div>
            </div>
              <h3 class="h3-responsive">Town lodge Hotel</h3>
              <h3 class="h3-responsive blue-text">R150</h3>
              <p class="card-text black-text">Rating: 5<i class="fas fa-star"></i></p>
              <p class="card-text black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper</p>
              
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="https://images.pexels.com/photos/189296/pexels-photo-189296.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
              <div class="mask rgba-black-light"></div>
            </div>
              <h3 class="h3-responsive">Radison Hotel</h3>
              <h3 class="h3-responsive blue-text">R150</h3>
              <p class="card-text black-text">Rating: 5<i class="fas fa-star"></i></p>
              <p class="card-text black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper</p>
          </div>
        </div>
        
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
            <div class="col-md-4">
           <!--Section: Live preview-->
<section class="form-dark">

  <!--Form without header-->
 <div class="card card-image"
  style="background-image: url(https://images.pexels.com/photos/2889681/pexels-photo-2889681.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); width:auto;">
  <div class="text-white rgba-stylish-strong py-5 px-5">
    <!--Header-->
    <div class="text-center">
      <h3 class="white-text font-weight-bold"><strong>BOOKING</strong> <a
          class="blue-text font-weight-bold"><strong> FORM</strong></a></h3>
    </div>

    <!--Body-->
    <div id='form'>
  <form class="text-center"role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">      

  <label class="mb-1">First Name<input type="text" name="firstname"  required></label>
  <label  class="mb-1">Surname<input type="text" name="surname" required></label>
  <label  class="mb-1">Hotel Name
  <select class="browser-default custom-select mb-4" name="hotelname" required>
      <option value="Holiday Inn">Holiday Inn</option>
      <option value="Radison">Radison</option>
      <option value="City Lodge">City Lodge</option>
      <option value="Town Lodge">Town Lodge</option>
  </select>
  </label>
  <label for="date-picker-example class="mb-1">In Date<input id="date-picker-example"class="form-control datepicker" type="date" name="indate" placeholder='indate' required></label>
  <label for="date-picker-example class="mb-1">Out Date<input id="date-picker-example"class="form-control datepicker" type="date" name="outdate" placeholder='outdate' required></label>
  <button class="btn btn black text-center"name="submit">BOOK</i></button>
  </form>
  </div>
 </div> 
</div>
<!--/Form without header-->

</section>
</div>

<div class="col-md-4">
<?php
require_once "connect.php";
echo $conn->error;

$sql = "CREATE TABLE IF NOT EXISTS bookings (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50),
surname VARCHAR(50),
hotelname VARCHAR(50),
indate VARCHAR(30),
outdate VARCHAR(30),
booked INT(4))";


$conn ->query($sql);

if (isset($_GET['error']) && $_GET['error'] == 'timestamp') {

   ?>

<div class='panel panel-default'>
   <h1>
      You must select at least  1 day 
   </h1>
      </div>

      <?php
   }
if (isset($_POST['submit'])) {
   $_SESSION['firstname']= $_POST['firstname'];
   $_SESSION['surname']= $_POST['surname'];
   $_SESSION['hotelname']= $_POST['hotelname'];
   $_SESSION['indate']= $_POST['indate'];
   $_SESSION['outdate']= $_POST['outdate'];

//calculate duration of user's stay at hotel
$datetime1 = new DateTime($_SESSION['indate']);
$datetime2 = new DateTime($_SESSION['outdate']);
$interval = $datetime1->diff($datetime2);

$interval->format('%d');

//number of days booked
$daysbooked = $interval->format('%d');
$value;

switch(isset($_SESSION['hotelname'])){
   case 'Holiday Inn':
   $value = $daysbooked * 200;
   break;

   case 'Radison':
   $value = $daysbooked * 100;
   break;

   case 'City Lodge':
   $value = $daysbooked * 400;
   break;

   case 'Town Lodge':
   $value = $daysbooked * 150;
   break;

   default:
   return "ERROR!";
}
//passing a query to check if the user has booked before
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];

$result = mysqli_query($conn,"SELECT hotelname, indate, outdate, firstname, surname FROM bookings WHERE firstname='$firstname' && surname='$surname'"); 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {    
 echo "<div class='duplicate'> You already have a booking. <br> Firstname: ". $row['firstname'] . "<br>
Lastname: " . $row['surname'].
"<br> Start Date: " . $row['indate'].
"<br> End Date: " . $row['outdate'].
"<br> Hotel Name: " . $row['hotelname'].
"<br>" . $interval->format('%r%a days') . "<br> Total: R " . $value ."</div>";
    } 
}

//Display booking info for the user
echo '<div class="return">'. "<br> Firstname:".  $_SESSION['firstname']."<br>".
"Surname:".  $_SESSION['surname']."<br>".
"Start Date:". $_SESSION['indate']."<br>".
"End Date:". $_SESSION['outdate']."<br>".
"Hotel Name:". $_SESSION['hotelname']."".
"<br>" . $interval->format('%r%a days') .
"<br>".
"Total R" . $value ;

echo "<form class='form-inline' role='form' action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method='post'><input type='submit' name='confirm'></form>";

}

if(isset($_POST['confirm'])){
//Preparing and binding a statement
//prepare is method, this way we only pass the query once and then the values
$stmt=$conn->prepare("INSERT INTO bookings(firstname,surname,hotelname,indate,outdate) VALUES (?,?,?,?,?)");
//also part of preparing & binding these values to the questions marks.
$stmt->bind_param('sssss', $firstname,$surname,$hotelname,$indate,$outdate);
$firstname=$_SESSION['firstname'];
$surname=$_SESSION['surname'];
$hotelname=$_SESSION['hotelname'];
$indate=$_SESSION['indate'];
$outdate=$_SESSION['outdate'];
$stmt->execute();
echo '<div id="confirmed">'."Thank You For Booking ".'</div>';

}
?>     
  </div>
  </div> 
</div> 
    
</section>
  </div>

</div>
  
<footer class="page-footer bottom ">

<!-- Copyright -->
<div class="footer-copyright text-center py-4 blue-text font-weight-bold">© 2019 Copyright:
  <a href=""> tapfDESIGNS.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
              
    
</body>
</html>