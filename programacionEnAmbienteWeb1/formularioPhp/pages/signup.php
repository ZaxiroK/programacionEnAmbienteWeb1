<?php
  if($_POST) {
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];

    $sql = "INSERT INTO users(`username`, `name`, `lastname`) VALUES ('$username','$name', '$lastname')";

    $connection = mysqli_connect('localhost', 'root', '', 'test');
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: /utn/pages/?status=success');
  } else {
    header('Location: /utn/pages/?status=error');
  }




