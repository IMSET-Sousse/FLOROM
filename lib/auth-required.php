<?php
session_start();
$logedin = FALSE;
if (isset($_SESSION['id'])) {
    $logedin = TRUE;
} else {
    $logedin = FALSE;
}
