<?php
require "Templates/header.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photo Studio</title>
        <script src="C:\OpenServer\domains\localhost\Photo-Studio\script.js"></script>
        <link rel="shortcut icon" href="Assets/icon.png">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Показать все</button>
                <button class="btn" onclick="filterSelection('photo1')"> Фото1</button>
                <button class="btn" onclick="filterSelection('photo2')"> Фото2</button>
                <button class="btn" onclick="filterSelection('photo3')"> Фото3</button>
            </div>
        </div>
        <section class="services-items">
            <div class="container">
                <div class="cards-wrapper">
                    <!-- <div class="filterDiv photo1"> -->
                        <div class="card photo1">
                            <img src="Assets/photostudia.jpg" alt="cardphoto">
                            <div class="card-content-wrapper">
                                <h3>Фото1</h3>
                                <p>Описание услуги. Желательное не большое.</p>
                                <span class="price">$300</span>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="filterDiv photo2"> -->
                        <div class="card photo2">
                            <img src="Assets/photostudia.jpg" alt="cardphoto">
                            <div class="card-content-wrapper">
                                <h3>Фото2</h3>
                                <p>Описание услуги. Желательное не большое.</p>
                                <span class="price">$300</span>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="filterDiv photo3"> -->
                        <div class="card photo3">
                            <img src="Assets/photostudia.jpg" alt="cardphoto">
                            <div class="card-content-wrapper">
                                <h3>Фото3</h3>
                                <p>Описание услуги. Желательное не большое.</p>
                                <span class="price">$300</span>
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="filterDiv photo1">
                        <div class="card">
                            <img src="Assets/photostudia.jpg" alt="cardphoto">
                            <div class="card-content-wrapper">
                                <h3>Фото1</h3>
                                <p>Описание услуги. Желательное не большое.</p>
                                <span class="price">$300</span>
                            </div>
                        </div>
                    </div>
                    <div class="filterDiv photo2">
                        <div class="card">
                            <img src="Assets/photostudia.jpg" alt="cardphoto">
                            <div class="card-content-wrapper">
                                <h3>Фото2</h3>
                                <p>Описание услуги. Желательное не большое.</p>
                                <span class="price">$300</span>
                            </div>
                        </div>
                    </div>
                    <div class="filterDiv photo3">
                        <div class="card">
                            <img src="Assets/photostudia.jpg" alt="cardphoto">
                            <div class="card-content-wrapper">
                                <h3>Фото3</h3>
                                <p>Описание услуги. Желательное не большое.</p>
                                <span class="price">$300</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        
    </body>
<?php
require "Templates/footer.php"
?>
</html>