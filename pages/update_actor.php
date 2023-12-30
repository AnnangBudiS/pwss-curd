<?php
include "../include/header.php";
$actorId = $_GET['actorId'];
include "../config/connection.php";

$sql = "select * from actor where actorId = $actorId";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

?>

<div class='py-2 border-b'>
    <h2 class='px-4 text-xl font-bold'>Update Data Actor</h2>
</div>
<section class='mt-5'>
    <form action="../config/actor.config.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="actorId" value="<?php echo $row['actorId'] ?>">
        <div class='flex items-center justify-center'>
            <figure class='w-32'>
                <img src="../assets/avatar/<?php echo $row['image'] ?>" class="w-24 h-24 rounded-full"><br>
                <input type="file" name="image">
                <input type="hidden" name="prev_image" value="<?php echo $row['image'] ?>">
            </figure>
        </div>
        <div class='grid grid-cols-2 gap-4 mt-5 px-52'>
            <div>
                <label>First Name</label>
                <input type="text" name='firstName' value="<?php echo $row['firstName'] ?>"
                    class='w-full py-2 rounded-md bg-inherit border pl-2 '>
            </div>
            <div>
                <label>Last Name</label>
                <input type="text" name='lastName' value="<?php echo $row['lastName'] ?>"
                    class='w-full py-2 rounded-md bg-inherit border pl-2 '>
            </div>
            <div>
                <label>Birth Date</label>
                <input type="date" name='birthDate' value="<?php echo $row['birthDate'] ?>"
                    class='w-full py-2 rounded-md bg-inherit border pl-2 '>
            </div>
            <div>
                <label>Age</label>
                <input type="text" name='age' value="<?php echo $row['age'] ?>"
                    class='w-full py-2 rounded-md bg-inherit border pl-2 '>
            </div>
            <div>
                <label>Work</label>
                <input type="text" name='work' value="<?php echo $row['work'] ?>"
                    class='w-full py-2 rounded-md bg-inherit border pl-2 '>
            </div>
            <div>
                <label>Active Year</label>
                <input type="text" name='activeYear' value="<?php echo $row['activeYear'] ?>"
                    class='w-full py-2 rounded-md bg-inherit border pl-2 '>
            </div>
            <div>
                <button type="submit" name='update'
                    class="px-4 py-2 bg-gray-600 font-semibold hover:bg-indigo-500 hover:shadow-md rounded-md">UPDATE</button>
                <button type="reset"
                    class="px-4 py-2 bg-gray-600 font-semibold hover:bg-indigo-500 hover:shadow-md rounded-md">RESET</button>
            </div>
        </div>
    </form>
</section>