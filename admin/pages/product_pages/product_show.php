<?php 
$product_info = $product_controller->get_by_id($_GET["id"]);
$product_category = $product_controller->get_name_category($product_info["cat_id"]);

?>
<div class="row">
    <div class="card mb-3 col-6">
        <div class="row g-0">
            <div class="col-md-4 p-4">
                <img src="../<?=$product_info["image"]?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$product_info["name"]?></h5>
                    <p class="card-text"><?=$product_info["price"]?></p>
                    <p class="card-text">Category: <a href=""><?=$product_category?></a></p>
                    <p class="card-text"><?=$product_info["discription"]?></p>
                    <p><small><?=$product_info["small_discription"]?></small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 col-4 offset-2">
        <div class="row g-0">
            <div class="col-12" style="display:flex; padding:10px; gap:30px!important;">
                <span>[<a class="" href="/admin/product_edit?id=<?= $product_info["id"] ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil" viewBox="0 0 16 16">
                            <path
                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>Edit</a>]</span>
                <span>[<a class="" href="/admin/product_action?product_delete=<?= $product_info["id"] ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                        </svg>Delete</a>]</span>
            </div>
            <div class="col-md-8">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>