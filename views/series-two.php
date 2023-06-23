<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center"> This Series Two</h1>
                        <hr/>
                        <form action="action.php" method="post">
                            <div class="row mb-4">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="starting_number"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="ending_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" checked value="1"/>ODD</label>
                                    <label><input type="radio" name="choice" value="2"/>Even</label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                              <textarea class="form-control">
                                  <?php echo isset($_GET['result'])? $_GET['result']:'';?>
                              </textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="series-two-button" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>