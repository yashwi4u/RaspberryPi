<!DOCTYPE HTML>
<html>
<head></head>
<body>
<?php
function perform()
{
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);

fclose($myfile);
}
<form name=buttons>
<input type="button" name="button1" value="button1" onClick=perform()>
</form>

?>

</body>
</html>
