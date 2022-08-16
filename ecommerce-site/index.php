<?php require_once 'top.php' ?>
<body>
    <?php require_once 'src/Template/site/header.php' ?>
    <?php require_once 'src/Template/site/hero.php' ?>
    <?php require_once 'src/Template/site/iconsNav.php' ?>
    <div id="bannerChain">
        <div class="banner">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <p>the best classic dress is on sale at cara</p>
            <button class="learnMore">Learn More</button>
        </div>
        <div class="banner secondBanner">
            <h4>ready for upcoming season</h4>
            <h2>autoumn collection</h2>
            <p>the cheapest fall collection</p>
            <button class="learnMore">Collection</button>
        </div>
    </div>
    <?php require_once 'src/Template/site/summerProduct.php' ?>
    <div id="banner">
        <h4 class="bannerMargin">Repair services</h4>
        <h2 class="bannerMargin">Up to <span style="color: red;">70 % </span>- All Clothes and Accesories</h2>
        <button class="exploreMore bannerMargin">Explore More</button>
    </div>
    <?php include 'src/Template/site/summerProduct.php' ?>
    <div class="newsletter m40">
        <div class="newsletterText">
            <h4>Sign up for newsletter</h4>
            <p>Get email updates about our latest shop and <span style="color: orange; font-weight:600">special offers</span></p>
        </div>
        <div class="newsletterInput">
            <input name="newsletter" placeholder="email ..." class="inputData">
            <button type="submit" class="normalButton">Sign up</button>
        </div>
    </div>
    <?php require_once 'src/Template/site/footer.php' ?>
    <p class="copyright">copyright text</p>
</body>
</html>