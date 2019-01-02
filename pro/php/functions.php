<?php
require "get_db.php";

function getCats()
{
    global $con;

    $getCatsQ = "select * from categories";
    $getCatsR = mysqli_query($con,$getCatsQ);
    while ($row = mysqli_fetch_assoc($getCatsR))
    {
        $id = $row['cat_id'];
        $title = $row['cat_title'];
        echo "<li> <a class='nav-link'  href='#'>$title</a> </li>";
    }
}
function getBrands()
{
    global $con;

    $getCatsQ = "select * from brands";
    $getCatsR = mysqli_query($con,$getCatsQ);
    while ($row = mysqli_fetch_assoc($getCatsR))
    {
        $id = $row['b_id'];
        $title = $row['b_title'];
        echo "<li> <a class='nav-link'  href='#'>$title</a> </li>";
    }
}