<?php $page = 'index';?>
<?php include('header.php');?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CABEZA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cabeza" id="cabeza">
        <div class="container">
            <div class="col-xs-6 left-side">
                <p>
                    11601 Pelícano Suite E1 | El Paso, Tx.
                </p>
            </div>
            <div class="col-xs-6 right-side">
                <p>
                    +52(614)427.6941
                </p>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner"></div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LOGOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="logos" id="logos">
        <div class="container light-spacing">
            <h1>
                EXPLORE AMAZING BRANDS
            </h1>
            <p>
                 
            </p>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="img/index/logos/logo1.png" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="img/index/logos/logo2.png" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="img/index/logos/logo3.png" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="img/index/logos/logo4.png" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="img/index/logos/logo5.png" alt="">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="img-container">
                    <img src="img/index/logos/logo6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto" id="contacto">
        <div class="container light-spacing">
            <div class="col-sm-6 content left-side">
                <h1>
                    CONTACT
                </h1>
                <p class="phone">
                    +52(614)427.6941
                </p>
                <a class="mail" href="mailto:contacto@mascolorstx.com">
                    contacto@mascolorstx.com
                </a>
                <p class="address">
                    11601 Pelícano Suite E1<br>
                    El Paso, Tx.
                </p>
                <div class="form-container">
                    <form action="mailer.php" method="POST" id="form">
                        <input type="text" name="name" id="name" placeholder="Name">
                        <input type="number" name="phone" id="phone" placeholder="Phone">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <textarea name="mssg" id="mssg" cols="30" rows="3" placeholder="Message"></textarea>
                        <div class="text-right">
                            <input type="hidden" name="bttnContacto">
                            <input type="submit" value="" id="form-submit">
                            <div id="contact-form-output"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 content right-side"></div>
        </div>
        <div class="bg left-side">
        </div>
        <div class="bg right-side">
            <button id="bttnMapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3392.9362624941227!2d-106.30645912287058!3d31.744940672954534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7437e05df51db%3A0xa2d97812fe42b657!2s11601+Pellicano+Dr%2C+El+Paso%2C+TX+79936%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1486076831369" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </button>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PIE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pie" id="pie">
        <div class="container light-spacing">
            <div class="img-container middle">
                <a class="smoothScroll" href="#index">
                    <img src="img/icons/pie-logo.png" alt="">
                </a>
            </div>
            <div class="img-container right-side">
                <a href="mailto:contacto@mascolorstx.com">
                    <img src="img/icons/mail-blue.png" alt="">
                </a>
                <a target="_blank" href="https://www.facebook.com/MasColors-1571150519866617/">
                    <img src="img/icons/fb-blue.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php');?>