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
        <title>Plug-Controller
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
            <div data-role="content">
			<?php
                $results = $db->query('SELECT id, name FROM plugs order by id');
				while ($row = $results->fetchArray()) {				
			?>
				<div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
					
					<table style="width:100%">
						<tr >
						<td style="width:50%">
                        <label style="width:200px" for="toggleswitch_<?php printf($row["id"]) ?>">
                            <span ><?php  printf($row["name"]) ?></span>
                        </label>
						</td>
						<td>
						
                        <select  style="float:right" name="toggleswitch_<?php printf($row["id"]) ?>" id="<?php printf($row["id"]) ?>" data-theme="" data-role="slider">
                            <option value="off">
                                Off
                            </option>
                            <option value="on">
                                On
                            </option>
                        </select>
						</td>
					</tr>
					</table>
                    </fieldset>
                </div>
               <?php
			   	
				}
			   ?>
				
            </div>
        </div>
        <script>
		
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
            //App custom javascript
        </script>
    </body>
</html>