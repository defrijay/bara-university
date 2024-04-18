<?php
    //session
        session_start();
        $_SESSION = [];
    //hapus session
        session_unset();
        session_destroy();
    //redirect
        header("Location: index.php");
?>