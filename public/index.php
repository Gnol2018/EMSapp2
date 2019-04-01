<?php
require_once("../resources/config.php");
echo $_SESSION['userName'];
?>
<!DOCTYPE html>
<html lang="en">
	<?php include(TEMPLATE_FRONT . DS . "loginHeader.php") ?>
	<?php include(TEMPLATE_FRONT . DS . "loginBody.php") ?>
</html>
