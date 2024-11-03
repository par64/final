<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIY store</title>

    <style>
        .footer .box-container {
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .footer .box-container .box {           
            display: flex;
            justify-content: space-around;

        }

        .footer .box-container .box a {
            font-family: "Itim", cursive;
            color: #333;
            font-size: 1.5rem;
            padding: 1rem 0;
        }

        .footer .box-container .box span {
            font-family: "Itim", cursive;
            color: #333;
            font-size: 1.5rem;
            padding: 1rem 0;
        }

        .footer .box-container .box a:hover {
            color: var(--orange);
            text-decoration: underline;
        }



        /* media */
        @media (max-width: 990px) {

            html {
                font-size: 50%;
            }

            section {
                padding: 2rem;
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
    <!-- footer section -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <a href="index.php#home">О нас</a>
                <a href="how_buy.php">Как заказать?</a>
                <a href="mailto:example@mail.ru">Email: example@mail.ru</a>
                <a href="tel:+12-345-67-89">+12-345-67-89</a>
            </div>

        </div>

    </section>

</body>

</html>