<?php
include "../include/header.php";
include "../config/connection.php";

$sql = "SELECT MAX(actorMovie.actorMovieId) AS actorMovieId, movie.movieId, movie.title, MAX(movie.director) AS director, MAX(movie.company) AS company
FROM movie
JOIN actorMovie ON movie.movieId = actorMovie.movieId
GROUP BY movie.movieId, movie.title";
$result = mysqli_query($con, $sql);

?>

<section>
    <div class="p-4">
        <h2 class="text-3xl font-bold">List Movie</h2>
    </div>
    <hr />
    <div class='flex justify-center mt-5'>
        <table class="border-separate border-spacing-y-2 border-spacing-x-5 text-center">
            <thead class='bg-slate-400'>
                <tr>
                    <th class='px-2'>No</th>
                    <th class='px-2'>Title</th>
                    <th class='px-2'>Director</th>
                    <th class='px-2'>Company</th>
                    <th class='px-2'>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['director'] . "</td>";
                    echo "<td>" . $row['company'] . "</td>";
                    echo "<td class='text-center space-x-4'>";
                    echo "<a href='update_movie.php?movieId=" . $row['movieId'] . "'><i
                            class='fa-solid fa-pen-to-square text-gray-400 hover:text-green-500'></i></a>";
                    echo "<a href='delete_movie.php?actorMovieId=" . $row['actorMovieId'] . "'><i class='fa-solid fa-trash text-gray-400 hover:text-red-500'></i></a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</section>