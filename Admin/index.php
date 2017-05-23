
<!--  
* Created by PhpStorm.
 * User: Админ
 * Date: 17.04.2017
 * Time: 22:01
 -->


<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
session_start();

include_once '../Config/adminconfig.php';
include_once '../Config/ConfigClasses.php';
// include_once 'authentication.php';
include_once  'header_adm.php';?>
<div class="container container_nav">
	<div class="row">
		<div class="col-md-2"><?php include_once  'sidebar.php';?></div>
		
		<div class="col-md-10"><?php include_once  'main_adm.php';?></div>
		
	</div>
</div>



<?php
include_once  'footer_adm.php';
?>













