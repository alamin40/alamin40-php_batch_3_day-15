<?php include 'header.php';?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $blog['image']; ?>" class="card-img-top"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $blog['title']; ?></h3>
                        <p><?php echo $blog['description']; ?></p>
                        <h6><?php echo $blog['author']; ?></h6>

                        <hr/>
                        <a href="" class="btn btn-outline-success">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>