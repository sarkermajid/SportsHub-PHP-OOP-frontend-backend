<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>

                <div class="col-md-9 mx-auto pt-5">
                    <div class="card bg-dark fw-semibold text-white shadow-lg">
                        <div class="card-header fw-bold h2 text-center border-info">Add Category</div>
                        <div class="card-body">
                            <h4 class="text-success text-center"><?php echo $message; ?></h4>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">Category Name</div>
                                    <div class="col-md-9">
                                        <select name="category_name" class="form-control show-tick">
                                            <option value="">-- Category Name--</option>
                                            <option value="cricket">Cricket</option>
                                            <option value="football">Football</option>
                                            <option value="tennis">Tennis</option>
                                            <option value="basketball">Basketball</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="category_btn" value="Create Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"; ?>