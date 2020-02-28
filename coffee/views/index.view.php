<?php require 'partials/head.php' ?>

<h1>Quán coffee</h1>

<div class="container">
    <a href="/showAddBrand" class="btn btn-primary">Add New Branch</a>
    <table class="table table-hover">
        <tr>
            <td>ID_oder</td>
            <td>Name_coffee</td>
            <td> price</td>
            <td>water_photo</td>
            <td>Action</td>
        </tr>
        <?php foreach ($listmenus as $menu) : ?>

            <tr>
                <td><?= $menu->ID_oder ?></td>
                <td><?= $menu->Name_coffee ?></td>
                <td><?= $menu->price ?></td>
                <td><img src="<?= 'data:image;base64,'.$menu->water_photo?> " width="60px" height="60px"></td>
                <td><a href="/editmenus?id=<?= $menu->ID_oder ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="/deletemenu?id=<?= $menu->ID_oder ?>" class="btn btn-warning"><i class="fas fa-trash-alt"></i></i></a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<?php require 'partials/footer.php' ?>