<html>

<head> </head>
<body> 

<?php

if (isset($_POST['use_button']))
{
                    $servername = "localhost"; //mysql address
                    $username = "root";
                    $password = "root";
                    $dbname = "myDB";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 


                    // Escape user inputs for security
                    $first_name =  $_REQUEST['first_name'];
                    $last_name =$_REQUEST['last_name'];
                    $email =  $_REQUEST['email'];
                    

                    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                    VALUES ('$first_name', '$last_name', '$email')";

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();

}
?>

<form action="" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit" name="use_button" id="use_button" >
</form>

</body> 

</html>

