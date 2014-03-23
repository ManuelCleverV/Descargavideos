<?php
function medici(){
global $web;

//Hay videos geobloqueados. pocos pero hay. OJO porque no irán


/*
POST a:
es.medici.tv

con:
json=true&page=%2Fhenri-demarquette-charles-dutoit-royal-philharmonic-orchestra-annecy-classic-festival-2012&timezone_offset=-120
*/

//comprobar que la web es correcta o fallar
if(!enString($web,'#!'))
	return;

$obtenido=array('enlaces' => array());

//aparentemente se puede. enviemoslo.
$p=strpos($web,'#!')+2;
$f=strlen($web);
$webFormateada=substr($web,$p,$f-$p);

$cabecera=array(
	"Host: es.medici.tv",
	"Content-type: application/x-www-form-urlencoded"
);
$post='json=true&page='.urlencode($webFormateada).'&timezone_offset=-120';

$ret = CargaWebCurl('http://es.medici.tv',$post);

$ret=jsonRemoveUnicodeSequences($ret);

dbug($ret);

//imagen:
//"main_image": "http:....jpg"
$p=strpos($ret,'"main_image"')+12;
$p=strpos($ret,'"',$p)+1;
$f=strpos($ret,'"',$p);
$imagen=substr($ret,$p,$f-$p);
dbug('imagen='.$imagen);

//titulo:
//"title": "..."
$p=strpos($ret,'"title"')+7;
$p=strpos($ret,'"',$p)+1;
$f=strpos($ret,'"',$p);
$titulo=substr($ret,$p,$f-$p);
$titulo=limpiaTitulo($titulo);
dbug('titulo='.$titulo);

//para las URL:
//"url_smil": {"1": "http://medias.medici.tv/site/smil/20120822_full_en_1965_def_v2_low.mp4.smil", "3": "http://medias.medici.tv/site/smil/20120822_full_en_1965_def_v2_high.mp4.smil", "2": "http://medias.medici.tv/site/smil/20120822_full_en_1965_def_v2_mid.mp4.smil"}
$p2=strpos($ret,'.mp4');
$p1=$p=0;
while($p2>$p1&&$p1>-1){
	$p1=strpos($ret,'{',$p1+1);
	if($p1<$p2)
		$p=$p1;
}
$f=strpos($ret,'}',$p);
$URLs=substr($ret,$p,$f-$p);
dbug($URLs);

$videos=substr_count($URLs,'":');
dbug('total videos='.$videos);

$calidades=array(
	3=>'Calidad Alta',
	2=>'Calidad Media',
	1=>'Calidad Baja'
);

for($i=$videos;$i>0;$i--){
	//encontrar la url del archivo smil
	$p=strpos($URLs,'"'.$i.'"')+strlen('"'.$i.'"');
	$p=strpos($URLs,'"',$p)+1;
	$f=strpos($URLs,'"',$p);
	$preURL_RTMP=substr($URLs,$p,$f-$p);

	//cambiar de rtmp a http
	$preURL_HTTP=substr($preURL_RTMP,0,-1)."0";

	
	$URL=$preURL_HTTP;
	$tipo='http';
	/*
	//ESTA VALIDACIÓN ES MUY LENTA. la línea de arriba puede dar fallos si resultara ser rtmp, pero es un riesgo que se puede correr por ahora
	if(url_exists_full($preURL_HTTP)){
		$URL=$preURL_HTTP;
		$tipo='http';
	}else{
		//abrir y tratar el archivo smil
		$URL=CargaArchivoFopen($preURL_RTMP);
		$tipo='rtmp';
	}
	*/
	dbug($URL);

	if($tipo=='http')
		array_push($obtenido['enlaces'],array(
			'url'     => $URL,
			'tipo'    => $tipo,
			'url_txt' => $calidades[$i]
		));
	else
		array_push($obtenido['enlaces'],array(
			'titulo' => $calidades[$i],
			'url'    => $URL,
			'tipo'   => $tipo
		));
}

$obtenido['titulo']=$titulo;
$obtenido['imagen']=$imagen;

finalCadena($obtenido);
}

function CargaArchivoFopen($url){
	$g=fopen($url,"rb");
	$t="";
	while(!feof($g))
		$t.=fgets($g,1024);
	fclose($g);
	dbug('Archivo cargado: '.$url);
	return $t;
}
?>