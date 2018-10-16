<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>        
    </head>

    <body>
    	
    	<header><h3>Calculator</h3></header>

    	<form action='controllers/calcOperation.php' method='post'>
    		<div><span>number 1: </span><input type="text" name="number1"  style="width:50px;"></div>
            <br>
    		<div><span>number 2: </span><input type="text" name="number2"  style="width:50px;"></div>
    		<br>
    		<span>operation: </span><br><br>
    		<input type="radio" name="operator" value="+" checked>+<br>
			<input type="radio" name="operator" value="-">-<br>
			<input type="radio" name="operator" value="*">*<br>
			<input type="radio" name="operator" value="/">/<br>
			<br>
    		<input type="submit" value='send'>
    	</form>


    	<br>
    	<br>
		<h2>History</h2>

    	<?php
            $i=1;
            foreach ($datos as $dato) {
                echo $i.' --> '. $dato["number1"]." ".$dato["operator"]." ".$dato["number2"]." = ".$dato["result"]."<br/>";
                $i++;
            }
        ?>

    </body>
</html>