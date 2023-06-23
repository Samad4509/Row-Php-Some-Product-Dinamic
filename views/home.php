<?php include "header.php"?>
<?php
//echo $_SESSION['name'];
//$_SESSION['name']='Arman Afridi';

//echo $_SESSION['name'];
//
//unset($_SESSION['name']);


//echo $_SESSION['name'];
//session_start();
//echo session_id();

?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product){?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $product['image']?>" alt="" height="250"/>
                        <div class="card-body">
                            <h4><?php echo $product['name']?></h4>
                            <p>Tk.<?php echo $product['price']?></p>
                            <hr/>
                            <a href="action.php?page=detail&id=<?php echo $product['id']?> " class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
               <?php }?>
            </div>
        </div>
    </section>
<?php include "footer.php"?>