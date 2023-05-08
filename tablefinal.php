
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style5.css">
    </head>
    <body>
        <div class="logo">
            <a href="index.html">
            <img src="images/QVKBook (2).png" alt="">
            </a>
        </div>
        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form method="post" action="tablefinal.php">
                        <div class = "form-row">
                            <select name = "days">
                                <option value = "day-select">Select Day</option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select>

                            <select name = "hours">
                                <option value = "hour-select">Select Hour</option>
                                <option value = "10">10: 00</option>
                                <option value = "10">12: 00</option>
                                <option value = "10">14: 00</option>
                                <option value = "10">16: 00</option>
                                <option value = "10">18: 00</option>
                                <option value = "10">20: 00</option>
                                <option value = "10">22: 00</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" name="fullname" placeholder="Full Name">
                            <input type = "text" name="phone" placeholder="Phone Number">
                        </div>

                        <div class = "form-row">
                            <input type = "number" name="tfor" placeholder="Table for:" min = "1">
                            <select name="disc">
                                <option value="discount slect">Select discount</option>
                                <option value="10">20%</option>
                                <option value="10">30%</option>
                                <option value="10">40%</option>
                                <option value="10">50%</option>
                                <option value="10">60%</option>
                                <option value="10">70%</option>
                            </select>
                            <input type = "submit" name="submit" value ="Book Now" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="popup" id="popup">
        <div class="popup__content">
            <div class="close__popup">&times;</div>
            <h1>Booking Confirmed</h1>
            <p>Your Booking is Confirmed. Enjoy!</p>
        </div>
        </div>
        <script src="app4.js"></script>
    </body>
</html>

<?php
include 'con.php';

if(isset($_POST['submit']))
{
$daydata = $_POST['days'];
$hoursdata = $_POST['hours'];
$fname = $_POST['fullname'];
$phone = $_POST['phone'];
$tablefor = $_POST['tfor'];
$diskdata = $_POST['disc'];

$sql = "INSERT INTO `table_reservation`(`day`, `hours`, `fname`, `phone`, `tablefor`, `disc`) VALUES ('$daydata', '$hoursdata', '$fname', '$phone', '$tablefor', '$diskdata')";
if (mysqli_query($conn, $sql)) { 
    echo '<script language="javascript">';
    echo 'alert("Your Table Successfully Booked!!! 😍"); location.href="tablefinal.php"';
    echo '</script>';
} 
}

 
mysqli_close($conn);
?>