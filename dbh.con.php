<?php
$conn = mysqli_connect('localhost', 'root', '', 'comments' );
$art = mysqli_connect('localhost', 'root', '', 'article' );
$login = mysqli_connect('localhost', 'root', '', 'login' );

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

if (!$art) {
    die("Connection failed: ".mysqli_connect_error());
}

if (!$login) {
    die("Connection failed: ".mysqli_connect_error());
}
?>