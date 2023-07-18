<?php
?>
<h3>Adding category</h3>
<form method="post" action="/admin/category_action" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input id="exampleInputEmail1" type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary" name="category_add">Submit</button>
</form>