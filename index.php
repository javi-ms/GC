<?php 
	require_once "resources/header.php";	
?>

<?php 
if (!isset($_GET['page'])) {
	include ('resources/body.php');
}else{
	include ('resources/'.$_GET['page'].'.php');
}
require_once "resources/body.php";

?>

<?php 
	require_once "resources/footer.php";
?>
