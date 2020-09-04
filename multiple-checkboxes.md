### Form processing with a group of checkboxes
One type of form control we haven't looked at is a group of checkboxes. Checkboxes allow a user to select multiple options from a list. Here's an example of an HTML form that uses checkboxes:

```html
<form action="process-chkboxes.php" method="post">
<fieldset>
	<legend>Which of the following languages have you used?</legend>
	<label for="html">HTML</label>
	<input type="checkbox" name="languages[]" value="html" id="html">
	<label for="css">CSS</label>
	<input type="checkbox" name="languages[]" value="css" id="css">
	<label for="js">JavaScript</label>
	<input type="checkbox" name="languages[]" value="js" id="js">
	<label for="python">Python</label>
	<input type="checkbox" name="languages[]" value="python" id="python">
	<label for="java">Java</label>
	<input type="checkbox" name="languages[]" value="java" id="java">
</fieldset>
<input type="submit" name="submit_btn" value="answer">
</form>
```


This form allows users to select from a list of programming languages.
* Note that each of the checkboxes has the same value for the name attribute, ```name="languages[]"```.
* The *name* is followed by square brackets. This tells the browser to send the selected items as a single 'array like value' to the server.
Here's how we can process this data.

```php
<?php
//process-chkboxes.php
$languages = $_POST["languages"];

foreach($languages as $language)
{
	echo "<p>{$language}</p>";
}
?>
```

* ```$_POST["languages"]``` is an array. So we need to use a loop to display the values the user has selected.
* As always the best way to understand this is by running a working example and trying to modify the code e.g. by adding another checkbox to the form or changing the output.
