<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark rounded-0">
                        <div class="card-header text-center text-white">Login Form</div>
                        <div class="card-body">
                            <p class="text-danger"><?php echo $message?></p>
                            <form action="action.php" method="post">
                                <div class="row mb-4">
                                    <label class="col-md-3 text-white">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control rounded-0" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 text-white">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control rounded-0" name="password"/>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success rounded-0" name="login-button" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>