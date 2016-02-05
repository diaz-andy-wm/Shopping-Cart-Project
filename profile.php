<!DOCTYPE html>
<html lang="en">
<head>
    <title>DieWing Profile Page</title>
    <link rel="stylesheet" type="text/css" href="primaryStylesheet.css">
    <script src="jquery.js"></script>
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
    <script>
        /**
         * Created by session1 on 2/4/16.
         */
        var main = function(){
            $('#submit').click(function() {
                var Username = document.getElementById('Username').value;
                var Password = document.getElementById('Password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;
                var dateOfBirth = document.getElementById('dateOfBirth').value;
                var email = document.getElementById('email').value;
                var address = document.getElementById('address').value;
                var city = document.getElementById('city').value;
                var state = document.getElementById('state').value;
                var country = document.getElementById('dateOfBirth').value;
                var zip = document.getElementById('email').value;
                var credCard = document.getElementById('credCard').value;
                var UserTable = document.getElementById('tableID');

                if(Username == ""){
                }else{
                    var row = UserTable.insertRow(1);
                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    var cell6 = row.insertCell(6);
                    var cell7 = row.insertCell(7);
                    var cell8 = row.insertCell(8);
                    var cell9 = row.insertCell(9);
                    var cell10 = row.insertCell(10);
                    cell0.innerHTML = Username;
                    cell1.innerHTML = Password;
                    cell2.innerHTML = confirmPassword;
                    cell3.innerHTML = dateOfBirth;
                    cell4.innerHTML = email;
                    cell5.innerHTML = address;
                    cell6.innerHTML = city;
                    cell7.innerHTML = state;
                    cell8.innerHTML = country;
                    cell9.innerHTML = zip;
                    cell10.innerHTML = credCard;
                }
            });
        };
        $(document).ready(main);
    </script>
    <table id="tableID">
        <tr>
            <td>Username</td>
            <td>Password</td>
            <td>confirmPassword</td>
            <td>dateOfBirth</td>
            <td>email</td>
            <td>address</td>
            <td>city</td>
            <td>state</td>
            <td>country</td>
            <td>zip</td>
            <td>credCard</td>
        </tr>
    </table>
    <br><br><br>
</div>
<!--***  content end  ***-->
<!--# # # # # # # # # #-->
<!--#   FOOTER DIV    #-->
<!--# # # # # # # # # #-->
<footer>
    <div id="copyright">
        <p>&copy 2015 - DieWing Inc. All Rights Reserved</p>
    </div>
    <div id="lowLinks">
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