<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levent Çatı Sistemleri & Sac Şekillendirme Merkezi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include "templates/navbar.html";
    ?>

    <div class="container">
        <div class="slider-container">
            <div class="slider">
                <div class="slider-item fade">
                    <img src="assets/img/1.jpg" alt="">
                </div>
                <div class="slider-item fade">
                    <img src="assets/img/2.png" alt="">
                </div>
                <div class="slider-item fade">
                    <img src="assets/img/3.png" alt="">
                </div>
            </div>
        </div>

        <section class="section">
      <div class="section__container">
      <div class="image">
          <img src="assets/img/hakkimizda.png" alt="profile" />
        </div>
        <div class="content">

          <h1 class="title">
         <span>HAKKIMIZDA</span>
          </h1>
          <p class="description">
          Çatı İhtisası Hakkında Çatı İhtisası İnşaat Ticaret Taahhüt firması 1978 yılında Konya’da Mustafa SAMUR tarafından kurulmuştur.
                    Firmanın kuruluş amacı çatı kaplama, cephe kaplama, kenet çatı sistemleri, dış cephe giydirme sistemleri, mantolama izolasyon sistemleri, ısı-su-ses yalıtım sistemleri satış, uygulama ve danışmanlık hizmetlerini sunmaktır. Misyonumuz;
                    İnşaat sektöründe projelerde yüksek kalite , sorunsuz usta ve kadro, yenilikçi çözümler, kaliteli hizmet ve en üst seviye müşteri memnuniyetini hedefleyen ileri teknoloji çözümleri geliştirmek ve sunmaktır.
                     Vizyonumuz; İnşaat alanında ...
          </p>
          <div class="action__btns">
            <button class="portfolio">İletişime Geç</button>
          </div>
        </div>

      </div>
    </section>

        <div class="form-area">

            <div class="form">
                <h3 class="offer-title">Teklif Formu Gönder</h3>
                <p>Bilgi almak için formu doldurun, sizinle iletişime geçelim</p>
                <form action="#" method="POST">
                    <div class="form-row">
                        <input type="text" id="name" name="name" class="form-input" placeholder="Ad">
                        <input type="text" id="surname" name="surname" class="form-input" placeholder="Soyad">
                    </div>
                    <div class="form-row">
                        <input type="email" id="email" name="email" class="form-input" placeholder="Email">
                        <input type="phone" id="phone" name="tel" class="form-input" placeholder="Telefon">
                    </div>
                    <textarea id="message" name="message" class="form-input" rows="5" placeholder="Almak istediğiniz hizmet ve teklifiniz"></textarea>
                    <input type="submit" class="form-button" value="Gönder">
                </form>

            </div>
            <div class="form-info">
            <div class="teklif">
          <img src="assets/img/teklif.png" alt="profile"  style="align-items:center;"/>
        </div>
            </div>
        </div>
    </div>

    <section class="section_container">
      <h2>EKİBİMİZ</h2>
      <h1>Daima en iyi hizmetle...</h1>
      <div class="section__grid">
        <div class="section__card">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4>Love the simplicity</h4>
          <p>
            They understood our brand and created a stunning website design.
            Professional, responsive, and on-time delivery. Highly recommended!
          </p>
          <img src="assets/img/user-1.png" alt="user" />
          <h5>Levent Yılmaz</h5>
          <h6>Managing Director</h6>
        </div>
        <div class="section__card">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4>Excellent Designs</h4>
          <p>
            Efficient, reliable, and results-oriented. Visually appealing
            website, improved online visibility. Highly recommended!
          </p>
          <img src="assets/img/user-1.png" alt="user" />
          <h5>Mertcan Yılmaz</h5>
          <h6>Ceo & Founder</h6>
        </div>
        <div class="section__card">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4>Efficient and Reliable</h4>
          <p>
            Best decision we made. Stunning website, exceptional support. Always
            available and prompt issue resolution. Hassle-free experience!
          </p>
          <img src="assets/img/user-1.png" alt="user" />
          <h5>İbrahimcan Yılmaz</h5>
          <h6>Fashion Designer</h6>
        </div>
      </div>
    </section>



    <?php
    include "templates/footer.html";
    ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/services.js"></script>
</body>
</html>