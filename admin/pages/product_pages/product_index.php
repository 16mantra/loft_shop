<?php 
flash_message("success", "primary");
$products = $product_controller->get_all();

?>
<style>
.row .card {
    padding-top: 15px;
}

.row .card img {
    width: 100%;

    display: block;
    margin: auto;

}

.row .card .functional {
    display: flex;
    gap: 10px;
}

.row .card h5 {
    float: none;
}

a {
    margin-bottom: 20px;
}
</style>
<h1>Products</h1>
<a class="btn btn-primary" href="/admin/product_add">Add new product</a>
<div class="row cards gx-2">
    <?php foreach ($products as $card): ?>
    <?php 
    $category = $category_controller->get_by_id($card["cat_id"]);
        ?>
    <div class="col">
        <div class="card" style="width: 15rem; ">
            <img src="../<?= $card["image"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Name: <?= $card["name"] ?></h5>
                <p>Price: <?= $card["price"]?></p>
                <p>Category: <a href=""><?= $category["name"]?></a></p>
                <p>Small discription: <?= $card["small_discription"]?></p>
                <div class="functional mt-2 ">
                    <a class="btn btn-primary" href="/admin/product_show?id=<?=$card["id"]?>">Show full info</a>
                    <a class="btn btn-primary" href="/admin/category_edit?id=<?= $card["id"] ?>">Edit</a>
                    <a class="btn btn-danger"
                        href="/admin/category_action?category_delete=<?= $card["id"] ?>">Delete</a>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; ?>