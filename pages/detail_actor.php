<?php
include "../include/header.php";
$actorId = $_GET['actorId'];

include "../config/connection.php";

$sql = "select * from actor
        where actorId = $actorId";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

?>

<section class='px-32 mt-5 mb-10'>
    <div>
        <figure>
            <img src="../assets/avatar/<?php echo $row['image'] ?>" alt="poster movie" class='w-52 object-cover'>
        </figure>
        <div class='py-5'>
            <p class='text-xl font-bold text-gray-400'>Name</p>
            <p>
                <?php echo $row['firstName'] . " " . $row['lastName'] ?>
            </p>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Birth Date</span>
            <span class='italic'>
                <?php echo $row['birthDate'] ?>
            </span>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Age</span>
            <span class='italic'>
                <?php
                echo $row['age']
                    ?>
            </span>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Active Year</span>
            <span class='italic'>
                <?php echo $row['activeYear'] ?>
            </span>
        </div>
    </div>
</section>