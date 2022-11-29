<?php   

include './inc/header.php';

?>

<h2>Add banner</h2>

<div class="card">
    <div class="card-header bg-primary text-light">
      Add New Banner Here
    </div>
    <div class="card-body">
        <from action="" method="">

<div class="row">

<div class="col-lg-3">
    <label for="bannerImg"><img src="https://cynthiarenee.com/wp-content/uploads/2018/11/placeholder-product-image.png" alt="" style="width: 100%; display:block;"></label>
    <input type="file" class="d-none" id="bannerImg" name="banner_img">
</div>
<div class="col-lg-9">
    <label class="w-100">
        Insert a Banner Title <span class="text-danger">*</span>
        <input type="text" name="title" class="from-control">
    </label>
    <label class="w-100">
        Insert a Banner Video Link <span class="text-danger">*</span>
        <input type="text" name="video" class="from-control">
    </label>
    <label class="w-100">
        Insert a Banner Detail <span class="text-danger">*</span>
        <textarea name="detail"  class="from-control"></textarea>
    </label>
</div>
</div>

<button class="btn btn-primary float-right">Insert Banner</button>

        </from>
    </div>
</div>



<?php   

include "./inc/footer.php";

?>