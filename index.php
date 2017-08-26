 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for($i=0;$i<=5;$i++){
            ?>
        <div id="<?php echo $i; ?>"><?php echo $i; ?></div>
        <?php
        }
        ?>
       <div id="6">6</div>
    </body>
</html>
