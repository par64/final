<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="./reviews/reviews.css" />
</head>

<body>
    <?php include './db/connect.php' ?>

    <section class="review">

        <div class="form-container">
            <form id="reviewsForm" action="submit.php" method="POST">
                <div class="box">
                    <div class="input-box">
                        <div class="name">
                            <label for="name"></label>
                            <input type="text" id="name" name="name" placeholder="Имя" required />
                            <span class="error" id="nameError"></span>
                        </div>
                        <div class="rating">
                            <label for="rating">Оценка: </label>
                            <input type="number" id="rating" name="rating" min="1" max="5" placeholder="1-5" required />
                            <span class="error" id="ratingError"></span>
                        </div>
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

        <ul class="list">
            <li class="el">
                <h3>Максим</h3>
                <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum omnis molestiae, alias debitis asperiores suscipit voluptatem,
                    saepe consectetur nobis id corporis. Modi,
                    quisquam ea! Maiores inventore nemo error illum ipsam?
                </div>
                <p>18-08-2024</p>
            </li>
            <li class="el">
                <h3>Максим</h3>
                <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum omnis molestiae, alias debitis asperiores suscipit voluptatem,
                    saepe consectetur nobis id corporis. Modi,
                    quisquam ea! Maiores inventore nemo error illum ipsam?
                </div>
                <p>18-08-2024</p>
            </li>
            <li class="el">
                <h3>Максим</h3>
                <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum omnis molestiae, alias debitis asperiores suscipit voluptatem,
                    saepe consectetur nobis id corporis. Modi,
                    quisquam ea! Maiores inventore nemo error illum ipsam?
                </div>
                <p>18-08-2024</p>
            </li>
            <li class="el">
                <h3>Максим</h3>
                <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum omnis molestiae, alias debitis asperiores suscipit voluptatem,
                    saepe consectetur nobis id corporis. Modi,
                    quisquam ea! Maiores inventore nemo error illum ipsam?
                </div>
                <p>18-08-2024</p>
            </li>
            <li class="el">
                <h3>Максим</h3>
                <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum omnis molestiae, alias debitis asperiores suscipit voluptatem,
                    saepe consectetur nobis id corporis. Modi,
                    quisquam ea! Maiores inventore nemo error illum ipsam?
                </div>
                <p>18-08-2024</p>
            </li>
            <li class="el">
                <h3>Максим</h3>
                <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum omnis molestiae, alias debitis asperiores suscipit voluptatem,
                    saepe consectetur nobis id corporis. Modi,
                    quisquam ea! Maiores inventore nemo error illum ipsam?
                </div>
                <p>18-08-2024</p>
            </li>
        </ul>

    </section>

    <script src="./reviews/reviews.js"></script>
</body>

</html>