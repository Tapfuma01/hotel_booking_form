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
    <link rel="stylesheet" href="styles.css">
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
    <h1>HOTEL BOOKING FORM</h1>
        <br>
        <!--HOTEL IMAGES AND PRICES-->
    <div class="container">
            <div class="row text-">
              <div class="col-md-12">
               <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
          <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg" alt="First slide">
          </div>
          <!--/First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
          </div>
          <!--/Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" alt="Third slide">
          </div>
          <!--/Third slide-->
          <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
          </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
       <!--Card content-->
       <div class="card-body card-body-cascade text-center">
            <!--Title-->
            <h4 class="card-title"><strong>PROTEA HOTEL</strong></h4>
            <h5 class="indigo-text"><strong>R1200/nite</strong></h5>
          </div>
              </div>
              
                  </div>
                </div>
              </div>
             
              <!--HOTEL USER INPUT FIELD-->
              <h2 class="text-center">BOOK HERE</h2>
  
    <div class="container">
  <!--Section: Live preview-->
<section class="form-dark">

<!--Form without header-->
<div class="card card-image"
  style="background-image: url('https://image.freepik.com/free-photo/woman-reception-hotel-checking_95419-4849.jpg'); width: 28rem;">
  <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

    <!--Header-->
    <div class="text-center">
      <h3 class="white-text mb-5 mt-4 font-weight-bold"><strong>BOOKING</strong> <a
          class="green-text font-weight-bold"><strong> FORM</strong></a></h3>
    </div>

    <!--Body-->
    <div class="md-form">
      <input type="text" id="Form-email5" class="form-control white-text">
      <label for="Form-email5">Your email</label>
    </div>
    
    

    <div class="md-form pb-3">
      <input type="password" id="Form-pass5" class="form-control white-text">
      <label for="Form-pass5">Your password</label>
      <div class="form-check my-4">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck17">
        <label class="form-check-label white-text" for="defaultCheck17">Accept the<a href="#"
            class="green-text font-weight-bold"> Terms and Conditions</a></label>
      </div>
    </div>

    <!--Grid row-->
    <div class="row d-flex align-items-center mb-4">

      <!--Grid column-->
      <div class="text-center mb-3 col-md-12">
        <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">SUBMIT</button>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->

    <!--Grid column-->
    <div class="col-md-12">
      <p class="font-small white-text d-flex justify-content-end">Have an account? <a href="#"
          class="green-text ml-1 font-weight-bold"> Log in</a></p>
    </div>
    <!--Grid column-->

  </div>
</div>
<!--/Form without header-->

</section>
<!--Section: Live preview-->
            <div class="row one">
                    <div class="col-md-6">
                            <div id='form'>
                                    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    
                                    <label>First Name<input type="text" name="firstname" placeholder='First Name' required></label><br>
                                    
                                    <label>Hotel Name
                                    <select name="hotelname" required>
                                      <option value="Holiday Inn">Holiday Inn</option>
                                      <option value="Radison">Radison</option>
                                      <option value="City Lodge">City Lodge</option>
                                      <option value="Town Lodge">Town Lodge</option>
                                    </select>
                                    </label><br>
                                    
                                    <label>In Date<input type="date" name="indate" placeholder='indate' required></label><br>
                                    <label>Out Date<input type="date" name="outdate" placeholder='outdate' required></label><br>
                                    <button class="submit" name="submit" type="submit">Submit</button>
                                    
                                    
                                    </form>
                                    </div>
                    </div>
                    </div>
                        <div class="col-md-6">
                                             <!---PHP SECTION--->

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


//echo '<br>'. $_POST['firstname'] .'<br>'. $_POST['lastname'].'<br>'.$_POST['hotelname'].'<br>'.$_POST['indate'].'<br>'. $_POST['outdate'];




if (isset($_POST['submit'])) {
   $_SESSION['firstname']= $_POST['firstname'];
   $_SESSION['surname']= $_POST['surname'];
   $_SESSION['hotelname']= $_POST['hotelname'];
   $_SESSION['indate']= $_POST['indate'];
   $_SESSION['outdate']= $_POST['outdate'];



//echo $_SESSION['firstname'] //."<br>".  $_SESSION['lastname'] ."<br>".  $_SESSION['hotelname'] ."<br>". $_SESSION['indate'] ."<br>". $_SESSION['outdate']."<br>";


//display booking info to user

// echo "<br> Firstname:".  $_SESSION['firstname']."<br>".
// "surname:".  $_SESSION['surname']."<br>".
// "Start Date:". $_SESSION['indate']."<br>".
// "End Date:". $_SESSION['outdate']."<br>".
// "Hotel Name:". $_SESSION['hotelname']."<br>";


//calculate duration of user's stay at hotel
$datetime1 = new DateTime($_SESSION['indate']);
$datetime2 = new DateTime($_SESSION['outdate']);
$interval = $datetime1->diff($datetime2);

$interval->format('%d');

$checkInStamp = strtotime($_SESSION['indate']);
        $checkOutStamp = strtotime($_SESSION['outdate']);
        
        // echo $checkInStamp . '<br>';
        //  echo $checkOutStamp;
        // if ($checkInStamp - $checkOutStamp > 86400 || $checkInStamp == $checkOutStamp) {
        //     header("Location: ?error=timestamp");
        //     exit;
        // }

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


echo '<div class="return">'. "<br> Firstname:".  $_SESSION['firstname']."<br>".
"surname:".  $_SESSION['surname']."<br>".
"Start Date:". $_SESSION['indate']."<br>".
"End Date:". $_SESSION['outdate']."<br>".
"Hotel Name:". $_SESSION['hotelname']."<br>".
"Total R" . $value ;

echo "<form role='form' action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method='post'>
<button name='confirm' type='submit'> Confirm </button> </form>".'</div>';

echo "<form role='form' action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method='post'><input type='submit' name='confirm'>.'Confirm'.</form>";

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
echo '<div id="confirmed">'."Booking confirmed".'</div>';

}

// if($_POST['confirm']){
//    $firstname =$_SESSION['firstname'];
//    $surname =$_SESSION['surname'];
//    $hotelname =$_SESSION['hotelname'];
//    $indate=$_SESSION['indate'];
//    $outdate=$_SESSION['outdate'];
//      mysqli_query($conn, "INSERT INTO bookings (firstname, surname, hotelname,indate,outdate)
//      VALUES ('$firstname ', '$surname','$hotelname','$indate','$outdate')");
// }




?>
                        </div>
                  </div>

    </div>
              
    
</body>
</html>