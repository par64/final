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

    <section class="review">

        <div class="form-container">
            <form id="reviewsForm" action="submit.php" method="POST">

                <label for="product_id"></label>
                <input type="hidden" id="product_id" name="product_id" value="<?php echo $product_id ?>" />

                <div class="box">

                    <div class="name">
                        <label for="name"></label>
                        <input type="text" id="name" name="name" placeholder="Имя" required />
                        <div class="error" id="nameError"></div>
                    </div>

                    <div class="textarea-box">
                        <label for="message"></label>
                        <textarea id="message" name="message" placeholder="Поделитесь своим мнением" required></textarea>
                        <span class="error" id="messageError"></span>
                        <button type="submit" class="btn">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="list">
        <?php
        $id = $_GET['details_id'];
        $sql = "SELECT * FROM reviews WHERE product_id=$id";
        $stmt = $pdo->query($sql);
        $reviews = $stmt->fetchall(PDO::FETCH_ASSOC);

        foreach ($reviews as $review) {
            $user_name = $review['user_name'];
            $rev_message = $review['rev_message'];
            $rev_date = $review['rev_date'];

            echo '
            <ul>
                <li class="el">
                    <h2>'.$user_name.' <span>'.$rev_date.'</span></h2>
                    <div class="text" wrap="hard">'.$rev_message.'</div>
                    
                </li>
            </ul>
                ';
        }
        ?>
        </div>
        
    </section>

    <?php include './footer/footer.php' ?>
    <script src="reviews.js"></script>

</body>

</html>