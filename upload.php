<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form method="post" action="php/add_bookmark.php" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title">
        <label>Website Link</label>
        <input type="text" name="website_link">
        <label>Image</label>
        <input type="file" name="image">
        <input type="submit" name="submit">
    </form>

  </body>
</html>
