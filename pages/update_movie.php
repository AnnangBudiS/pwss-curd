<?php
include "../include/header.php";
$movieId = $_GET['movieId'];
include '../config/connection.php';

$sql = "select * from movie where movieId = $movieId";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<div class='py-2 border-b'>
    <h2 class='px-4 text-xl font-bold'>Update Movie</h2>
</div>
<section class="flex justify-center my-5">
    <form action="../config/movie.config.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="movieId" value="<?php echo $row['movieId'] ?>">
        <div>
            <img src="../assets/poster/<?php echo $row['poster'] ?>" alt="" style='width:100px;'><br>
            <input type="hidden" name="prev_poster" value="<?php echo $row['poster'] ?>">
            <input type="file" name="poster">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Title</label>
            <input type="text" name="title" value="<?php echo $row['title'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Genre</label>
            <input type="text" name="genre" value="<?php echo $row['genre'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Rating</label>
            <input type="text" name="rating" value="<?php echo $row['rating'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Director</label>
            <input type="text" name="director" value="<?php echo $row['director'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Company</label>
            <input type="text" name="company" value="<?php echo $row['company'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Production</label>
            <input type="text" name="production" value="<?php echo $row['production'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Relase Date</label>
            <input type="date" name="releaseDate" value="<?php echo $row['releaseDate'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Duration</label>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>"
                class="w-full border py-1 rounded-md pl-2">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description"
                class="w-full border py-1 rounded-md pl-2"><?php echo $row['description'] ?></textarea>
        </div>
        <div class="flex items-center justify-center gap-4 mt-5">
            <button class="py-2 px-4 bg-gray-400 rounded-md hover:bg-sky-500 hover:shadow-md" type="submit"
                name='new'>UPDATE</button>
            <button class="py-2 px-4 bg-gray-400 rounded-md hover:bg-sky-500 hover:shadow-md" type="reset"
                name='new'>CANCEL</button>
        </div>
    </form>
</section>