<?php //include "pages/includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Input Student Information Carefully</h3>
                        </div>
                        <div class="card-body">
<!--                            <h1>-->
<!--                                --><?php
//                                session_start();
//                                echo $_SESSION['mobile'];
//                                unset($_SESSION['mobile']); //unset deletes/removes session data for particular indexes;
//                                echo $_SESSION['mobile'];
//                                session_destroy();
//                                echo $_SESSION['name'];
//                                echo $_SESSION['city'];
//                                echo $_SESSION['country'];
//
//                                ?>
<!--                            </h1>-->
                            <div>
                                <form action="action.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Student Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="name" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" name="email" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Phone Number</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" name="phone" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="image" accept="image/*"/>
<!--                                                                            type/extension-->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4"></label>
                                        <div class="col-md-8">
                                            <input type="submit" name="btn" value="Save Student Info" class="btn btn-outline-success btn-block " />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php //include "pages/includes/footer.php"; ?>
