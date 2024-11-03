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

    <style>
        :root {
            --orange: #d8792c;
        }

        .page {
            display: flex;
            align-items: center;
            min-height: 80vh;
            background: url(./images/vintage-2.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .page .content {
            margin-top: 10rem;
            margin-left: 10%;
        }

        .page .content h3 {
            font-family: "Itim", cursive;
            font-size: 3.5rem;
            color: #333;
            margin-bottom: 2rem;
        }

        .page .content p {
            font-family: "Itim", cursive;
            font-size: 2rem;
            line-height: 1.5;
            margin-left: 4rem;
            padding: .5rem 0;
            color: var(--orange);
        }

        .page .content .contacts {
            margin-top: 2rem;
        }

        .page .content .contacts p {
            font-family: "Itim", regular;
            font-size: 3rem;
            line-height: 1.5;
            color: #973700;
        }
    </style>

</head>

<body>

    <?php include './header/header.php' ?>

    <div class="page">
        <div class="content">
            <h3>Вам что-то понравилось?</h3>
            <p>Пожалуйста, свяжитесь с нами любым удобным для вас способом: по телефону, электронной почте или через социальные сети.</p>
            <p>Мы предварительно уточним наличие и детали конкретного экземпляра изделия.</p>
            <p>Если вас всё устраивает, оплатите часть стоимости товара.</p>
            <p>Мы отправим вам его почтой.</p>
            <p>После получения товара проверьте его целостность и соответствие описанию.</p>
            <p>Если всё в порядке, оплатите оставшуюся сумму.</p>
            <div class="contacts">
                <p>Email: &nbsp &nbsp &nbsp &nbsp example@mail.ru</p>
                <p>tel: &nbsp &nbsp &nbsp &nbsp &nbsp +12-345-67-89</p>
            </div>


        </div>

    </div>

    <?php include './footer/footer.php' ?>

</body>

</html>