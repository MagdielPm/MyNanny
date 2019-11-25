<?php
session_start();
session_destroy();
header('Location: ../HTML/loginUser.php');

?>