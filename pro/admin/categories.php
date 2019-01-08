<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Category</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>

    <?php
    require "get_db2.php";
    if(!$con)
    {
        echo "Not connected";
    }
    if(!mysqli_select_db($con,'cat_db'))
    {
        echo "DB not selected";
    }

    if(!isset($_GET['insert_pro'])) {
        $cat_title = $_GET['pro_cat'];

        $insertProQ = "INSERT INTO  categories(cat_title) 
                        VALUES ('$cat_title')";

        if (!mysqli_query($con, $insertProQ)) {
            echo "not inserted";
        } else {
            echo "inserted";
        }
    }


    ?>

</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Category </h1>
    <form action="categories.php" method="get">
        <div class="row">
            <div class="">
                <label for="pro_cat" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Category:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_cat" name="pro_cat" placeholder="Enter Brand Category" >
                </div>
            </div>
            <br>
            <div class="row my-5">
                <div class=""></div>
                <div class="">
                    <button type="submit" name "insert_pro" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
                </div>
            </div>
    </form>
</div>
</body>
</html>