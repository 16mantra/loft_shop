<?php
if(isset($_GET["id"])){
    $data = $slider_controller->get_by_id("slider", $_GET["id"]);
}
?>
<form method="post" action="/admin/slider_action?id=<?=$data["id"]?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp"  value="<?=$data["title"]?>" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Link text</label>
        <input type="text" class="form-control" name="link_text"  value="<?=$data["link_text"]?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Link href</label>
        <input type="text" class="form-control" name="link_href"  value="<?=$data["link_href"]?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sort</label>
        <input type="number" value="<?=$data["sort"]?>" class="form-control" name="sort" >
    </div>

    <button type="submit" class="btn btn-primary" name="edit">Submit</button>
</form>
