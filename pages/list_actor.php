<?php
include "../include/header.php";
include "../config/connection.php";

$sql = "select * from actor";
$result = mysqli_query($con, $sql);



?>
<section>
    <div class="p-4">
        <h2 class="text-3xl font-bold">Wellcome to Dashboard</h2>
        <p class="mt-2">Hay wellcome to dashboard...</p>
    </div>
    <hr />
    <div class='mt-5 px-24 flex flex-wrap gap-4'>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='w-48 p-2 hover:shadow-md rounded-md'>";
            echo "<figure>";
            echo "<img src='../assets/avatar/" . $row['image'] . "' class='object-contain h-48 w-96'/>";
            echo "</figure>";
            echo "<div class='text-centern mt-1'>";
            echo "<a href='detail_actor.php?actorId=" . $row['actorId'] . " ' class='text-sm font-semibold my-2 hover:text-sky-500'>" . $row['firstName'] . " " . $row['lastName'] . "</a>";
            echo "<p  class='text-sm text-gray-400 '><span>Age : </span>" . $row['age'] . " Years Old</p>";
            echo "<p  class='text-sm text-gray-400 '><span>Active Year : </span>" . $row['activeYear'] . "</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

</section>