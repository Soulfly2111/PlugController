<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="css/plug-controller.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.mobile-1.2.0.min.js"></script>
        <script src="js/plug-controller.js"></script>
    </head>
    <body>
        <!-- Home -->  
		<div data-role="page" id="page1">
			<div data-theme="a" data-role="header">
				<h3>
					Admin
				</h3>
			</div>
			<div data-role="content">
				<a data-role="button" href="action-view.php">
					Show Actions
				</a>
				<a data-role="button" href="action-add.php">
					Add Action
				</a>
			</div>
			<div data-role="content">
				<a data-role="button" href="plugs-view.php">
					Edit Plugs
				</a>										
			</div>
		</div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>