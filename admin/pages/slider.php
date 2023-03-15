<?php

?>
<form method="post" action="/admin/slider_store" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Link text</label>
        <input type="text" class="form-control" name="link_text">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Link href</label>
        <input type="text" class="form-control" name="link_href">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sort</label>
        <input type="number" value="500" class="form-control" name="sort">
    </div>

    <button type="submit" class="btn btn-primary" name="store">Submit</button>
</form>
