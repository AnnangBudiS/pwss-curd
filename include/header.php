<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/35c5eac0f2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="flex">
    <aside class="h-screen bg-gray-900 w-52 sticky top-0">
      <h2 class='p-4 text-xl text-slate-300 text-xl font-bold'>MoVie.ID</h2>
      <ul class="py-8 text-slate-100 pl-5">
        <li>
          <a href="#" class="font-semibold text-gray-600">Menu</a>
        </li>
        <ul class="pl-3 my-2 space-y-2">
          <li><a href="../index.php">List Movie</a></li>
          <li><a href="../pages/list_actor.php">List Actor</a></li>
        </ul>
        <li>
          <a href="#" class="font-semibold text-gray-600">Config</a>
        </li>
        <ul class="pl-3 my-2 space-y-2">
          <li><a href="../pages/movie.php">Movie</a></li>
        </ul>
      </ul>
    </aside>
    <div class="w-full">
      <nav class="flex p-4 items-center bg-slate-50 justify-between shadow-md">
        <div class='flex p-1 items-center border border-gray-900 rounded-md'>
          <input type="text" placeholder="search.." class="w-full pl-2 bg-inherit focus:outline-none">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <ul class="flex items-center gap-4">
          <li>
            <a href="#"
              class="px-4 py-2 font-semibold rounded-md hover:text-white hover:bg-sky-500 hover:shadow-md">login</a>
          </li>
        </ul>
      </nav>
      <main>