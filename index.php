<?php
include "include/header.php";
include "config/connection.php";

$sql = "select max(actorMovie.actorMovieId) as actorMovieId, movie.title, max(movie.rating) as rating, max(movie.poster) as poster, max(movie.director) as director, max(actor.firstName) as firstName
        from movie
        join actorMovie on movie.movieId = actorMovie.movieId
        join actor on actorMovie.actorId = actor.actorId
        group by movie.movieId, movie.title";
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
            echo "<img src='/assets/poster/" . $row['poster'] . "' class='object-contain h-48 w-96'/>";
            echo "</figure>";
            echo "<div class='text-centern mt-1'>";
            echo "<a href='pages/detail_movies.php?actorMovieId=" . $row['actorMovieId'] . "' class='text-sm font-semibold my-2 hover:text-sky-500'>" . $row['title'] . "</a>";
            echo "<p class='font-semibold text-orange-500'><i class='fa-solid fa-star'></i> " . $row['rating'] . " <span class='text-gray-500'>/ 10</span> </p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

</section>