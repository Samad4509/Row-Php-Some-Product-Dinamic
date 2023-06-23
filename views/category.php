<?php include 'header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $product['image']?>" alt="" height="250">
                    <div class="card">
                        <div class="card-body">
                            <h4><?php echo $product['name']?></h4>
                            <hr/>
                            <a href="action.php?page=detail&id=<?php echo $product['id']?>" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
