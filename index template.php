<?php
$file = $_FILE['upload'];
move_uploaded_file($file, "");
?>

<html>
<head>

</head>
<body>
<form method="post" action="./index template.php">
<input type="file" name="upload">
<input type="submit" value="upload">
</form>
</body>
</html>
