<?php
session_start();
$_SESSION['name'] = "Boris";
echo $_SESSION['name'];
session_destroy();
echo $_SESSION['name'];
printf("Silentser");
