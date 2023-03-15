<?php
$data = get_data();
?>
<div class="row mb-3">
    <div class="add">
        <a class="btn btn-primary" href="slider_add">Add new picture</a>
    </div>
</div>
<div class="row">
    <?php foreach ($data as $card): ?>
    <div class="card" style="width: 18rem;">
        <img src="../<?=$card["image"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=$card["title"]?></h5>
            <p class="card-text">Text:<?=$card["link_text"]?> <br> Link:<?=$card["link_href"]?></p>
            <a href="http://loft-shop/admin/slider_add" class="btn btn-primary"><?=$card["link_text"]?></a>
        </div>
    </div>
    <?php endforeach; ?>
</div>


