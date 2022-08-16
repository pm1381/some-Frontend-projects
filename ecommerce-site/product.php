<?php require_once 'top.php' ?>
<body>
    <?php require_once 'src/Template/site/header.php' ?>
    <section id="singleProduct" class="padding2080">
        <div class="product-image">
            <div id="mainImage">
                <img src="public/default/Build-and-Deploy-Ecommerce-Website/img/products/f1.jpg" alt="main image">
            </div>
            <div class="smallImagesGroup">
                <img src="public/default/Build-and-Deploy-Ecommerce-Website/img/products/f1.jpg" alt="small image">
                <img src="public/default/Build-and-Deploy-Ecommerce-Website/img/products/f2.jpg" alt="small image">
                <img src="public/default/Build-and-Deploy-Ecommerce-Website/img/products/f3.jpg" alt="small image">
                <img src="public/default/Build-and-Deploy-Ecommerce-Website/img/products/f4.jpg" alt="small image">
            </div>
        </div>
        <div  class="product-details">
            <div class="essentialDetails">
                <h6 class="m10 data">Home/T-shirt</h6>
                <h4 class="m20 data">Classic addida T-shirt</h4>
                <h2 class="m10 data">120.00$</h2>
                <select name="size" class="m30 size padding1020">
                    <option value="0">size:</option>
                    <option value="xs">xs</option>
                    <option value="s">s</option>
                    <option value="m">m</option>
                    <option value="l">L</option>
                    <option value="xl">xL</option>
                    <option value="xxl">xxL</option>
                </select>
                <div class="count-buy">
                    <input type="number" name="count" class="padding1020" value="1">
                    <button class="product-addToCart padding1020">add to cart</button>
                </div>
            </div>
            <h4 class="m20 data">Classic addida T-shirt</h4>
            <div class="productDetailText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sunt nobis est non voluptate totam esse dolorem doloremque quaerat vitae debitis optio, aliquid placeat odio eveniet pariatur aliquam! Eum, repellendus?</div>
        </div>
    </section>
    <div class="related-products padding2080">
        <?php include 'src/Template/site/winterProduct.php' ?>
    </div>
    <?php require_once 'src/Template/site/newsletter.php' ?>
    <?php require_once 'src/Template/site/footer.php' ?>
    <p class="copyright">copyright text</p>
</body>
</html>