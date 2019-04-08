<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Загрузка файла</title>
</head>
<body>

<?

$path = "upload/".$_FILES['photo']['name'];
$destinaton = "mini/width-175-".$_FILES['photo']['name'];


if (move_uploaded_file($_FILES['photo']['tmp_name'], $path))
	echo "Файл ".$_FILES['photo']['name']." успешно загружен!";

include_once('classSimpleImage.php');
   $image = new SimpleImage();
   $image->load($path);
   $image->resizeToWidth(175);
   $image->save($destinaton);


header('Refresh: 2; url=http://localhost/task4.php');
?>

</body>
</html>
