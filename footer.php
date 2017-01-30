<footer>
    <div class="text-center footer-rights">
        <p>
            Copyright © <?php echo date('Y'); ?> Mas Colors. | Design by: <a href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen"> mixen.mx</a>
        </p>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/* SCRIPTS */-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/app.js"></script>
<script src="js/parallax.js"></script>
<script src="js/google-maps.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ekko-lightbox.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSoQy-nwSkGBuVAxUFwml6ZFKM9K9txuM&callback=initMap"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
</body>
</html>