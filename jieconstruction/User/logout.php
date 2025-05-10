<?php
session_start();
session_destroy();
header("Location: /jieconstruction/homepage.php");
exit();
?>