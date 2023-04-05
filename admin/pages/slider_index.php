<?php
$data = get_data();

?>
<div class="row mb-3">
    <div class="add">
        <a class="btn btn-primary" href="slider_add">Add new picture</a>
    </div>
</div>
<div class="row cards gx-2">
    <?php foreach ($data as $card): ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../<?= $card["image"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $card["title"] ?></h5>
                    <p class="card-text">Link-text:<?= $card["link_text"] ?> <br> Link-adress:<?= $card["link_href"] ?>
                    </p>
                    <a href="http://loft-shop/admin/slider_add"><?= $card["link_text"] ?></a>
                    <div class="functional mt-2 ">
                        <a class="btn btn-primary" href="/admin/slider_edit?id=<?= $card["id"] ?>">Edit</a>
                        <a class="btn btn-danger" href="/admin/slider_action?delete=<?= $card["id"] ?>">Delete</a>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


