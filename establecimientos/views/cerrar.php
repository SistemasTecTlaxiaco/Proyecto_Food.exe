<?php
@session_start();
session_destroy();
require_once 'views/main.php';
?>