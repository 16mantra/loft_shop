<?php
$product_info = $product_controller->get_by_id($_GET["id"]);
$product_category = $product_controller->get_name_category($product_info["cat_id"]);
$categories = $category_controller->get_all();
var_dump($product_category);
?>
<form method="post" action="/admin/product_action?id=<?=$product_info["id"]?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file"  class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input id="exampleInputEmail1"value="<?=$product_info["name"]?>" type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input id="exampleInputEmail1" value="<?=$product_info["price"]?>" type="text" class="form-control" name="price" aria-describedby="emailHelp">
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Categories</label>
        <select class="form-select form-control" aria-label="Default select example" name="cat_id">
            <option selected>Open this select menu</option>
            <?php foreach($categories as $category): ?>
            <option <?=$category["name"] == $product_category ? "selected" : "" ?> value="<?=$category["id"]?>"><?=$category["name"]?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Discription</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="discription"
                style="height: 100px" ><?=$product_info["discription"]?>"</textarea>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Small discription</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="small_discription" > <?=$product_info["small_discription"]?></textarea>
            </div>
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="product_edit">Submit</button>
    </div>


</form>