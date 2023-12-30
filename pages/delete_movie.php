<?php
include "../include/header.php";
$actorMovieId = $_GET['actorMovieId'];
include '../config/connection.php';

$sql = "select actorMovie.actorMovieId, movie.title, movie.poster 
        from actorMovie
        join movie on movie.movieId = actorMovie.movieId";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

?>

<div class='py-2 border-b'>
    <h2 class='px-4 text-xl font-bold'>Delete Confirmation</h2>
</div>
<section class='mt-5'>
    <div class='flex flex-col items-center justify-center gap-3'>
        <h2 class="text-2xl font-bold">Wanna Delete This Movie ?</h2>
        <figure>
            <img src="../assets/poster/<?php echo $row['poster'] ?>" alt="">
        </figure>
        <div>
            <h2>
                <?php echo $row['title'] ?>
            </h2>
        </div>
        <div class='my-5'>
            <a class="px-2 py-2 bg-gray-600 font-semibold hover:bg-red-500 rounded-md"
                href='<?php echo "delete_movie.php?actorMovieId=" . $row['actorMovieId'] . "&delete=1" ?>'>Delete</a>
            <a class="px-2 py-2 bg-gray-600 font-semibold hover:bg-sky-500 rounded-md" href="list_movie.php">Cancel</a>
        </div>
    </div>
</section>

<?php
if (isset($_GET['delete'])) {
    $sql = "delete from actorMovie where actorMovieId = $actorMovieId";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "Failed delete Movie ! <br />";
        echo "<a href='list_movie.php'>Go Back</a>";
    } else {
        header("location:../index.php");
    }
}
?>