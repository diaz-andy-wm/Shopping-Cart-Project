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
<div id="cart">
    <ul>
        <li><a href="javascript:void(0)" class="otherButton" onclick = "document.getElementById('subs1').style.display='block';document.getElementById('fade').style.display='block'">USERS</a></li>
    </ul>
</div>
<!--***  header end  ***-->
<!--# # # # # # # # # # -->
<!--#   CONTENT DIV   #-->
<!--# # # # # # # # # # -->
<div id="content">
    <div class="textboxT2" style="text-align: center">
        <h1>Welcome New User!</h1>
        <h3>Thank you for shopping with us.</h3>
        <p>We would like to show our appreciation to (*PLACEHOLDER*) by giving you 50% off an item on your next purchase! Just click on the link below to receive your checkout code.</p>
        <a href="">Promo Code</a>
        <p>Thank you, come again!</p>
        <img src="pictures/DW-logo.png">
    </div>
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
<!--# # # # # # # # #-->
<!--#   PHP STUFF   #-->
<!--# # # # # # # # #-->

<div id="subs1" class="List">
    <h3>Users</h3><img src="pictures/DW-logo.png">
    <div id="php">
        <div id="php">
            <?php
            ///////////////
            // BASE INFO //
            ///////////////
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pwd = 'root';

            $database = 'DieWing_db';
            $table1 = 'user';

            // Connection Test
            if (!mysql_connect($db_host, $db_user, $db_pwd))
                die("Can't connect to database");
            if (!mysql_select_db($database))
                die("Can't select database");

            // sending query
            $result = mysql_query("SELECT * FROM {$table1}");
            if (!$result) {
                die("Query to show fields from table failed");
            }

            $fields_num = mysql_num_fields($result);

            echo "<table border='1'><tr>";
            // printing table headers
            for($i=0; $i<$fields_num; $i++)
            {
                $field = mysql_fetch_field($result);
                echo "<td>{$field->name}</td>";
            }
            echo "</tr>\n";
            // printing table rows
            while($row = mysql_fetch_row($result))
            {
                echo "<tr>";

                // $row is array... foreach( .. ) puts every element
                // of $row to $cell variable
                foreach($row as $cell)
                    echo "<td>$cell</td>";

                echo "</tr>\n";
            }
            mysql_free_result($result);
            ?>
        </div>
    </div>
    <a href = "javascript:void(0)" class="close" onclick = "document.getElementById('subs1').style.display='none';document.getElementById('fade').style.display='none'">x</a>
</div>


<!--***  php stuff end  ***-->


<!--***    body end   ***-->
</body>

</html>