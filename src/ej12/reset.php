<?php
session_start();
unset($_SESSION["piramide"]);
header("Location: index.php");
