/* Create users */

<?php

@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Handle user creation
    //Validate and sanitize user input
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    //Database connection (replace with your database credentials)
    $conn = new mysqli("localhost", "username", "password", "database_name");
    
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }

    $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User created successfully";
    } else {
        echo "Error: " .sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


/* Edit users */
<?php

@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Handle user editing
    //Validate and sanitize user input
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    //Database connection and update query 
    //...

    echo "User information updated successfully";
}
?>


/* view users */

<?php
//Retrieve and display user data from the database
//...

//Example: Loop through user records and display them

?>

