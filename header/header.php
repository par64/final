<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIY store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #fff;
            padding: 2rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        header .logo {
            font-family: "Itim", cursive;
            font-size: 3rem;
            color: #333;
            font-weight: bolder;
        }

        header .navbar a {
            font-family: "Itim", cursive;
            font-size: 2rem;
            padding: 0 1.5rem;
            color: #666;
        }

        header .navbar a:hover {
            color: var(--orange);
        }

        header #toggler {
            display: none;
        }

        header .fa-bars {
            font-size: 3rem;
            color: #333;
            border-radius: .5rem;
            padding: .5rem 1.5rem;
            cursor: pointer;
            border: .1rem solid rgba(0, 0, 0, .3);
            display: none;
        }

        /* media */
        @media (max-width: 990px) {

            html {
                font-size: 50%;
            }

            header {
                padding: 2rem;
            }

            section {
                padding: 2rem;
            }
        }

        @media (max-width: 768px) {

            header .fa-bars {
                display: block;
            }

            header .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #eee;
                border-top: .1rem solid rgba(0, 0, 0, .1);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }

            header #toggler:checked~.navbar {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            header .navbar a {
                margin: 1.5rem;
                padding: 1.5rem;
                background: #fff;
                border-top: .1rem solid rgba(0, 0, 0, .1);
                display: block;
            }
        }

        @media (max-width: 450px) {

            html {
                font-size: 45%;
            }
        }
    </style>

</head>

<body>
    <header>
        <input type="checkbox" name="" id="toggler" />
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">Изделия ручной работы</a>

        <nav class="navbar">
            <a href="index.php#home">О нас</a>
            <a href="index.php#products">Товары</a>
            <a href="how_buy.php">Как заказать?</a>
        </nav>
    </header>
</body>

</html>