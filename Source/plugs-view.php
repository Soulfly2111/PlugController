<!DOCTYPE html>

<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('plug-controller.db');
    }
}

$db = new MyDB();
?>

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
								Header
				</h3>
			</div>
			
			<div data-role="content">
				<!-- <div data-role="collapsible-set">
					<div data-role="collapsible">
						<h3>
										Action 1
						</h3>
					</div> -->
					<?php
                $results = $db->query('SELECT id, name, groupName, code, groupCode FROM plugs order by id');
				while ($row = $results->fetchArray()) {				
			?>
					<div data-role="collapsible" >
						<h3>
							 <?php  printf($row["name"]) ?>
						</h3>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									Id
								</label>
								<input name="<?php  printf($row["id"]) ?>" id="textinput2" placeholder="" value="<?php  printf($row["id"]) ?>" type="text">
							</fieldset>
						</div>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									Groupname
								</label>
								<input name="<?php  printf($row["groupName"]) ?>" id="textinput2" placeholder="" value="<?php  printf($row["groupName"]) ?>" type="text">
							</fieldset>
						</div>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									GroupCode
								</label>
								<input name="<?php  printf($row["groupCode"]) ?>" id="textinput2" placeholder="" value="<?php  printf($row["groupCode"]) ?>" type="text">
							</fieldset>
						</div>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									Code
								</label>
								<input name="<?php  printf($row["code"]) ?>" id="textinput2" placeholder="" value="<?php  printf($row["code"]) ?>" type="text">
							</fieldset>
						</div>
						
						
						
						<a data-role="button" id="saveButton-<?php  printf($row['id']) ?>" name="saveButton"  href="#" data-icon="gear" data-iconpos="left">
							Save
						</a>
						<a data-role="button" id="deleteButton-<?php  printf($row['id']) ?>" name="deleteButton"  href="#" data-icon="delete" data-iconpos="left">
							Delete
						</a>
					</div>
					 <?php
			   	
				}
			   ?>
			   <div data-role="collapsible" >
						<h3>
							 New Plug
						</h3>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									Id
								</label>
								<input name="id" id="textinput2" placeholder="" value="" type="text">
							</fieldset>
						</div>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									Groupname
								</label>
								<input name="groupName" id="textinput2" placeholder="" value="" type="text">
							</fieldset>
						</div>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									GroupCode
								</label>
								<input name="code" id="textinput2" placeholder="" value="" type="text">
							</fieldset>
						</div>
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup">
								<label for="textinput2">
									Code
								</label>
								<input name="code" id="textinput2" placeholder="" value="" type="text">
							</fieldset>
						</div>
						<a data-role="button" href="#page1" data-icon="gear" data-iconpos="left">
										Save
						</a>
						</div>
			
				</div>
			</div>
		</div>
        
        <script>
            //App custom javascript
			
			$( "a[name='deleteButton']" ).bind( "click", function(e)
			{alert('Span Clicked!')} );
			
			$( "select" ).bind( "change", function(event, ui) {
			console.log($(this).attr('id') + ' - ' + $(this).val());
			$.ajax({
				  url: 'send.php',
				  type: "POST",
				  data: {id : $(this).attr('id'), status: $(this).val(), timestamp: new Date().getTime()},
				  
				  success: function(data) {
					console.log(data);					
				  }
				});					
		});
        </script>
    </body>
</html>