<?
	$select = $_GET['select'];
	echo "YOUR SELECT : ".$select;
	header('Refresh: 5; URL=http://www.google.com');
	exit();
?>