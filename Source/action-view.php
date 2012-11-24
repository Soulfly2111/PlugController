<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
		   
		<div data-role="page" id="page1">
			<div data-theme="a" data-role="header">
				<h3>
								Header
				</h3>
			</div>
			<div data-role="content">
				<div data-role="collapsible-set">
					<div data-role="collapsible">
						<h3>
										Action 1
						</h3>
					</div>
					<div data-role="collapsible" >
						<h3>
										Action 2
						</h3>
						<div class="ui-grid-a">
							<div class="ui-block-a">
								<h4>
												Plugs
								</h4>
							</div>
							<div class="ui-block-b"> 
								<ul>
								<li>Plug1</li>
								<li>Plug2</li>
								</ui>
								
								
							</div>
							<div class="ui-block-a">
								<h4>
												Days
								</h4>
							</div>
							<div class="ui-block-b">
							<ul>
								<li>Monday, Tuesday</li>
								<li>Saturday, Sunday</li>
								
								</ui>
							</div>
						</div>
						<a data-role="button" href="#page1" data-icon="gear" data-iconpos="left">
										Edit
						</a>
						<a data-role="button" href="#page1" data-icon="delete" data-iconpos="left">
										Delete
						</a>
					</div>
				</div>
			</div>
		</div>
        
        <script>
            //App custom javascript
        </script>
    </body>
</html>