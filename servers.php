<?php
//error_reporting(E_ALL);



$SERVIDOR='https://descargavideosmio.herokuapp.com/';

if(!isset($server_js_index)){
	intentaImprimirYAcabar();
}
else{
	$servidor_js=$SERVIDOR;
}




function intentaImprimirYAcabar(){
	global $SERVIDOR;
	if(isset($_GET['js']))
		if($_GET['js']==1){
			echo 'SERVIDOR="'.$SERVIDOR.'";';//Para js en la página principalq
			exit;
		}
	echo "\$SERVIDOR='".$SERVIDOR."';";//para servidor secundario
	exit;
}
?>
