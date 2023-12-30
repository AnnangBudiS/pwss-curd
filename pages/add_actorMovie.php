<?php
include "../include/header.php";
include "../config/connection.php";

$sqlActor = "select actor.actorId, actor.firstName, actor.lastName from actor";
$sqlMovie = "select movie.movieId, movie.title from movie";

$resultAktor = mysqli_query($con, $sqlActor);
$resultMovie = mysqli_query($con, $sqlMovie);

?>

<section>
    <div class='p-2 border-b space-x-1'>
        <a href="add_movie.php" class='text-gray-400'>Movie</a>
        <i class="fa-solid fa-chevron-right text-gray-400"></i>
        <a href="add_actor.php" class='text-gray-400'>Actor</a>
        <i class="fa-solid fa-chevron-right"></i>
        <a>Save</a>
    </div>
    <div class="mt-5 flex items-center justify-center">
        <form action="../config/actorMovie.config.php" method="post">
            <table class='table-auto border-separate border-spacing-2 text-center'>
                <thead class='bg-slate-400'>
                    <tr>
                        <th class='px-2'>Movie</th>
                        <th class='px-2'>Actor</th>
                        <th class='px-2'>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='px-2'>
                            <select name="movieId">
                                <?php
                                while ($row = mysqli_fetch_assoc($resultMovie)) {
                                    echo "<option value='" . $row['movieId'] . "'>" . $row['title'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td class='px-2'>
                            <select name="actorId" id="">
                                <?php
                                while ($row = mysqli_fetch_assoc($resultAktor)) {
                                    echo "<option value='" . $row['actorId'] . "'>" . $row['firstName'] . " " . $row['lastName'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td class='px-2'>
                            <button type="submit" class='text-gray-400 hover:text-green-400'><i
                                    class="fa-solid fa-upload"></i></button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </form>
    </div>

</section>