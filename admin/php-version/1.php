<?php

if (isset($_POST['submit']))
{    
    
    mysql_connect("host", username", "password") or die("could not connect to the database");
    mysql_select_db("db_name") or die("could not select database");

    
    $username = $_POST['username'];
    $email = $_POST['email'];

    
    $sql = mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `email` = '$email'");
    $result = mysql_num_rows($sql);

    
    if (!$result)
    {
        die (mysql_error());
    }

    
    if ($result == 1)
    {
        $rows = mysql_fetch_array($result);
        $password = $rows['password'];
        $email = $rows['email'];
        $subject ="Password request";
        $header = "from: omarmuzaffar@live.co.uk";
        $body = "Your password is " . $password; 

        mail ($email, $subject, $header, $body); 
        print("an email containning the password has been sent to you");
    }else
    {
        echo ("No such user exists in the system. Please try again");
    }

}

?>

<html>
<head>
    <title>
        forgot password form
    </title>
</head>
    <body>
        <form  method = "POST">
            <p>
                <label for = "username">Username:</label>
                <input type = "text" name = "username" />
            </p>
            <p>
                <label for = "email">Email:</label>
                <input type = "text" name = "email" />
            </p>
            <p>
                <input type = "submit" name="submit" />
                <input type = "reset" name = "reset" />
            </p>
        </form>
    </body>
</html>
