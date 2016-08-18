<?php

function doStuff() {
	
if(!empty($_POST['text'])){

$encrypt = array('a' => 'd', 'b' => 'e', 'c' => 'f', 'd' => 'g', 'e' => 'h',
'f' => 'i', 'g' => 'j', 'h' => 'k', 'i' => 'l', 'j' => 'm', 'k' => 'n', 
'l' => 'o', 'm' => 'p', 'n' => 'q', 'o' => 'r', 'p' => 's', 'q' => 't', 
'r' => 'u', 's' => 'v', 't' => 'w', 'u' => 'x', 'v' => 'y', 'w' => 'z', 
'x' => 'a', 'y' => 'b', 'z' => 'c');

$decrypt = array('a' => 'x', 'b' => 'y', 'c' => 'z', 'd' => 'a', 'e' => 'b',
'f' => 'c', 'g' => 'd', 'h' => 'e', 'i' => 'f', 'j' => 'g', 'k' => 'h',
'l' => 'i', 'm' => 'j', 'n' => 'k', 'o' => 'l', 'p' => 'm', 'q' => 'n',
'r' => 'o', 's' => 'p', 't' => 'q', 'u' => 'r', 'v' => 's', 'w' => 't',
'x' => 'u', 'y' => 'v', 'z' => 'w');


$text = $_POST['text'];

if ($_POST['operation'] == 'kryptera') {
	for($i = 0; $i < strlen($text); $i++){
		$text[$i] = $encrypt[$text[$i]];
		}
		echo $text;
		}
else {
	for($i = 0; $i < strlen($text); $i++){
		$text[$i] = $decrypt[$text[$i]];
		}
		echo $text;
		}
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<title>Laboration 1</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rev="start" href="./" title="Home Page" />
	<link href="../../style.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">
#resultat {
	color:#F00;
	font-weight:bold;
}
</style>
</head>

</head>
	<body>
		<h1>Laboration 1</h1>
		<hr />
		<p>Ett program som krypterar och dekrypterar en text med Caesar-chiffret</p>
		<form action="index.php" method="post" enctype="multipart/form-data" id="form1">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
				<td>Text</td>
					<td>&nbsp;</td>
					<td colspan="2">
						<input name="text" type="text" id="text" size="50" maxlength="100" />
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<select name="operation" id="operation">
							<option value="kryptera" selected="selected">kryptera</option>
							<option value="dekryptera">dekryptera</option>
						</select>
					</td>
					<td>
						<label>
							<input type="submit" name="Submit" id="submit" value="Utf&ouml;r operation" />
						</label>
					</td>
				</tr>
				<tr>
					<td>Resultat</td>
					<td>&nbsp;</td>
					<td colspan="2">
						<td colspan="2"><div id="resultat"><?php doStuff(); ?></div></td>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html> 