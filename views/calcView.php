<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>        
    </head>

    <body>
    	
    	<header><h3>Calculator</h3></header>

    	<form action='../controllers/calcController.php' method='post'>
    		<div><span>number 1: </span><input type="text" name="number1"  style="width:50px;"></div>
    		<div><span>number 2: </span><input type="text" name="number2"  style="width:50px;"></div>
    		<br>
    		<span>operation: </span><br>
    		<input type="radio" name="operation" value="+" checked>+<br>
			<input type="radio" name="operation" value="-">-<br>
			<input type="radio" name="operation" value="*">*<br>
			<input type="radio" name="operation" value="/">/<br>
			<br>
    		<input type="submit" value='send'>
    	</form>
<!--
    </body>
</html>
-->