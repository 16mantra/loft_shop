<?php
$data = get_category();
?>
<style>
    .row .card{
        padding-top:15px;
    }
    .row .card img{
        width: 66px;
        height: 75px;
        display: block;
        margin: auto;

    }
    .row .card .functional{
        display: flex;
        gap: 10px;
    }
    .row .card h5{
        float: none;
    }
    a{
        margin-bottom: 20px;
    }
</style>
<h1>Categories</h1>
<a class="btn btn-primary" href="/admin/category_add">Add new category</a>
<div class="row cards gx-2">
    <?php foreach ($data as $card): ?>
        <div class="col">
            <div class="card" style="width: 10rem; ">
                <img src="../<?= $card["image"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $card["name"] ?></h5>
                    <div class="functional mt-2 ">
                        <a class="btn btn-primary" href="/admin/category_edit?id=<?= $card["id"] ?>">Edit</a>
                        <a class="btn btn-danger" href="/admin/category_action?category_delete=<?= $card["id"] ?>">Delete</a>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>