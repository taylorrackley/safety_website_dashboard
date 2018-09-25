<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="favicon.ico">
    <title>Safety & Security</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
		<style>
			body {
				background-color: #eeeeee;
			}
			a {
			  color: black;
			  text-decoration: none;
			}
			a:hover {
			  color: black;
			  text-decoration: none;
			}
			.bookmark {
				/* width: 250px;
				height: 250px; */
				/* border-top: 2px solid black; */
				overflow: hidden;
			}
			.bookmark p {
				font-size: 22px;
			}
			.bookmark img {
				width: calc(100% - 50px);
				height: calc(100% - 50px);
				/* width: 100%;
				height: 100%; */
			}
		</style>

		    <main role="main" class="container">

					<div class="row">
						<div class="col-md-12">
							<h1 class="display-4 text-center">Safety & Security Dashboard</h1>
						</div>
					</div>

					<hr>

					<div class="row">

            <?php
              ini_set('display_errors', 1);
              error_reporting(E_ALL);

              include("php/connect.php");
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

							<div class="col-md-3">
								<a href="https://docs.google.com/forms/d/e/1FAIpQLSfAS43RIk5p9vpAO9MXvqL5aK0HCW6SuukeiSY7E1Kd9YgdIQ/viewform">
									<div class="bookmark shadow p-4 mb-4 bg-white text-center" data-toggle="tooltip" data-placement="top" title="Submit issues with the Fire Computer">
										<p class="lead">Fire Computer</p>
										<img src="fire_computer.png">
									</div>
								</a>
							</div>

					</div>

				</main>

		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
		<script>
			$(".bookmark").mouseover(function(){
				$(this).addClass("shadow-lg").removeClass("shadow");
			});

			$(".bookmark").mouseout(function(){
				$(this).addClass("shadow").removeClass("shadow-lg");
			});
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});
		</script>
  </body>
</html>
