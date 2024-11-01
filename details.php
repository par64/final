<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIY store</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include './db/connect.php' ?>
    <?php include './header/header.php' ?>

    <?php
    $id = $_GET['details_id'];
    $sql = "SELECT * FROM products WHERE product_id=$id";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetch(PDO::FETCH_ASSOC);

    $product_id = $products['product_id'];
    $product_name = $products['product_name'];
    $product_desc = $products['product_desc'];
    $product_price = $products['product_price'];
    $product_image = $products['product_image'];

    ?>
    <section class="details">

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="<?php echo $product_image ?>" alt="product image" />
                    <div class="price"><?php echo $product_price ?>р.</div>
                </div>
                <div class="content">
                    <h1><?php echo $product_name ?></h1>
                    <p><?php echo $product_desc ?></p>
                </div>
            </div>

        </div>


    </section>

    <?php include './footer/footer.php' ?>

</body>

</html>