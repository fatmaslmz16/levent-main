<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hizmetlerimiz - Levent Çatı Sistemleri & Sac Şekillendirme Merkezi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/galeri.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include "templates/navbar.html";
    ?>

    <div class="container">
        <div class="page-title">
            <h1>Galeri</h1>
            <ul class="breadcrumb">
                <li><a href="index.php" class="page-link">Ana Sayfa</a></li>
                <li><a href="galeri.php" class="page-link active">Galeri</a></li>
            </ul>
        </div>


        <div class="container">
         <div class="card__container">
            <article class="card__article">
               <img src="assets/img/user-1.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Vancouver Mountains, Canada</span>
                  <h2 class="card__title">The Great Path</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>

            <article class="card__article">
               <img src="assets/img/user-1.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Poon Hill, Nepal</span>
                  <h2 class="card__title">Starry Night</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>

            <article class="card__article">
               <img src="assets/img/user-1.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Bojcin Forest, Serbia</span>
                  <h2 class="card__title">Path Of Peace</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>
         </div>
      </div>




        <?php
    include "templates/footer.html";
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/services.js"></script>
</body>
</html>