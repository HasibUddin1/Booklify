<?php
include_once "db_connection.php";

if($conn){
    echo "Database connection successful!";
} else {
    echo "Database connection failed!";
}
?>