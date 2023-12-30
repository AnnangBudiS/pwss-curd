<?php
include "../include/header.php";
$actorId = $_GET['actorId'];

include "../config/connection.php";

$sql = "select actor.actorId, actor.image, actor.firstName, actor.lastName 
        from actor
        where actorId = $actorId";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
?>

<div class='py-2 border-b'>
    <h2 class='px-4 text-xl font-bold'>Delete Confirmation</h2>
</div>

<section class='mt-5'>
    <div class='flex flex-col items-center justify-center gap-3'>
        <h2 class="text-2xl font-bold">Wanna Delete This Actor ?</h2>
        <figure class='w-96'>
            <img src="../assets/avatar/<?php echo $row['image'] ?>" alt="">
        </figure>
        <div>
            <h2>
                <?php echo $row['firstName'] . " " . $row['lastName'] ?>
            </h2>
        </div>
        <div class='my-5'>
            <a class="px-2 py-2 bg-gray-600 font-semibold hover:bg-red-500 rounded-md"
                href='<?php echo "delete_actor.php?actorId=" . $row['actorId'] . "&delete=1" ?>'>Delete</a>
            <a class="px-2 py-2 bg-gray-600 font-semibold hover:bg-sky-500 rounded-md" href="list_actor.php">Cancel</a>
        </div>
    </div>
</section>

<?php
if (isset($_GET['delete'])) {
    $sql = "delete from actor where actorId = $actorId";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "Failed delete Actor ! <br />";
        echo "<a href='list_actor.php'>Go Back</a>";
    } else {
        $img = "../assets/avatar/" . $row['avatar'] . "";
        if (file_exists($img))
            unlink($img);

        header("location:list_actor.php");
    }
}

?>