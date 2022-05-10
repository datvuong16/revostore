<?php
session_start();
if (!isset($_SESSION['useradmin'])) {
    header("location: login.php");
}

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once("../vendor/autoload.php");

use App\Library\Route;

new Route('admin');
