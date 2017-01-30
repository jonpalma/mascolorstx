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
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. 
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
                <a class="mail" href="mailto:contacto@mascolorselp.com">
                    contacto@mascolorselp.com
                </a>
                <p class="address">
                    11601 Pelícano Suite E1<br>
                    El Paso, Tx.
                </p>
                <div class="form-container">
                    <form action="mailer.php" method="POST" id="contact-form">
                        <input type="text" name="name" id="name" placeholder="Name">
                        <input type="number" name="phone" id="phone" placeholder="Phone">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <textarea name="mssg" id="mssg" cols="30" rows="3" placeholder="Message"></textarea>
                        <div class="text-right">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0881523182707!2d-106.07250458443701!3d28.627119982419845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea5cac021712e5%3A0x8941f49f258d5502!2sMas+Colors!5e0!3m2!1ses!2smx!4v1485468014119" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                <a href="mailto:contacto@mascolorselp.com">
                    <img src="img/icons/mail-blue.png" alt="">
                </a>
                <a target="_blank" href="https://www.facebook.com/">
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