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
                    Create Action
                </h3>
            </div>
            <div data-role="content">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput1">
                            Title Programm
                        </label>
                        <input name="" id="textinput1" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <div id="checkboxes1" data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="vertical">
                        <legend>
                            Choose Plug
                        </legend>
                        <input id="checkbox1" name="" type="checkbox" />
                        <label for="checkbox1">
                            Plug1
                        </label>
                        <input id="checkbox2" name="" type="checkbox" />
                        <label for="checkbox2">
                            Plug2
                        </label>
                        <input id="checkbox3" name="" type="checkbox" />
                        <label for="checkbox3">
                            Plug3
                        </label>
                        <input id="checkbox5" name="" type="checkbox" />
                        <label for="checkbox5">
                            Plug4
                        </label>
                        <input id="checkbox6" name="" type="checkbox" />
                        <label for="checkbox6">
                            Plug4
                        </label>
                    </fieldset>
                </div>
                <div id="checkboxes3" data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="vertical">
                        <legend>
                            Choose Days
                        </legend>
                        <input id="checkbox7" name="" type="checkbox" />
                        <label for="checkbox7">
                            Monday
                        </label>
                        <input id="checkbox8" name="" type="checkbox" />
                        <label for="checkbox8">
                            Tuesday
                        </label>
                        <input id="checkbox9" name="" type="checkbox" />
                        <label for="checkbox9">
                            Wednesday
                        </label>
                        <input id="checkbox10" name="" type="checkbox" />
                        <label for="checkbox10">
                            Thursday
                        </label>
                        <input id="checkbox11" name="" type="checkbox" />
                        <label for="checkbox11">
                            Friday
                        </label>
                        <input id="checkbox12" name="" type="checkbox" />
                        <label for="checkbox12">
                            Saturday
                        </label>
                        <input id="checkbox13" name="" type="checkbox" />
                        <label for="checkbox13">
                            Sunday
                        </label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="vertical">
                        <legend>
                            Choose Action
                        </legend>
                        <input id="radio1" name="" value="radio1" type="radio" />
                        <label for="radio1">
                            On
                        </label>
                        <input id="radio2" name="" value="radio2" type="radio" />
                        <label for="radio2">
                            Off
                        </label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput2">
                            Time
                        </label>
                        <input name="" id="textinput2" placeholder="" type="time" value="08:00" type="text" />
                    </fieldset>
                </div>
				<!--data-icon="star" data-iconpos="left" --> 
                <input value="Save" type="submit" />
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>