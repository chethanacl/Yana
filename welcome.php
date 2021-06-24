<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yana-Home</title>
    <link rel="stylesheet" href="home.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    


</head>

<body>
    <div class="header">Yana

        <!-- <button><a href="reset-password.php" class="btn-warning">Reset Your Password</a></button>-->
        <button class="logout"><a href="logout.php" class="btn-danger ">Logout</a></button>

    </div>

    <div class="travel-categories">
        <div class="category">
            <img src="images/trek.jpg" alt="trek image" class="category_image">

            <div class="category_info">
                <div>
                    <a href="trek.php" class="category_link">Trek</a>
                </div>
            </div>
        </div>

        <div class="category">
            <img src="images/historical.jpg" alt="trek image" class="category_image">

            <div class="category_info">
                <div>
                    <a href="his.php" class="category_link">Historical</a>
                </div>
            </div>
        </div>

        <div class="category">
            <img src="images/beaches.jpeg" alt="trek image" class="category_image">

            <div class="category_info">
                <div>
                    <a href="beaches.php" class="category_link">Beaches</a>
                </div>
            </div>
        </div>
        <div class="category">
            <img src="images/chillout.jpg" alt="trek image" class="category_image">

            <div class="category_info">
                <div>
                    <a href="wild.php" class="category_link">Chillout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="special">Special Packages</div>
    <div class="slider-area">
        <div class="slider">
            <div class="slide active" id="ladakh"><img src="images/ladakh.jpg" class="package" id="ladakh">
                <div class="text-block">
                    <div class="topleft"><b class="title"><a href="special.php">Leh Ladakh Tour Package</a></b><br><br>5D/6N &nbsp;&nbsp;&nbsp;&nbsp;INR 35,000 per adult</div>
                </div>
            </div>
            <div class="slide" id="sikkim"><img src="images/sikkim.jpg" class="package" id="sikkim">
                <div class="text-block">
                    <div class="topleft"><b class="title"><a href="special.php">North Sikkim Tour with Lachen Lachung</a></b><br><br>5D/6N &nbsp;&nbsp;&nbsp;&nbsp;INR 20,000 per adult</div>
                </div>
            </div>
            <div class="slide" id="kerala"><img src="images/kerala.jpg" class="package" id="kerala">
                <div class="text-block">
                    <div class="topleft"><b class="title"><a href="special.php">Kerala Tour Package</a></b><br><br>4D/5N &nbsp;&nbsp;&nbsp;&nbsp;INR 18,000 per adult</div>
                </div>
            </div>
            <div class="slide" id="kedarnath"><img src="images/kedarnath.jpg" class="package" id="kedarnath">
                <div class="text-block">
                    <div class="topleft"><b class="title"><a href="special.php">Kedarnath Tour Package</a></b><br><br>5D/6N &nbsp;&nbsp;&nbsp;&nbsp;INR 25,000 per adult</div>
                </div>
            </div>
            <div class="slide" id="jammu"><img src="images/jammu.jpg" class="package" id="jammu">
                <div class="text-block">
                    <div class="topleft"><b class="title"><a href="special.php"> Kashmir Package</a></b><br><br>5D/6N &nbsp;&nbsp;&nbsp;&nbsp;INR 35,000 per adult</div>
                </div>
            </div>
        </div>
        <button class="prev" id="prev"></button>
        <button class="next" id="next"></button>

        <div class="indicator">
            <ul id="ul">
                <li class="active" onclick="conSlides(0)"></li>
                <li onclick="conSlides(1)"></li>
                <li onclick="conSlides(2)"></li>
                <li onclick="conSlides(3)"></li>
                <li onclick="conSlides(4)"></li>
            </ul>
        </div>
    </div>

    





        <footer class="footer-distributed">
            <div class="footer-left">

                <h3>About<span>Yana</span></h3>
                <p class="footer-links">
                    <a href="#">Home</a>
                    |
                    <a href="#">Special Packages</a>
                    |
                    <a href="#">About Us</a>
                    |
                    <a href="#">Contact Us</a>
                </p>

                <p class="footer-company-name">© 2021 Yana Tour & Travel Pvt. Ltd.</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>333 - Orchids,
                            Bldg. No. C - 1, Sector - 3</span>
                        Malleshwaram, Bangalore - 560003</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 8946571365</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@yana.com">support@yana.com</a></p>
                </div>
            </div>

            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    We offer affordable and best travel packages worth travelling. We work towards providing our clients unforgetable trips.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </footer>









       
        <script>
            var slide = document.getElementsByClassName("slide");
            var ul = document.getElementById("ul");
            var dot = ul.getElementsByTagName("li");
            var total_slides = slide.length;
            var i, index = 0;
            document.getElementById("next").addEventListener("click", function() {
                index += 1;
                conSlides(index);
            });
            document.getElementById("prev").addEventListener("click", function() {
                index -= 1;
                conSlides(index);

            });

            function conSlides(x) {
                if (x > total_slides - 1) {
                    index = 0;
                }
                if (x < 0) {
                    index = total_slides - 1;
                }
                if (x < total_slides && x >= 0) {
                    index = x;
                }
                for (i = 0; i < total_slides; i++) {
                    slide[i].classList.remove("active");
                    dot[i].classList.remove("active");
                }
                slide[index].classList.add("active");
                dot[index].classList.add("active");
            }



            
    
    </script>

</body>

</html>