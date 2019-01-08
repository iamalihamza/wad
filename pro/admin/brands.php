<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Brand</title>
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

    if(!isset($_POST['insert_pro'])) {
        $brand_title = $_POST['pro_brand'];

        $insertProQ = "INSERT INTO brands(b_title) 
                        VALUES ('$brand_title')";

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
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Brand </h1>
    <form action="brands.php" method="post">
        <div class="row">
            <div class="">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_brand" name="pro_brand" placeholder="Enter Brand Title" >
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