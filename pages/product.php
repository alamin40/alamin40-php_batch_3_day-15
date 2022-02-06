<?php include 'header.php';?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" class="card-img-top"/>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $product['title']; ?></h3>

                                <h4>Category: <?php echo $product['category']; ?></h4>
                                <h5>Brand: <?php echo $product['brand']; ?></h5>
                                <h6>Price: <?php echo $product['price']; ?></h6>
                                <hr/>
                                <a href="action.php?pages=AllProductbySearch.php" class="btn btn-outline-success" name="'search_btn'" <?php $product['id']; ?>>Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'footer.php';?>