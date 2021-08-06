<?php

    if(isset($_GET))
    {
        $id=$_GET['id'];

        session_start();
        $_SESSION['user_id']=$id;
    }

?>

user session = <?=$_SESSION['user_id']?>

<?php
// header("Location: http://localhost/learning/testtitle.php");
// exit();
?>