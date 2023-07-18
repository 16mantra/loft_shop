<?php 
$categories = $category_controller->get_all();
flash_message("error", "danger");
?>
<h3>Adding product</h3>
<form method="post" action="/admin/product_action" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input id="exampleInputEmail1" type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input id="exampleInputEmail1" type="text" class="form-control" name="price" aria-describedby="emailHelp">
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Categories</label>
        <select class="form-select form-control" aria-label="Default select example" name="cat_id">
            <option selected>Open this select menu</option>
            <?php foreach($categories as $category): ?>
            <option value="<?=$category["id"]?>"><?=$category["name"]?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Discription</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="discription"
                style="height: 100px"></textarea>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Small discription</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="small_discription"></textarea>
            </div>
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="product_add">Submit</button>
    </div>


</form>