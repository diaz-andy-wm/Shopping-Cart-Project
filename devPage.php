<!DOCTYPE html>
<html lang="en">
<head>
    <title>DieWing Product Index</title>
    <link rel="stylesheet" type="text/css" href="primaryStylesheet.css">
</head>
<body>
<!--###  body start  ###-->
<!--# # # # # # # # # #-->
<!--#   HEADER DIV    #-->
<!--# # # # # # # # # #-->
<header>
    <div id="head">
        <div id="siteName">
            <h1>DieWing</h1>
            <img src="pictures/DW-logo(tan).png">
        </div>
        <br>
        <div id="signIn">
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="signIn.php">Sign In</a></li>
            </ul>
        </div>
    </div>
    <br><br><br>
    <div id="navbar">
        <ul>
            <li style="float: left; margin-left: 7%"><p>Look Fly, Friend</p></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
</header>
<!--***  header end  ***-->
<!--# # # # # # # # # # -->
<!--#   CONTENT DIV   #-->
<!--# # # # # # # # # # -->
<div id="content">
    <img src="http://yaleherald.com/wp-content/uploads/2011/04/BTbw-550x269.jpg">
</div>
<!--***  content end  ***-->
<!--# # # # # # # # # #-->
<!--#   FOOTER DIV    #-->
<!--# # # # # # # # # #-->
<footer>
    <div id="copyright">
        <p>&copy 2015 - DieWing Inc. All Rights Reserved</p>
    </div>
    <div id="CartLowLinks">
        <a href="index.php">Home</a>
        <a href="signIn.php">Sign-In</a>
        <a href="about.php">About Us</a>
        <img src="pictures/DW-logo(grey).png">
    </div>
</footer>
<!--***  footer end   ***-->
<!--# # # # # # # # # #-->
<!--#   SECTION DIV   #-->
<!--# # # # # # # # # #-->
<section>
    <div id="stuffName">
        <img src="pictures/DW-logo.png">
        <h1>Cart</h1>
    </div>
    <div id="stuff">
        <ul>
            <li><a href="#" onclick="myJsFunc();">/^\</a></li>
            <li>N/A</li>
            <li>Items: </li>
        </ul>
    </div>
</section>
<script>
    function myJsFunc() {
        alert("YOU BROKE IT!!!");
    }
</script>
<nav>
    <nav>
        <div id="stuffOpen">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
            </ul>
        </div>
    </nav>
</nav>
<!--***  section end   ***-->
<!--***    body end   ***-->
</body>
</html>