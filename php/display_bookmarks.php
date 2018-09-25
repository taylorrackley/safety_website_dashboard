<?php

include("connect.php");
$stmt = $con->prepare("SELECT title, icon_link, website_link FROM website_dashboard");
if ($stmt->execute()) {
  $result = $stmt->get_result();
  while($row = mysqli_fetch_array($result)) {
    echo '<div class="col-md-3">
            <a href="'.$row['website_link'].'">
              <div class="bookmark shadow p-4 mb-4 bg-white text-center" data-toggle="tooltip" data-placement="top" title="Search Engine">
                <p class="lead">'.$row['title'].'</p>
                <img src="'.$row['icon_link'].'">
              </div>
            </a>
          </div>';
  }
}
$con->close();

?>
