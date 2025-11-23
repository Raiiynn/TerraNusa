<?php
session_destroy();
header("Location: get.php?page=index");
exit;
?>