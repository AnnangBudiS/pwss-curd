<?php
$actorId = $_POST['actorId'];
$movieId = $_POST['movieId'];


include 'connection.php';

$sql = "insert into actorMovie(actorId, MovieId)
        values
        ($actorId, $movieId)";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Add Data Failed";
    echo mysqli_error($con);
    exit;
} else {
    header('location:../index.php');
}

?>