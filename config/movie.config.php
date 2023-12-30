<?php

if (isset($_POST['movieId'])) {
    $movieId = $_POST['movieId'];
    $prev_poster = $_POST['prev_poster'];
    $update = 'update';
} else {
    $update = 'new';
}

$title = $_POST['title'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];
$director = $_POST['director'];
$production = $_POST['production'];
$company = $_POST['company'];
$releaseDate = $_POST['releaseDate'];
$duration = $_POST['duration'];
$description = $_POST['description'];


$poster = $_FILES['poster']['name'];
$tmpName = $_FILES['poster']['tmp_name'];
$size = $_FILES['poster']['size'];
$type = $_FILES['poster']['type'];

$maxSize = 15000000;
$allowType = array('image/jpg', 'image/jpeg', 'image/png', 'image/pjepg');

$mkdirPoster = "../assets/poster";
if (!is_dir($mkdirPoster))
    mkdir($mkdirPoster);
$imagePoster = $mkdirPoster . "/" . $poster;


$validate = true;

if ($size > 0) {
    if ($size > $maxSize) {
        echo "File is too large! <br/> <br/>";
        echo mysqli_error($con);
        $validate = false;
    }
    if (!in_array($type, $allowType)) {
        echo "File type is not supported. <br/>";
        $validate = false;
    }
}

if (strlen(trim($title)) == 0) {
    echo "Title must be field in <br/>";
    $validate = false;
}

if (strlen(trim($genre)) == 0) {
    echo "Genre must be field in <br/>";
    $validate = false;
}

if (strlen(trim($rating)) == 0) {
    echo "Rating must be field in <br/>";
    $validate = false;
}
if (strlen(trim($director)) == 0) {
    echo "Director must be field in <br/>";
    $validate = false;
}
if (strlen(trim($production)) == 0) {
    echo "Production must be field in <br/>";
    $validate = false;
}
if (strlen(trim($company)) == 0) {
    echo "Company must be field in <br/>";
    $validate = false;
}
if (strlen(trim($releaseDate)) == 0) {
    echo "Release Date must be field in <br/>";
    $validate = false;
}
if (strlen(trim($duration)) == 0) {
    echo "Duration must be field in <br/>";
    $validate = false;
}
if (strlen(trim($description)) == 0) {
    echo "Description must be field in <br/>";
    $validate = false;
}

if (!$validate) {
    echo "There's still wrong.. ! <br/>";
    echo "<input onClick='self.history.back()' type='submit' value='Back'/>";
    exit;
}

include "connection.php";

if ($update == "update") {
    if ($size == 0) {
        $poster = $prev_poster;
    }

    $sql = "update movie set 
            poster = '$poster',
            title = '$title',
            genre = '$genre',
            rating = $rating,
            director = '$director',
            production = '$production',
            company = '$company',
            releaseDate = '$releaseDate',
            duration = '$duration',
            description = '$description'
            where movieId = $movieId";
} else {
    $sql = "insert into movie
    (poster, title, genre, rating, director, production, company, releaseDate, duration, description)
    value
    ('$poster', '$title', '$genre', $rating, '$director', '$production', '$company', '$releaseDate', '$duration', '$description')";
}

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Failed to save Data !!<br/>";
    echo mysqli_error($con);
    exit;
} else {
    if ($update == 'update') {
        header('location:../index.php');
    } else {
        header('location:../pages/add_actor.php');
    }

}

if ($size > 0) {
    if (!move_uploaded_file($tmpName, $imagePoster)) {
        echo "Failed to Upload image! </br>";
        echo mysqli_error($con);
        exit;
    } else {
        echo "image Upload Success";
    }
}
?>

<hr>
<a href="../pages/list_movie.php">List movie</a>