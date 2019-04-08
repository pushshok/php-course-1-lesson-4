<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Фотогалерея</title>
</head>
<body>

  <table width="100%" height="100%" border="1" cellspacing="0" cellpadding="0">
    <tr height="20%">
	<td width="20%"><center>Логотип</center></td>
	<td><center><h1>Слоган - основная тема сайта на баннере</h1></center></td>
	<td width="20%"><center><p>Телефон<br />Контакты</p></center></td>
	</tr>
    <tr>
	<td width="20%"><center><p>Боковое меню</p></center></td>
	<td width="80%" colspan="2">
	
	<?
	$dir = "images";
	$scan = scandir($dir, 0);
	unset($scan[1]);
	unset($scan[0]);
	$counting = (int) count($scan);
	
	$table = '<table width="100%" height="100%" border="1" cellspacing="0" cellpadding="0"><tr>';
	
	for ($i = 2; $i <= ($counting+1); $i++) {
		
		
		$table .= "<td><a href='/images/".$scan[$i]."'><img src='/images/".$scan[$i]."' alt='Английский домик '".($i-1)." width='85%'></a></td>";
		
		if (($i-1) % 5 == 0) {
			$table .= "</tr><tr>";
		}
	}
	
	$table .= "</tr></table>";
	echo $table;
	
	?>
	
	</td>
	</tr>
    <tr height="20%">
	<td colspan="3"><center><p>Copyright <?=date("Y"); ?> &copy; my_site.ru</p></center></td>
	</tr>   
    
  </table>
 


</body>
</html>


