<?php
$connect = mysqli_connect('localhost', 'root', '', 'j2school');
mysqli_set_charset($connect,'utf8');
if ($connect->connect_error) {
    die("Connection failed: ");
}