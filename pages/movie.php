<?php
include "../include/header.php";
?>

<section>
    <div class="p-4">
        <h2 class="text-3xl font-bold"> <span><i class="fa-solid fa-gears"></i></span> Movie Configuration</h2>
        <p class="mt-2">Add Movie, Update Movie, Delete Movie ...</p>
    </div>
    <hr />
    <div class='mt-5 px-32 flex flex-wrap gap-4'>
        <div class='p-5 w-96 flex flex-col items-center gap-5 justify-center border shadow-md rounded-md'>
            <a href="add_movie.php"><i
                    class="fa-solid fa-circle-plus text-4xl text-gray-400 hover:text-sky-500"></i></a>
            <h2 class='text-2xl font-bold'>Create New Data Movie</h2>
            <p class='text-center text-xs text-gray-400'>(Add movie , Add Actor, Add data Movie and Actor)</p>
        </div>
        <div class='p-5 w-96 flex flex-col items-center gap-5 justify-center border shadow-md rounded-md'>
            <a href="add_actorMovie.php"><i
                    class="fa-solid fa-circle-plus text-4xl text-gray-400 hover:text-sky-500"></i></a>
            <h2 class='text-2xl font-bold'>Add Movie</h2>
            <p class='text-center text-xs text-gray-400'>(Add by already data movie and actor)</p>
        </div>
        <div class='p-5 w-96 flex flex-col items-center gap-5 justify-center border shadow-md rounded-md'>
            <a href="list_movie.php?movieId"><i
                    class="fa-solid fa-pen-to-square text-gray-400 text-4xl hover:text-green-500"></i></a>
            <h2 class='text-2xl font-bold'>Edit Movie</h2>
            <p class='text-center text-xs text-gray-400'>(Edit or Delete Movie)</p>
        </div>
    </div>
</section>