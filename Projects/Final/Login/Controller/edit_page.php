<?php
set_include_path( "../../");
require_once("Login/Model/reservation.php");
echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Edit</title>
        <link rel='stylesheet' type='text/css' href='../../../main_page.css'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Description of Grad Progress implementation choices'>
        <meta name='date' content='January 21, 2016'>
        <link href='../../Bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>    
    
        <div id=title class='container marketing'>
            <h1>Welcome Administrator</h1>
        </div>
        <div class='container marketing' id=table>

              $pastforms
                <br><br>
                </form>
                </div>
        </div>    
    </body>
</html>
";
?>
