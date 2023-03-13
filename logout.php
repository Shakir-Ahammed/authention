<?php
session_destroy();

unset($_SESSION['name']);

header('Location:login.php');
