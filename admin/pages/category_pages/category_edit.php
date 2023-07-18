<?php
if(isset($_GET["id"])){

    $data = $category_controller->get_by_id("category", $_GET["id"]);
}
?>
<h3>Editing category</h3>
<form method="post" action="/admin/category_action?id=<?=$data["id"]?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input id="exampleInputEmail1" value="<?=$data["name"]?>" type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary" name="category_edit">Submit</button>
</form>
