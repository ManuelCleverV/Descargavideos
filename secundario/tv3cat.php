<?php
function tv3cat(){
global $web,$web_descargada;
$retfull=$web_descargada;
//$retfull=CargaWebCurl($web);

$obtenido=array(
	'enlaces' => array()
);

//http://www.tv3.cat/videos/188877281/Els-ajudants-del-pare-Noel#

//videos/188877281/

//http://www.tv3.cat/pvideo/FLV_bbd_dadesItem.jsp?idint=

if(enString($web,"http://www.tv3.cat/pprogrames/hd/mhdSeccio.jsp")){
	setErrorWebIntera("Los vídeos en HD pueden descargarse desde TV3.");
	return;
}

$id="";
if(enString($retfull,"arrayVideos = [")){
	$p=strpos($retfull,'arrayVideos = [')+15;
	$f=strpos($retfull,',',$p);
	$id=substr($retfull,$p,$f-$p);
	dbug('video de formato admitido en js. id video='.$id);
}
else{
	//la id esta en la url
	$p=strrposF($web,"/videos/");
	$f=strrpos($web,"/",$p);
	if(!$f)
		$f=strlen($web);
	$id=substr($web,$p,$f-$p);
	if(stringContains($id,array(" ","<",">","/","."))||$id==""){
		//la id esta en la url, o deberia, pero no esta como siempre. encontrar.
		$sujeto=$web;
		//$patron = '/\/[0-9^\/]*\//';
		$patron='|/([0-9]+)/|';
		preg_match_all($patron,$sujeto,$coincidencias,PREG_OFFSET_CAPTURE);
		
		dbug_r($coincidencias);
		
		$id=$coincidencias[1][0][0];
	}
	dbug('video de formato admitido? (en url): id video='.$id);
}

$tresalacarta=0;
if(stringContains($id,array(" ","<",">","/","."))||$id==""){
	//3alacarta
	if(enString($web,'3alacarta')){
		dbug('3alacarta');
		
		$p=strpos($web,"/#/")+2;
		$f=strlen($web);
		$id=substr($web,$p,$f-$p);
		$tresalacarta=1;
	}
}




if(stringContains($id,array("<",">","/","."))||$id==""){
	$p=strpos($retfull,"<object");
	$p=strposF($retfull,"id='EVP",$p);
	$f=strpos($retfull,"'",$p);
	$id=substr($retfull,$p,$f-$p);

	$letras=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	$id=str_replace($letras,"",strtoupper($id));
}






if(!is_numeric($id)||$id==""){
	$retfull_no_espacios=str_replace(' ', '', $retfull);
	
	//la id esta en el html
	//VIDEO_ID = 4018251;

	$p=strrposF($retfull_no_espacios,"VIDEO_ID=");
	$f=strpos($retfull_no_espacios,";",$p);
	$id=substr($retfull_no_espacios,$p,$f-$p);

	
	if(!is_numeric($id)||$id==""){
		//la id esta en el html
		//VIDEO_ID = 4018251;

		$p=strrposF($retfull_no_espacios,"videoid=");
		$f=strpos($retfull_no_espacios,"&",$p);
		$id=substr($retfull_no_espacios,$p,$f-$p);
		
		if(!is_numeric($id)||$id==""){
			$p=strrposF($retfull_no_espacios,"videoid=");
			$f=strpos($retfull_no_espacios,";",$p);
			$id=substr($retfull_no_espacios,$p,$f-$p);

			//echo '.'.$retfull_no_espacios.'.';

			if(!is_numeric($id)||$id==""){
				//<span class="id_video">3260890</span>

				$p=strposF($retfull_no_espacios,'<spanclass="id_video">');
				$f=strpos($retfull_no_espacios,"</span>",$p);
				$id=substr($retfull_no_espacios,$p,$f-$p);

				if(!is_numeric($id)||$id==""){
					//<span> </span>
					$sujeto=$retfull_no_espacios;
					//$patron = '/\/[0-9^\/]*\//';
					$patron='|<span>([0-9]+)</span>|';
					preg_match_all($patron,$sujeto,$coincidencias,PREG_OFFSET_CAPTURE);
					dbug_r($coincidencias);

					$id=$coincidencias[1][0][0];


					if(!is_numeric($id)||$id==""){
						//<span class="id">3260890</span>

						$p=strposF($retfull_no_espacios,'<spanclass="id">');
						$f=strpos($retfull_no_espacios,"</span>",$p);
						$id=substr($retfull_no_espacios,$p,$f-$p);

						if(!is_numeric($id)||$id==""){
							//embedEVPLight(2692490,601)

							$p=strposF($retfull_no_espacios,'embedEVPLight(');
							$f=strpos($retfull_no_espacios,",",$p);
							$id=substr($retfull_no_espacios,$p,$f-$p);

							if(!is_numeric($id)||$id=="")
								dbug('fallo');
						}
						else
							dbug('span class="id"');
					}
					else
						dbug('span');
				}
				else
					dbug('span class="id_video"');
			}
			else
				dbug('encontrado con videoid = ');
		}
		else
			dbug('encontrado con VIDEO_ID = ');
	}
	else
		dbug('encontrado con VIDEOID=...&');
	
	
	dbug('video de formato admitido (en html): id video='.$id);
}
else
	dbug('id sacada con <object ... id="EVP..." -> id video='.$id);

if($id==""){
	//id no encontrada:
	//fallo url
	setErrorWebIntera("No se pudo encontrar la ID de ningún vídeo.");
	return;
}
/////////usa de estas dos dice que es un video de windows media player...
//playWMOVideoQualitat
//video-wmp

$modelo=0;
	
if(enString($retfull,"playWMOVideoQualitat")){
	$modelo=3;
	dbug('metodo 1');
	
	if($tresalacarta!=1){
		//titulo
		//<h1>Els ajudants del pare Noel</h1>
		$p=strrpos($retfull,"<h1>")+4;
		$f=strrpos($retfull,"</h1>", $p);
		$titulo=substr($retfull, $p, $f-$p);
		$titulo=limpiaTitulo($titulo);
		dbug('titulo='.$titulo);
	}
	
	//http://www.tv3.cat/su/tvc/tvcConditionalAccess.jsp?ALTERNATE=YES&ID_BACKUP=&ID=188877281&QUALITY=A&FORMAT=WM
	
	$server2='http://www.tv3.cat/su/tvc/tvcConditionalAccess.jsp?ALTERNATE=YES&ID_BACKUP=&ID='.$id.'&QUALITY=A&FORMAT=WM';
	dbug('server2='.$server2);

	$ret=CargaWebCurl($server2);
	dbug('ahora='.$ret);


	///0/2/188877220.wmv
	$p=strrpos($ret,"!")+8;
	$f=strrpos($ret,"?",$p);
	$ret=substr($ret,$p,$f-$p);

	$p=strrpos($ret,"/")+1;
	$f=strlen($ret);
	$ret=substr($ret,$p,$f-$p);


	dbug('final='.$ret);

	$f=strrpos($ret,".",0);
	$ret2=substr($ret,0,$f);
	dbug('solonumeros='.$ret2);


	//http://flv-500.tv3.cat/g/tvcatalunya/0/2/188877220.wmv

	///$ret='http://flv-500.tv3.cat/g/tvcatalunya/'.$ret2[strlen($ret2)-1].'/'.$ret2[strlen($ret2)-2].'/'.$ret;

	// 4/09/2012 metodo rectificado
	$ret='http://podcast.tv3.cat/g/tvcatalunya/'.$ret2[strlen($ret2)-1].'/'.$ret2[strlen($ret2)-2].'/'.$ret;

	dbug('urlFinal='.$ret);
	
	$obtenido['enlaces'][] = array(
		'url'  => $ret,
		'tipo' => "http"
	);
}


if(enString($retfull,"insertaEVP(")||$modelo==0){
	dbug('metodo 2');
	
	if($tresalacarta!=1){
		//titulo
		//<h1>Amb Fidel, passi el que passi</h1>
		$p=strpos($retfull,"<h1>")+4;
		$f=strpos($retfull,"</h1>", $p);
		$titulo=substr($retfull, $p, $f-$p);
		$noimagen="si";
		if(stringContains($titulo, array("<",">"))){
			$p=strpos($titulo,'arrayTitol = ["')+15;
			$f=strpos($titulo,'"',$p);
			$titulo=substr($titulo,$p,$f-$p);
			$noimagen="no";
		}
		$titulo=limpiaTitulo($titulo);
		dbug('titulo='.$titulo);


		//imagen
		//'/multimedia/jpg/3/6/1336300867363.jpg'
		if($noimagen!="no"&&strpos($retfull,"'/multimedia/")>0){
			$p=strpos($retfull,"'/multimedia/")+1;
			$f=strpos($retfull,"'", $p);
			$imagen='http://www.tv3.cat'.substr($retfull, $p, $f-$p);
			dbug('imagen='.$imagen);
		}
	}
	
	//insertaEVP("flashcontent", flashvars, params, size );

	//http://www.tv3.cat/pvideo/FLV_bbd_media.jsp?ID=4048670&QUALITY=H&FORMAT=MP4

	$server2='http://www.tv3.cat/pvideo/FLV_bbd_dadesItem.jsp?idint='.$id;
	dbug('server2='.$server2);
	$ret=CargaWebCurl($server2);
	dbug('obtenido='.$ret);

	if(enString($ret,'<title>')){
		//rectificar titulo
		dbug('rectificar titulo');
		//<h1>Amb Fidel, passi el que passi</h1>
		$p=strpos($ret,"<title>")+7;
		$f=strpos($ret,"</",$p);
		$titulo=substr($ret,$p,$f-$p);
		$titulo=utf8_encode($titulo);
		$titulo=limpiaTitulo($titulo);

		dbug('nuevo titulo='.$titulo);
	}

	//<format>MP4GES</format>
	//PARA VIDEOS LIMITADOS
	//http://www.tv3.cat/pvideo/FLV_bbd_media.jsp?ID=3932951&QUALITY=H&FORMAT=MP4GES


	if(enString($ret,"<imgsrc>")&&!isset($imagen)){
		$p=strrpos($ret,"<imgsrc>")+8;
		$f=strrpos($ret,"</imgsrc>",$p);
		$imagen=substr($ret,$p,$f-$p);
	}

	$formato="MP4";
	if(enString($ret,"<format>")){
		//ENCUENTRA EL PRIMERO EN LA LISTA; NO EL MEJOR
		dbug('formato encontrado');

		$p=strrpos($ret,"<format>")+8;
		$f=strrpos($ret,"</format>",$p);
		$formato=substr($ret,$p,$f-$p);
	}

	$server3='http://www.tv3.cat/pvideo/FLV_bbd_media.jsp?'.'ID='.$id.'&QUALITY=H&FORMAT='.$formato;
	dbug('server3='.$server3);
	$server4='http://www.tv3.cat/pvideo/FLV_bbd_media.jsp?'.'ID='.$id.'&QUALITY=H&PROFILE=APPMOB&FORMAT='.$formato;
	dbug('server3='.$server4);

	$ret=CargaWebCurl($server4);
	dbug('obtenido='.$ret);

	if(enString($ret,"<media")){
		//a sacer el video. si falla la busqueda, entonces hay un error
		
		//<media videoname="La Costa Brava en caiac/Thalassa/13042012/BB_THALASS">
		//rtmp://mp4-500-str.tv3.cat/ondemand/mp4:g/tvcatalunya/2/2/1334322726322.mp4
		//</media>
		$p=strrpos($ret,'<media');
		$ret=entre1y2_a($ret,$p,'>','<');

		dbug('urlFinal='.$ret);
		
		$obtenido['enlaces'][] = array(
			'titulo'  => "Calidad media",
			'url'  => $ret,
			'tipo' => "http"
		);
	}
	
	$ret=CargaWebCurl($server3);
	dbug('obtenido='.$ret);

	if(enString($ret,"<media")){
		//http://www.tv3.cat/feeds/videos/fitxaVideo.jsp?id=4874451&device=and-h&format=xml&version=1
		//a sacer el video. si falla la busqueda, entonces hay un error
		
		//<media videoname="La Costa Brava en caiac/Thalassa/13042012/BB_THALASS">
		//rtmp://mp4-500-str.tv3.cat/ondemand/mp4:g/tvcatalunya/2/2/1334322726322.mp4
		//</media>
		$p=strrpos($ret,'<media');
		$ret=entre1y2_a($ret,$p,'>','<');

		preg_match("@^(.*?/)(mp4:.*?)$@", $ret, $matches);
		dbug_r($matches);
		
		// 4/09/2012 metodo rectificado
		dbug('urlFinal='.$ret);
		
		$obtenido['enlaces'][] = array(
			'titulo'  => "Calidad alta",
			'url'=> $ret,
			'rtmpdump'=> '-r "'.$matches[1].'" -y "'.$matches[2].'" -o "'.generaNombreWindowsValido($titulo).'.mp4"',
			'tipo'    => 'rtmpConcreto',
			'extension'=>'mp4'
		);
	}
	
}

$tipo='http';
if(enString($ret,"rtmp"))
	$tipo='rtmp';

$obtenido['titulo'] = $titulo;
$obtenido['imagen'] = $imagen;


finalCadena($obtenido);
}
?>