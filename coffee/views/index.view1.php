<?php require 'partials/head.php' ?>

<h1>Quán coffee</h1>

<div class="container">
    <a href="/showAddBrand" class="btn btn-primary">Add New Branch</a>
    <table class="table table-hover">
        <tr>
            <td>ID_customer</td>
            <td>Name_customer</td>
            <td> location</td>
            <td>ID_saff</td>
            <td>Action</td>
        </tr>
        <?php foreach ($listcustomer as $customer) : ?>

            <tr>
                <td><?= $customer->ID_customer ?></td>
                <td><?= $customer->Name_customer ?></td>
                <td><?= $customer->location ?></td>
                <td><?= $mecustomernu->ID_saff ?></td>
                <td><a href="/editmenus?id=<?= $menu->ID_oder ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="/deletemenu?id=<?= $menu->ID_oder ?>" class="btn btn-warning"><i class="fas fa-trash-alt"></i></i></a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<?php require 'partials/footer.php' ?>