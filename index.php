<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="favicon.ico">
    <title>Safety & Security</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bookmark.css" rel="stylesheet">
  </head>

  <body>
    <main role="main" class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="display-4 text-center">Safety & Security Dashboard</h1>
				</div>
			</div>

			<hr>

			<div class="row">
        <?php include("php/display_bookmarks.php"); ?>
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
