<?php
function make_thumbnail($file_src, $file_dst)
{
    list($w_src, $h_src, $type) = getimagesize($file_src);

    switch ($type) {
        case 1:
            $img_src = imagecreatefromgif($file_src);
            break;
        case 2:
            $img_src = imagecreatefromjpeg($file_src);
            break;
        case 3:
            $img_src = imagecreatefrompng($file_src);
            break;
    }

    $thumb = 100;
    if ($w_src > $h_src) {
        $w_dst = $thumb;
        $h_dst = round($thumb / $w_src * $h_src);
    } else {
        $w_dst = round($thumb / $h_src * $w_src);
        $h_dst = $thumb;
    }

    $img_dst = imagecreatetruecolor($w_dst, $h_dst);

    imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src);
    imagejpeg($img_dst, $file_dst);

    imagedestroy($img_src);
    imagedestroy($img_dst);
}

?>