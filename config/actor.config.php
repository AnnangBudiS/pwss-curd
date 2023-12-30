<?php

if (isset($_POST['actorId'])) {
    $actorId = $_POST['actorId'];
    $prev_image = $_POST['prev_image'];
    $update = "update";
} else {
    $update = "new";
}


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDate = $_POST['birthDate'];
$age = $_POST['age'];
$work = $_POST['work'];
$activeYear = $_POST['activeYear'];

$image = $_FILES['image']['name'];
$tmpName = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];

$maxSize = 15000000;
$allowType = array('image/jpg', 'image/jpeg', 'image/png', 'image/pjepg');

$mkdirImg = "../assets/avatar";
if (!is_dir($mkdirImg))
    mkdir($mkdirImg);
$imageAvatar = $mkdirImg . "/" . $image;

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

if (strlen(trim($firstName)) == 0) {
    echo "First Name must be field in <br/>";
    $validate = false;
}

if (strlen(trim($lastName)) == 0) {
    echo "Last Name must be field in <br/>";
    $validate = false;
}

if (strlen(trim($birthDate)) == 0) {
    echo "Birth Date must be field in <br/>";
    $validate = false;
}

if (strlen(trim($age)) == 0) {
    echo "Age must be field in <br/>";
    $validate = false;
}

if (strlen(trim($work)) == 0) {
    echo "Work must be field in <br/>";
    $validate = false;
}

if (strlen(trim($activeYear)) == 0) {
    echo "Active Year must be field in <br/>";
    $validate = false;
}

if (!$validate) {
    echo "There's still wrong.. ! <br/>";
    echo "<input onClick='self.history.back()' type='submit' value='Back'/>";
    exit;
}

include "connection.php";

if ($update == 'update') {
    if ($size == 0) {
        $image = $prev_image;
    }
    $sql = "UPDATE actor SET 
            firstName = '$firstName',
            lastName = '$lastName',
            birthDate = '$birthDate',
            age = $age,
            work = '$work',
            activeYear = '$activeYear',
            image = '$image'
            WHERE actorId = $actorId ";
} else {

    $sql = "INSERT INTO actor(firstName, lastName, birthDate, age, work, activeYear, image )
    VALUES
    ('$firstName', '$lastName', '$birthDate', $age, '$work', '$activeYear', '$image')";
}

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Failed to save Data !!<br/>";
    echo mysqli_error($con);
    exit;
} else {
    header("location:../pages/add_actorMovie.php");
}

if ($size > 0) {
    if (!move_uploaded_file($tmpName, $imageAvatar)) {
        echo "Failed to Upload image! </br>";
        echo mysqli_error($con);
        exit;
    } else {
        echo "image Upload Success";
    }
}
?>