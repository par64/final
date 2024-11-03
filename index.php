<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DIY store</title>

  <!-- Фавикон -->
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="manifest" href="site.webmanifest" />

  <!-- stylesheet -->
  <link rel="stylesheet" href="style.css" />

  <!-- font awesome (для "фа-иконок" и иконки меню гамбургер)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include './db/connect.php' ?>
  <?php include './header/header.php' ?>
  <?php include './home/home.php' ?>

  <!-- Секция товаров -->
  <section class="products" id="products">

    <h1 class="heading">Наши товары</h1>
    <div class="box-container">

      <!-- php code -->
      <?php
      $sql = "SELECT product_id, product_name, product_price, product_image FROM products";
      $stmt = $pdo->query($sql);

      //формируем из выборки массив данных 
      $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //Вывод данных на страницу
      foreach ($products as $product) {
        $product_id = $product['product_id'];
        $product_name = $product['product_name'];
        $product_price = $product['product_price'];
        $product_image = $product['product_image'];


        echo '<div class="box">
                  <div class="image">
                  <a href="details.php?details_id=' . $product_id . ' ">
                    <img src=' . $product_image . ' alt="product image" />
                   </a>
                  </div>
                    <div class="content">
                      <h3>' . $product_name . '</h3>
                      <div class="price">' . $product_price . 'р.</div>
                    </div>
                </div>';
      }
      ?>

    </div>
  </section>

  <?php include './footer/footer.php' ?>

</body>

</html>