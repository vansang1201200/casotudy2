<?php require 'partials/head.php' ?>

<h1>Code Gym</h1>

<div class="container">
    <a href="/showAddBrand" class="btn btn-primary">Add New Branch</a>
    <table class="table table-hover">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>City</td>
            <td>Action</td>
        </tr>
        <?php foreach ($listbrands as $brand) : ?>

            <tr>
                <td><?= $brand->brand_id ?></td>
                <td><?= $brand->brand_name ?></td>
                <td><?= $brand->getCity() ?></td>
                <td><a href="/editbrand?id=<?= $brand->brand_id ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="/deleteband?id=<?= $brand->brand_id ?>" class="btn btn-warning"><i class="fas fa-trash-alt"></i></i></a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<?php require 'partials/footer.php' ?>