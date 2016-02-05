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
<div id="signInName">
    <a href="index.php"><img src="pictures/DieWing_card"></a>
</div>
<!--***  header end  ***-->
<!--# # # # # # # # # # -->
<!--#   CONTENT DIV   #-->
<!--# # # # # # # # # # -->
<div id="signInContent">
<h3>Log-in</h3>
    <form id="logIn">
        <label for="logInUsername">Username: </label>
        <input type="text" class="infoSlot" name="logInsername" id="logInUsername"><br>

        <label for="Password">Password: </label>
        <input type="password" class="infoSlot" name="logInPassword" id="logInPassword"><br>
        <button type="button" class="otherButton" id="logInSubmit">Log-In</button><br>
        <a href="javascript:void(0)" class="otherButton" onclick = "document.getElementById('subs1').style.display='block';document.getElementById('fade').style.display='block'">Register</a>
    </form>

    <!--* register form *-->
    <div id="subs1" class="white_content">
        <h3>Register</h3><img src="pictures/DW-logo.png">
        <div id="regDiv">
        <form id="register">
            <label for="Username">Username: </label>
            <input type="text" class="infoSlot" name="Username" id="Username"><br>

            <label for="Password">Password: </label>
            <input type="password" class="infoSlot" name="Password" id="Password"><br>

            <label for="confirmPassword">Confirm Password: </label>
            <input type="password" class="infoSlot" name="confirmPassword" id="confirmPassword"><br>

            <label for="dateOfBirth">Date of Birth: </label>
            <input type="date" class="infoSlot" name="dateOfBirth" id="dateOfBirth"><br>

            <label for="email">Email: </label>
            <input type="text" class="infoSlot" name="email" id="email"><br>

            <label for="address">Address: </label>
            <input type="text" class="infoSlot" name="address" id="address"><br>

            <label for="city">City: </label>
            <input type="text" class="infoSlot" name="city" id="city"><br>

            <label for="state">State: </label>
            <select  class="infoSlot" id="state">
                <option>Not Applicable</option>
                <option>AL</option>
                <option>AK</option>
                <option>AR</option>
                <option>AZ</option>
                <option>CA</option>
                <option>CO</option>
                <option>CT</option>
                <option>DE</option>
                <option>FL</option>
                <option>GA</option>
                <option>IA</option>
                <option>ID</option>
                <option>IL</option>
                <option>IN</option>
                <option>KS</option>
                <option>KY</option>
                <option>LA</option>
                <option>MA</option>
                <option>MD</option>
                <option>ME</option>
                <option>MI</option>
                <option>MN</option>
                <option>MO</option>
                <option>MS</option>
                <option>MT</option>
                <option>NC</option>
                <option>ND</option>
                <option>NE</option>
                <option>NH</option>
                <option>NJ</option>
                <option>NM</option>
                <option>NV</option>
                <option>NY</option>
                <option>OH</option>
                <option>OK</option>
                <option>OR</option>
                <option>PA</option>
                <option>RI</option>
                <option>SC</option>
                <option>SD</option>
                <option>TN</option>
                <option>TX</option>
                <option>UT</option>
                <option>VA</option>
                <option>VT</option>
                <option>WA</option>
                <option>WI</option>
                <option>WV</option>
                <option>WY</option>
            </select><br>

            <label for="country">Country: </label>
            <select  class="infoSlot" id="country">
                <option>United States</option>
                <option>Canada</option>
                <option>Ireland</option>
                <option>England</option>
                <option>Japan</option>
                <option>Australia</option>
                <option>New Zealand</option>
                <option>Mexico</option>
                <option>France</option>
                <option>Italy</option>
            </select><br>

            <label for="zip">Zip Code: </label>
            <input type="text" class="infoSlot" name="zip" id="zip"><br>

            <label for="credCard">Credit/Debt Card: </label>
            <input type="text" class="infoSlot" name="credCard" id="credCard"><br>
            <button type="button" id="submit">Submit</button>
        </form>
        </div>
        <a href = "javascript:void(0)" class="close" onclick = "document.getElementById('subs1').style.display='none';document.getElementById('fade').style.display='none'">x</a>
    </div>
    <!--* register form end *-->

    <div id="fade" class="black_overlay"></div>
</div>
<!--***  content end  ***-->
<!--# # # # # # # # # #-->
<!--#   FOOTER DIV    #-->
<!--# # # # # # # # # #-->
<footer>
    <div id="copyright">
        <p>&copy 2015 - DieWing Inc. All Rights Reserved</p>
    </div>
    <div id="signInlowLinks">
        <a href="index.php">Home</a>
        <a href="signIn.php">Sign-In</a>
        <a href="about.php">About Us</a>
        <img src="pictures/DW-logo(grey).png">
    </div>
</footer>
<!--***  footer end   ***-->
<!--***    body end   ***-->
</body>
</html>