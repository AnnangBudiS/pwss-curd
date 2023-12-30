<?php
include '../include/header.php';
$actorMovieId = $_GET['actorMovieId'];

include '../config/connection.php';
$sql = "select movie.*, actor.firstName, actor.lastName 
        from actorMovie 
        join movie on actorMovie.movieId = movie.movieId
        join actor on actorMovie.actorId = actor.actorId
        where actorMovie.actorMovieId = $actorMovieId";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

?>

<section class='px-32 mt-5 mb-10'>
    <div>
        <div class='mb-5'>
            <h2 class='text-2xl font-bold'>
                <?php echo $row['title'] ?>
            </h2>
            <div class='space-x-4'>
                <span class='font-semibold text-orange-500'>
                    <i class='fa-solid fa-star'></i>
                    <?php echo $row['rating'] ?> / 10
                </span>
                <span>
                    <?php echo $row['genre'] ?>
                </span>
                <span>
                    <?php echo $row['duration'] ?>
                </span>
            </div>
        </div>
        <figure>
            <img src="../assets/poster/<?php echo $row['poster'] ?>" alt="poster movie"
                class='w-full h-96 object-cover'>
        </figure>
        <div class='py-5'>
            <p class='text-xl font-bold text-gray-400'>Description</p>
            <p>
                <?php echo $row['description'] ?>
            </p>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Director</span>
            <span class='italic'>
                <?php echo $row['director'] ?>
            </span>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Actor</span>
            <span class='italic'>
                <?php
                echo $row['firstName'] . " " . $row['lastName'] . ", ";
                ?>
            </span>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Company</span>
            <span class='italic'>
                <?php echo $row['company'] ?>
            </span>
        </div>
        <div class='space-x-4 py-5 border-t'>
            <span class='font-bold '>Production</span>
            <span class='italic'>
                <?php echo $row['production'] ?>
            </span>
        </div>
    </div>
</section>