<!DOCTYPE html>
<html>
    <head>
        <title>Homepage 1</title>
    </head>
    
    <body>
        <p>Views has been loaded:</p>
        <?php
            foreach ($rows as $r){
                echo '<h1>' . $r->title . '</h1>';
            }
        ?>
    </body>
    
</html>