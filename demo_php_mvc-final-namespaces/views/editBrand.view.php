<?php require 'partials/head.php' ?>

<form action="/editbrand" method="post" class="was-validated">
    <div class="form-group">
        <input type="hidden" class="form-control" name="brand_id" value="<?= $brand[0]->brand_id ?>">
        <label for="uname">Brand Name:</label>
        <input type="text" class="form-control" id="brandName" placeholder="Enter Brand Name" name="brand_name" value="<?= $brand[0]->brand_name ?>" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require 'partials/footer.php' ?>