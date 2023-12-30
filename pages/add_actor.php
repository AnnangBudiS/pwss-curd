<?php
include "../include/header.php";
?>

<div class='p-2 border-b space-x-1'>
    <a href="add_movie.php" class='text-gray-400'>Movie</a>
    <i class="fa-solid fa-chevron-right"></i>
    <a>Actor</a>
</div>
<section class='flex justify-center  mt-5'>
    <form action="../config/actor.config.php" method="post" enctype="multipart/form-data">
        <div>
            <label class='text-sm font-semibold'>Image</label>
            <input type="file" name='image' class='w-full'>
        </div>
        <div class='grid grid-cols-1 md:grid-cols-2 gap-2'>
            <div class='mb-2'>
                <label class='text-sm font-semibold'>First Name</label>
                <input type="text" name="firstName" class="w-full border py-1 rounded-md pl-2">
            </div>

            <div class='mb-2'>
                <label class='text-sm font-semibold'>Last Name</label>
                <input type="text" name="lastName" class="w-full border py-1 rounded-md pl-2">
            </div>

            <div class='mb-2'>
                <label class='text-sm font-semibold'>Birth Date</label>
                <input type="date" name="birthDate" class="w-full border py-1 rounded-md pl-2">
            </div>

            <div class='mb-2'>
                <label class='text-sm font-semibold'>Age</label>
                <input type="text" name="age" class="w-full border py-1 rounded-md pl-2">
            </div>

            <div class='mb-2'>
                <label class='text-sm font-semibold'>Work</label>
                <input type="text" name="work" class="w-full border py-1 rounded-md pl-2">
            </div>

            <div class='mb-2'>
                <label class='text-sm font-semibold'>Active Year</label>
                <input type="text" name="activeYear" class="w-full border py-1 rounded-md pl-2">
            </div>
        </div>
        <div class='mt-5 flex justify-end'>
            <button class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-sky-500 hover:shadow-xl" type="submit"
                name='new'>Next</button>
        </div>
    </form>
</section>