<?php

include('connection.php');

$id     = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM tb_valas WHERE id='$id' ");

header('Location:index.php');

?>