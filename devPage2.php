<form id='login-form' method='post'
      accept-charset='UTF-8'>
    <fieldset >
        <legend>Register</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <label for='name' >Your Full Name*: </label>
        <input type='text' name='name' id='name' maxlength="50" /><br>

        <label for='email' >Email Address*:</label>
        <input type='text' name='email' id='email' maxlength="50" /><br>

        <label for='username' >UserName*:</label>
        <input type='text' name='username' id='username' maxlength="50" /><br>

        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50" /><br>

        <input type='submit' name='Submit' value='Submit' />

    </fieldset>
</form>
<?php
///////////////
// BASE INFO //
///////////////
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'root';

$database = 'DieWing_db';
$psudotable = 'psudo_user';

// Connection Test
if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");
if (!mysql_select_db($database))
    die("Can't select database");


if(isset($_POST['Submit'])) {
    $name = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    if (mysql_query("INSERT INTO $psudotable( name,email,username,password) VALUES('$name','$email','$username','$password')")){
        ?>
        <script>alert('successfully registered ');</script>
        <?php
    } else {
        ?>
        <script>alert('error while registering you...');</script>
        <?php
    }
}


// sending query (making the table)
$result = mysql_query("SELECT * FROM {$psudotable}");
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