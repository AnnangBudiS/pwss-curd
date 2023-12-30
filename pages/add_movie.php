<?php
include '../include/header.php';


?>
<section class='flex justify-center py-5'>
    <form action="../config/movie.config.php" method="post" enctype="multipart/form-data">
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Image</label>
            <input type="file" name='poster' class='w-full'>
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Title</label>
            <input type="text" name="title" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Genre</label>
            <input type="text" name="genre" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Rating</label>
            <input type="text" name="rating" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Director</label>
            <input type="text" name="director" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Company</label>
            <input type="text" name="company" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Production</label>
            <input type="text" name="production" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Relase Date</label>
            <input type="date" name="releaseDate" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div class='mb-2'>
            <label class='text-sm font-semibold'>Duration</label>
            <input type="text" name="duration" class="w-full border py-1 rounded-md pl-2">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" class="w-full border py-1 rounded-md pl-2"></textarea>
        </div>
        <div class="flex items-center justify-center gap-4 mt-5">
            <button class="py-2 px-4 bg-gray-600 rounded-md hover:bg-sky-500 hover:shadow-md shadow-slate-50/10"
                type="submit" name='new'>Save</button>
            <button class="py-2 px-4 bg-gray-600 rounded-md hover:bg-sky-500 hover:shadow-md shadow-slate-50/10"
                type="reset" name='new'>Reset</button>
        </div>
    </form>
</section>