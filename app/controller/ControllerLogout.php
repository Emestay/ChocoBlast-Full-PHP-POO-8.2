<?php
session_start();
session_unset();
session_destroy();

header("Location: ../vue/view_login_page.php");
exit;
?>