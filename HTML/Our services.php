<?php
require "Templates/header.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photo Studio</title>
        <link rel="shortcut icon" href="Assets/icon.png">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./CSS/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="filter">
            <button class="button button_type_all" data-filter="all">Все</button>
            <button class="button button_type_photo1" data-filter="photo1">Фото 1</button>
            <button class="button button_type_photo2" data-filter="photo2">Фото 2</button>
            <button class="button button_type_photo3" data-filter="photo3">Фото 3</button>
        </div>
        <section class="services-items">
            <div class="container">
                <div class="cards-wrapper">
                    <div class="card photo1">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото1</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>
                    <div class="card photo2">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото2</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>
                    <div class="card photo3">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото3</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>  
                    <div class="card photo1">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото1</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>
                    <div class="card photo2">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото2</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>
                    <div class="card photo3">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото3</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>  
                    <div class="card photo1">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото1</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>
                    <div class="card photo2">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото2</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>
                    <div class="card photo3">
                        <img src="Assets/photostudia.jpg" alt="cardphoto">
                        <div class="card-content-wrapper">
                            <h3>Фото3</h3>
                            <p>Описание услуги. Желательное не большое.</p>
                            <span class="price">$300</span>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <script src="./JavaScript/script.js"></script>
    </body>
<?php
require "Templates/footer.php"
?>
</html>