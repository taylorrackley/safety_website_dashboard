<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title">
        <label>Website Link</label>
        <input type="text" name="website_link">
        <label>Image</label>
        <input type="file" name="image">
        <input type="submit" name="submit">
    </form>

    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["image"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              echo $target_file;
          }
      }

      $title = $_POST["title"];
      $website_link = $_POST["website_link"];

      include("php/connect.php");
      $stmt = $con->prepare("INSERT INTO website_dashboard (title, icon_link, website_link) VALUES (?, ?, ?)");
      $stmt->bind_param('sss', $title, $target_file, $website_link);

      if ($result = $stmt->execute()){
        $stmt->free_result();
      }
      else {
        echo "error";
      }

      $con->close();
    }
    ?>
  </body>
</html>
