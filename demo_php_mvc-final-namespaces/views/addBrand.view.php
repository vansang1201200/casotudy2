<?php require 'partials/head.php' ?>

<form action="/addBrand" method="post" class="was-validated" >
    <div class="form-group">
        <label for="uname">Brand Name:</label>
        <input type="text" class="form-control" id="brandName" placeholder="Enter Brand Name" name="brand_name" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require 'partials/footer.php' ?>