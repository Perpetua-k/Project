<?php

@include 'config.php';


session_unset();
session_destroy();

header('location:index.php');
?>











<?php

@include 'config.php';


if(!isset($_SESSION['admin_name'])){
    header('location:index.php');
}

?>


<?php echo $_SESSION['admin_name'] ?>