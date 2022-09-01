<?php
$correct_answers = ["Brazil","Argentina","England","Uruguay"];
$winners = $_POST["winners"];
print_r($winners);

/*
1) Add another checkbox to the form for England. Check this works.
2) Use a foreach loop to display the chosen countries in the body of the page.
3) Add some code to check if the user has answered correctly. 
   This is probably a bit trickier than it first appears. 
   There are a number of ways to do it e.g. sorting and then comparing the arrays using an if statement.
4) Add suitable validation e.g. If the user doesn't choose any teams.
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP and Checkboxes</title>
</head>
<body>
<h1>World Cup Winners</h1>

</body>
</html>
