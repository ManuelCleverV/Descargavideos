<?php
//$max=cantidad de entradas del changelog a visualizar
function cambios($max=-1){
//tipo="simple" o "todos"



//actualizar las FAQ
//TV3 MEDIO REESCRITA. COMPROBAR CÓDIGO EXTRA

//creo que ya esta hecho bien, pero por si acaso dejo la anotación como "tengo que probarlo" (por ejemplo, con soundcloud o antena 3, que tiene multivideo, y rtve, de uno solo)
//ACTUALIZAR GESTOR A NUEVA WEB
//si resultados=1, nombre=nombre principal
//si son varios, el nombre será el titulo/nombre del enlace (solo estará uno de los dos presentes)



$todos[]=array(
"23-Marzo-2014",
array(
    'fix:Univisión actualizado para soportar los nuevos vídeos.'
    )
);

$todos[]=array(
"18-Marzo-2014",
array(
    'add:CRTVG. Agregada url m3u8.',
    'fix:Mitele. Algunos enlaces fallaban con el método nuevo.',
    'fix:Mitele. Algunos vídeos no tenían imagen.',
    'fix:Algunos vídeos de ATresPlayer con subtitulos con la opción de descargarlos arreglada (bookmarklet).'
    )
);

$todos[]=array(
"6-Marzo-2014",
array(
	'fix:RTPA Actualizado.',
	'fix:Mitele handler simula ser la url de un mp4 para evitar algún posible problema en la dirección.'
	)
);

$todos[]=array(
"5-Marzo-2014",
array(
	'add:Los vídeos de ATresPlayer con subtítulos tienen un enlace para descargarlos junto al resultado. Incluído también en el bookmarklet para ATresPlayer.'
	)
);

$todos[]=array(
"3-Marzo-2014",
array(
	'fix:Ahora los vídeos de youtube se descargan con el mismo nombre de archivo que el título.'
	)
);

$todos[]=array(
"2-Marzo-2014",
array(
	'fix:TV3 Actualizado.'
	)
);

$todos[]=array(
"1-Marzo-2014",
array(
	'fix:Ampliado el soporte para vídeos de YouTube.',
	'fix:Información de errores con YouTube más concretos.',
	'fix:Mejora del estilo de la web para pantallas pequeñas.'
	)
);

$todos[]=array(
"28-Febrero-2014",
array(
	'add:ideal.es a petición de un mensaje por el formulario contacta.'
	)
);

$todos[]=array(
"27-Febrero-2014",
array(
	'fix:AragonTV enlace rtmp incorrecto en vídeos individuales.'
	)
);

$todos[]=array(
"24-Febrero-2014",
array(
	'fix:Arreglado fallo de seguridad XSS.',
	'fix:Código interno reestructurado.',
	'fix:Velocidad de Mitele rtmp.',
	'fix:Algunos vídeos de Mitele no funcionaban.'
	)
);

$todos[]=array(
"23-Febrero-2014",
array(
	'add:tvmelilla.es a petición de un usuario mediante contacta.',
	'add:tune.pk a petición de un usuario mediante contacta.'
	)
);

$todos[]=array(
"22-Febrero-2014",
array(
	'fix:Reajuste en Univision para los últimos cambios que han hecho.',
	'fix:AragonTV, enlaces rtmp incorrectos arreglados.',
	'fix:CanalExtremadura actualizado por cambios.'
	)
);

$todos[]=array(
"21-Febrero-2014",
array(
	'add:youtube.com',
	'fix:crtvg.es Ahora es compatible con RTMP-Downloader.'
	)
);

$todos[]=array(
"19-Febrero-2014",
array(
	'fix:Los vídeos borrados de RTVE dan error indicando que están borrados en lugar de mostrar un resultado incompleto.'
	)
);

$todos[]=array(
"18-Febrero-2014",
array(
	'add:Soporte para los vídeos de Mitele que usan RTMP. <a href="http://descargavid.blogspot.com.es/2014/02/rtmp-downloader-v02-mitele.html">Más información aquí</a>.',
	'fix:Aumento de velocidad de la página gracias a gzip.',
	'fix:Cambios menores.'
	)
);

$todos[]=array(
"4-Febrero-2014",
array(
	'add:toons.tv.',
	'fix:Vulnerabilidad XSS en el reproductor.'
	)
);

$todos[]=array(
"3-Febrero-2014",
array(
	'add:Telefe.com.'
	)
);

$todos[]=array(
"31-Enero-2014",
array(
	'fix:Telecinco y cuatro no mostraban el enlace del vídeo.',
	'fix:Hogarutil.com actualizado.'
	)
);

$todos[]=array(
"30-Enero-2014",
array(
	'fix:Múltiples arreglos para IE8+.'
	)
);

$todos[]=array(
"29-Enero-2014",
array(
	'fix:Mitele vuelve a funcionar tras la última actualización.',
	'fix:El bookmarklet para ATresPlayer funciona en IE8+',
	'fix:ATresPlayer funciona en IE8+ desde la web'
	)
);

$todos[]=array(
"26-Enero-2014",
array(
	'add:Agregado soporte para la web netd.com por petición a través de contacta.'
	)
);

$todos[]=array(
"20-Enero-2014",
array(
	'fix:Rectificado el script para cambiar el nombre para RTMP-Downloader para que funcione en chrome.',
	'fix:Se muestan imágenes en resultados de MTV que antes no tenían.'
	)
);

$todos[]=array(
"18-Enero-2014",
array(
	'add:Soporte para el programa RTMP-Downloader. <a href="http://descargavid.blogspot.com.es/2014/01/rtmp-downloader-v01.html">Más información aquí</a>.',
	'add:Se puede indicar el nombre de los archivos para RTMP-Downloader desde Descargavideos',
	'fix:Los botones de descarga son completamente clicables'
	)
);

$todos[]=array(
"16-Enero-2014",
array(
	'add:Reproductor en ATresPlayer',
	'fix:Títulos en ATresPlayer',
	'fix:Aviso de error para los vídeos de ATresPlayer que requieren del usuario con la sesión iniciada.'
	)
);

$todos[]=array(
"14-Enero-2014",
array(
	'fix:aragontv actualizado, http deja de funcionar y pasa a rtmp'
	)
);

$todos[]=array(
"12-Enero-2014",
array(
	'fix:Imágenes y títulos de telecinco por iframe.',
	'fix:Los botones de descarga son clicables en más espacio, no solo el texto.' 
	)
);

$todos[]=array(
"7-Enero-2014",
array(
	'add:adnstream.com.',
	'fix:Canal Historia actualizado.',
	'fix:Canal Rias Baixas actualizado.',
	'fix:Canal Sur ahora permite más vídeos y "a la carta" actualizado.',
	'fix:Cope ahora soporta vídeos.',
	'fix:Títulos en 7rm.',
	'fix:Títulos e imágenes en Cadena SER.'
	)
);

$todos[]=array(
"5-Enero-2014",
array(
	'add:Telemadrid.es.',
	'fix:Títulos en Univisión.'
	)
);

$todos[]=array(
"4-Enero-2014",
array(
	'add:Versión web movil de Descargavideos.',
	'fix:EITB.tv formato enlaces rtmp modificado.'
	)
);

$todos[]=array(
"4-Diciembre-2013",
array(
	'add:Soporte para ATresPlayer desde Descargavideos sin necesidad de bookmarklet.'
	)
);

$todos[]=array(
"30-Noviembre-2013",
array(
	'fix:Título en los vídeos de Aragón Televisión del tipo alacarta.aragontelevision.es/ajax/ajax.php?id=.',
	'fix:Compatibilidad con IE8 mejorada.'
	)
);

$todos[]=array(
"25-Noviembre-2013",
array(
	'del:Gamespot. Ha cambiado el funcionamiento.'
	)
);

$todos[]=array(
"17-Noviembre-2013",
array(
	'del:Grooveshark. Ha cambiado el funcionamiento.',
	'fix:Intentar resolver un enlace de ATresPlayer redirige a <a href="http://descargavid.blogspot.com.es/2013/11/segunda-solucion-para-atresplayer.html">esta entrada del blog</a>.'
	)
);

$todos[]=array(
"24-Octubre-2013",
array(
	'fix:Univisión. Soporte para los vídeos en Univision.mobi.',
	'fix:Univisión. Los vídeos bloqueados indican el fallo correspondiente.'
	)
);

$todos[]=array(
"13-Octubre-2013",
array(
	'add:Soporte para ATresPlayer. <a href="http://descargavid.blogspot.com.es/2013/10/m3u8-downloader-v02-atresplayer.html">Más información aquí</a>.'
	)
);

$todos[]=array(
"25-Septiembre-2013",
array(
	'fix:Algunos vídeos de Telecinco y Cuatro vuelven a funcionar.'
	)
);

$todos[]=array(
"23-Septiembre-2013",
array(
	'fix:Cambio del fondo vuelve a funcionar.'
	)
);

$todos[]=array(
"21-Septiembre-2013",
array(
	'add:Nuevo dominio. Descargavideos.tk se translada a Descargavideos.TV',
	'fix:Cambios en los plugins sociales para apuntar al nuevo dominio, nueva página de facebook y correciones en css.'
	)
);

$todos[]=array(
"18-Septiembre-2013",
array(
	'fix:Los vídeos borrados en RTVE dejan de dar fallo. En su lugar, ahora se informa de la imposibilidad de acceder a ellos.',
	'fix:Las canciones encontradas dejan de amontonarse por detrás de la página.'
	)
);

$todos[]=array(
"13-Septiembre-2013",
array(
	'fix:Fallo en Televisa (string por int). Mismo fallo que en eitb.tv.'
	)
);

$todos[]=array(
"7-Septiembre-2013",
array(
	'fix:Fallo en eitb.tv (string por int).'
	)
);

$todos[]=array(
"3-Septiembre-2013",
array(
	'fix:Canalsur vuelve a funcionar.'
	)
);

$todos[]=array(
"2-Septiembre-2013",
array(
	'add:Botón para avisar de un fallo con rapidez desde la misma página.',
	'fix:F1 de antena3 ahora da el listado completo.',
	'fix:Fallo en algunas URLs de RTVE.',
	'fix:Mitele, Telecinco, cuatro, etc. Solucionado problema de referer.',
	'fix:problema con la redirección a www.'
	)
);

$todos[]=array(
"31-Agosto-2013",
array(
	'add:Soporte para Eitb. <a href="http://descargavid.blogspot.com.es/2013/08/agregado-soporte-para-eitb.html">Más información aquí</a>.',
	'add:M3U8-Downloader'
	)
);

$todos[]=array(
"29-Agosto-2013",
array(
	'fix:Funcionamiento general cambiado: Servidores secundarios quitados.'
	)
);

$todos[]=array(
"26-Agosto-2013",
array(
	'fix:Subdominio para F1 de Antena3 actualizado (F1 vuelve a funcionar).'
	)
);

$todos[]=array(
"23-Agosto-2013",
array(
	'fix:Goear vuelve a funcionar (canciones individuales, listas y canciones de usuario).',
	'fix:Goear vuelve a funcionar (búsqueda de canciones).',
	'fix:Fallos menores.'
	)
);

$todos[]=array(
"22-Agosto-2013",
array(
	'add:Soporte para Televisa y Esmas. <a href="http://descargavid.blogspot.com.es/2013/08/brightcove.html">Más información aquí</a>.',
	'fix:Problemas con algunos vídeos de TV3',
	'fix:En el formulario contacta se solicita adjuntar la URL que provoca el fallo que se quiera informar',
	'fix:Fallos menores'
	)
);

$todos[]=array(
"16-Agosto-2013",
array(
	'fix:Fallos en mitele, cuatro, telecinco y mitelekids.'
	)
);

$todos[]=array(
"6-Agosto-2013",
array(
	'fix:RTVV reescrita.',
	'fix:Optimización en todos los scripts para que funcionen más rápido.'
	)
);

$todos[]=array(
"29-Julio-2013",
array(
	'fix:En caso de que el proxy de MTV de fallo se reseteará.'
	)
);

$todos[]=array(
"25-Julio-2013",
array(
	'add:Soporte para mitelekids.es.'
	)
);

$todos[]=array(
"23-Julio-2013",
array(
	'add:Soporte para cadenaser.com (en pruebas).',
	'add:Soporte para cope.es.',
	'add:Soporte para archivos de audio en Intereconomía.',
	'fix:Problema con algunos vídeos de Intereconomía.',
	'fix:En caso de que el resultado carezca de imagen se mostrará una por defecto.',
	'fix:Arreglos en el texto de los resultados con problemas de codificación.',
	'fix:Cuando se usa el bookmarklet, la URL buscada se escribe en el formulario de búsqueda principal.',
	'fix:Arreglos menores.'
	)
);

$todos[]=array(
"22-Julio-2013",
array(
	'fix:Menor peso de imágenes en la web.',
	'del:Control de servidores secundarios aislado de la página principal a un javascript.'
	)
);

$todos[]=array(
"12-Julio-2013",
array(
	'fix:Control de servidores secundarios aislado de la página principal a un javascript.'
	)
);

$todos[]=array(
"8-Julio-2013",
array(
	'add:Control de servidores secundarios encargados de averiguar los enlaces. Ahora en caso de que estén caidos no serán usados.'
	)
);

$todos[]=array(
"23-Junio-2013",
array(
	'add:Previsualización de los estilos sin activarlos préviamente y desplegable para elegirlos en la página principal.'
	)
);

$todos[]=array(
"20-Junio-2013",
array(
	'fix:Arreglos en TV3 para soportar vídeos que antes fallaban.'
	)
);

$todos[]=array(
"16-Junio-2013",
array(
	'fix:Actualizando el estilo web: 100%.'
	)
);

$todos[]=array(
"30-Mayo-2013",
array(
	'add:Reproductor (Beta).',
	'fix:Antena3 ya no tiene Geobloqueo.',
	'fix:Arreglos menores.'
	)
);

$todos[]=array(
"21-Mayo-2013",
array(
	'fix:Imagen y título en audios de RTVE.'
	)
);

$todos[]=array(
"16-Mayo-2013",
array(
	'fix:Cuatro, Telecinco y Divinity funcionan ahora del mismo modo modo que mitele.',
	'fix:Pequeño reajuste para evitar fallos aleatorios en Mitele, Cuatro, Telecinco y Divinity.',
	'fix:Actualizadas las instrucciones para descargar los vídeos en los resultados.'
	)
);

$todos[]=array(
"11-Mayo-2013",
array(
	'add:Fondo seleccionable entre varios de un listado. <a href="http://descargavid.blogspot.com/2013/05/fondo-elegible-de-un-listado.html">Más información aquí</a>'
	)
);

$todos[]=array(
"9-Mayo-2013",
array(
	'add:Soporte para Grooveshark. <a href="http://descargavid.blogspot.com.es/2013/05/agregado-soporte-para-grooveshark.html">Más información aquí</a>'
	)
);

$todos[]=array(
"6-Mayo-2013",
array(
	'add:Soporte para Vimeo.com. <a href="http://descargavid.blogspot.com.es/2013/05/agregado-soporte-para-vimeo.html">Más información aquí</a>'
	)
);

$todos[]=array(
"30-Abril-2013",
array(
	'fix:Actualizando el estilo web: 90%.',
	'add:Versión movil funcional'
	)
);

$todos[]=array(
"26-Abril-2013",
array(
	'fix:Fallo leve en todos los canales con algunos vídeos y enlaces.'
	)
);

$todos[]=array(
"23-Abril-2013",
array(
	'fix:Actualizando el estilo web: 33%.'
)
);

$todos[]=array(
"1-Abril-2013",
array(
	'fix:MTV.',
	'fix:Letrero RTMP en los resultados.',
	'fix:Buscador de MP3 informa cuando no se encuentran resultados.'
	)
);

$todos[]=array(
"30-Marzo-2013",
array(
	'fix:Soundcloud vuelve a soportar listas de reproducción.',
	'fix:Fallo en el buscador de canciones.',
	'fix:Mejor funcionamiento del reproductor del buscador de canciones.'
	)
);

$todos[]=array(
"27-Marzo-2013",
array(
	'fix:Antena 3.'
	)
);

$todos[]=array(
"20-Marzo-2013",
array(
	'fix:Mitele (bloqueo).'
	)
);

$todos[]=array(
"16-Marzo-2013",
array(
	'fix:Actualización de SoundCloud (1/2).'
	)
);

$todos[]=array(
"10-Marzo-2013",
array(
	'fix:Corregido fallo con Gamespot.'
	)
);

$todos[]=array(
"1-Marzo-2013",
array(
	'add:Intereconomia.com a petición de un usuario: <a href="http://descargavid.blogspot.com.es/2013/01/mega-actualizacion.html?showComment=1362172509385#c562993595352448264">Comentario</a>.'
	)
);

$todos[]=array(
"25-Febrero-2013",
array(
	'add:Buscador de canciones usando diversos motores de búsqueda simultaneamente. En fase Beta.'
	)
);

$todos[]=array(
"10-Febrero-2013",
array(
	'fix:Problema con el script que enlaza mitele.'
	)
);

$todos[]=array(
"9-Febrero-2013",
array(
	'fix:Nuevo sistema de mostrado de enlaces.'
	)
);

$todos[]=array(
"1-Febrero-2013",
array(
	'add:Soporte para búsquedas de vídeos sin conocer el enlace a traves de la web (mediante google).',
	'fix:RTVE en algunos vídeos'
	)
);

$todos[]=array(
"31-Enero-2013",
array(
	'fix:Souncloud rectificado para canciones individuales'
	)
);

$todos[]=array(
"28-Enero-2013",
array(
	'add:Nuevo estilo web',
	'add:Nuevo metodo de obtención de enlaces más rápido'
	)
);

$todos[]=array(
"23-Enero-2013",
array(
	'fix:TV3. variables cruzadas en el script'
	)
);

$todos[]=array(
"20-Enero-2013",
array(
	'fix:Soundcloud en listas'
	)
);

$todos[]=array(
"17-Enero-2013",
array(
	'add:MTV',
	'add:Listas de reproducción de Goear',
	'add:Soporte http para medici',
	'fix:Imagen en los resultados de Veoh',
	'fix:Más Velocidad en Goear',
	'fix:Fallos en RT',
	'fix:Fallos en RTPA',
	'fix:SoundCloud mejorado',
	'fix:Mejorado RTVE',
	'fix:rtvcm actualizado',
	'fix:Muestra todas las canciones de un usuario de Goear',
	'fix:Nuevo sistema de enlaces con nombres más claros',
	'fix:Títulos en CRTVG',
	'fix:readaptado para Antena 3',
	'fix:Títulos en Aragon Televisión',
	'fix:Títulos en Canalsur',
	'fix:Nombre enlaces de Mitele',
	'fix:Fallo menor en RTVV',
	'fix:Resolución indicada en los enlaces de GameSpot',
	'fix:Arreglos menores'
	)
);

$todos[]=array(
"27-Diciembre-2012",
array(
	'fix:Estilo web reescrito'
	)
);

$todos[]=array(
"21-Diciembre-2012",
array(
	'fix:Mitele. Nuevo sistema gracias a <a href="http://descargavid.blogspot.com.es/2012/09/solucion-para-mitele.html?showComment=1355742944937#c7315317042485455375">Javiero</a>: <a href="http://eljaviero.com/descargarvideosdelasexta/">Web</a>'
	)
);

$todos[]=array(
"18-Diciembre-2012",
array(
	'fix:SoundCloud actualizado'
	)
);

$todos[]=array(
"17-Diciembre-2012",
array(
	'fix:Antena3, capítulos completos. Gracias a AlguiennFTV: <a href="http://www.elbarco.tk">www.elbarco.tk</a>'
	)
);

$todos[]=array(
"6-Diciembre-2012",
array(
	'add:TVG'
	)
);

$todos[]=array(
"25-Noviembre-2012",
array(
	'fix:Mitele'
	)
);

$todos[]=array(
"1-Noviembre-2012",
array(
	'fix:TV3'
	)
);

$todos[]=array(
"22-Octubre-2012",
array(
	'add:CanaldeHistoria.es',
	'fix:AragonTV. Más soporte'
	)
);

$todos[]=array(
"3-Octubre-2012",
array(
	'fix:Nuevo servidor',
	'fix:Nuevo modo de funcionamiento',
	'del:3XL servidor'
	)
);

$todos[]=array(
"1-Octubre-2012",
array(
	'fix:Mejoras de rendimiento'
	)
);

$todos[]=array(
"28-Septiembre-2012",
array(
	'fix:RTVE. Soporte ampliado'
	)
);

$todos[]=array(
"26-Septiembre-2012",
array(
	'fix:Mitele. <a href="http://descargavid.blogspot.com.es/2012/09/solucion-para-mitele.html">Más información aquí</a>'
	)
);

$todos[]=array(
"24-Septiembre-2012",
array(
	'add:Gestor de descargas. <a id=enl href="http://descargavid.blogspot.com.es/2012/09/gestor-de-descargas.html">Más información aquí</a>',
	'fix:RTVE actualizado. Pueden surgir algunos fallos temporalmente.</a>'
	)
);

$todos[]=array(
"26-Septiembre-2012",
array(
	'fix:Mitele. <a href="http://descargavid.blogspot.com.es/2012/09/solucion-para-mitele.html">Más información aquí</a>'
	)
);

$todos[]=array(
"17-Septiembre-2012",
array(
	'add:Goear. <a id=enl href="http://descargavid.blogspot.com.es/2012/09/goear-agregado.html">Más información aquí</a>'
	)
);

$todos[]=array(
"15-Septiembre-2012",
array(
	'fix:Rectificaciones de cambios anteriores',
	'fix:Titulos mejorados',
	'fix:Ajustes menores'
	)
);

$todos[]=array(
"14-Septiembre-2012",
array(
	'add:Addon para firefox. <a id=enl href="http://descargavid.blogspot.com.es/2012/09/addon-para-firefox.html">Más información aquí</a>',
	'fix:Soporte completo para Antena3: Vídeos de la web y modo salón',
	'fix:Cambios internos',
	'fix:Nuevo formato urls',
	'fix:Mejor uso del cache',
	'fix:Titulos con caracteres extraños',
	'fix:Ajustes menores',
	'del:Youtube desactivado'
	)
);

$todos[]=array(
"13-Septiembre-2012",
array(
	'fix:Web movil ahora redimensiona correctamente con cualquier tamaño de pantalla',
	'fix:Problemas con el nuevo servidor',
	'del:Descarga experimental desactivada'
	)
);

$todos[]=array(
"11-Septiembre-2012",
array(
	'fix:LaSexta'
	)
);

$todos[]=array(
"8-Septiembre-2012",
array(
	'fix:Nuevo servidor'
	)
);

$todos[]=array(
"4-Septiembre-2012",
array(
	'fix:TV3. Nuevo formato para descargas HTTP',
	'fix:TV3. Títulos'
	)
);

$todos[]=array(
"26-Agosto-2012",
array(
	'add:Medici. Solo RTMP. <a id=enl href="http://descargavid.blogspot.com.es/2012/08/medicitv-agregada.html">Más información aquí</a>',
	'fix:Resultados',
	'fix:Youtube'
	)
);

$todos[]=array(
"25-Agosto-2012",
array(
	'add:Versión móvil. <a id=enl href="http://descargavid.blogspot.com.es/2012/08/ahora-con-version-para-movil.html">Más información aquí</a>'
	)
);

$todos[]=array(
"23-Agosto-2012",
array(
	'add:Sección FAQ',
	'add:Sección Lab',
	'add:Texto de descripción en inicio',
	'add:URLs amigables',
	'add:Sitemap.xml',
	'fix:Mejoras visuales en la web'
	)
);

$todos[]=array(
"21-Agosto-2012",
array(
	'fix:La web solicita al usuario que desactive AdBlock en caso de estar activo. La elección de activarlo o desactivarlo no influirá en la navegación del sitio'
	)
);

$todos[]=array(
"4-Agosto-2012",
array(
	'fix:Reproductor con enlaces RTMPe'
	)
);

$todos[]=array(
"1-Agosto-2012",
array(
	'fix:Reproductor actualizado'
	)
);

$todos[]=array(
"28-Julio-2012",
array(
	'fix:Problema con YouTube'
	)
);

$todos[]=array(
"27-Julio-2012",
array(
	'fix:Rectificada la anterior modificación por un fallo que bloqueaba la obtención de vídeos'
	)
);

$todos[]=array(
"26-Julio-2012",
array(
	'fix:Mitele (cuatro, divinity, mitele y telecinco) readaptadas al nuevo formato de petición del token'
	)
);

$todos[]=array(
"13-Julio-2012",
array(
	'add:V television. <a id=enl href="http://descargavid.blogspot.com.es/2012/07/vtelevision-agregada.html">Más información aquí</a>'
	)
);

$todos[]=array(
"11-Julio-2012",
array(
	'fix:Gamespot'
	)
);

$todos[]=array(
"10-Julio-2012",
array(
	'add:Sistema de descargas por bypass experimental'
	)
);

$todos[]=array(
"8-Julio-2012",
array(
	'fix:títulos en youtube'
	)
);

$todos[]=array(
"7-Julio-2012",
array(
	'add:Youtube. <a id=enl href="http://descargavid.blogspot.com.es/2012/07/youtube-en-pruebas.html">Más información aquí</a>',
	'fix:Mitele actualizado a un pequeño cambio'
	)
);

$todos[]=array(
"3-Julio-2012",
array(
	'fix:Mitele en enlaces RTMPe',
	'fix:Interprete de los enlaces',
	'fix:Mitele actualizado a varios pequeños nuevos cambios'
	)
);

$todos[]=array(
"1-Julio-2012",
array(
	'add:Reproductor online para los resultados'
	)
);

$todos[]=array(
"29-Junio-2012",
array(
	'add:AragonTV extrae todos los vídeos de una página de "alacarta"'
	)
);

$todos[]=array(
"26-Junio-2012",
array(
	'fix:Resultados de F1 de Antena3 con las imágenes'
	)
);

$todos[]=array(
"24-Junio-2012",
array(
	'add:Univision deja de estar en pruebas',
	'add:Canalextremadura deja de estar en pruebas'
	)
);

$todos[]=array(
"13-Junio-2012",
array(
	'add:Univision en pruebas'
	)
);

$todos[]=array(
"13-Junio-2012",
array(
	'add:RT. <a id=enl href="http://descargavid.blogspot.com.es/2012/06/rt-agregado.html">Más información aquí</a>',
	'fix:RTVE'
	)
);

$todos[]=array(
"13-Junio-2012",
array(
	'add:RT. <a id=enl href="http://descargavid.blogspot.com.es/2012/06/rt-agregado.html">Más información aquí</a>',
	'fix:RTVE'
	)
);

$todos[]=array(
"12-Junio-2012",
array(
	'fix:La Sexta',
	'fix:RTVV'
	)
);

$todos[]=array(
"9-Junio-2012",
array(
	'fix:Estilo web mejorado',
	'fix:Canalsuralacarta',
	'fix:La Sexta'
	)
);

$todos[]=array(
"7-Junio-2012",
array(
	'fix:Canal Rías Baixas',
	'fix:Canalsuralacarta'
	)
);

$todos[]=array(
"6-Junio-2012",
array(
	'add:Gamespot.com',
	'fix:Titulo del resultado de soundcloud',
	'fix:Nuevo estilo web arreglado'
	)
);

$todos[]=array(
"4-Junio-2012",
array(
	'add:Nuevo estilo web. Ambos están disponibles y se puede saltar entre ambos. <a id=enl href="http://descargavid.blogspot.com.es/2012/06/nuevo-estilo-web.html">Más información aquí</a>'
	)
);

$todos[]=array(
"3-Junio-2012",
array(
	'add:Canalextremadura en pruebas. <a id=enl href="http://descargavid.blogspot.com.es/2012/06/canal-extremadura-agregado.html">Más información aquí</a>',
	'add:RTVCM. Solo RTMP',
	'add:Los resultados rtmp contienen la linea que se necesita introducir para descargarlos con RTMPDump',
	'add:LaSexta deja de estar en pruebas',
	'fix:Antena 3'
	)
);

$todos[]=array(
"2-Junio-2012",
array(
	'fix:Mejorado servicio de LaSexta',
	'fix:Fallo menor en descargas'
	)
);

$todos[]=array(
"30-Mayo-2012",
array(
	'add:Canalextremadura. Aunque está disponible no está en pruebas todavía',
	'fix:TV3',
	'fix:La Sexta'
	)
);

$todos[]=array(
"26-Mayo-2012",
array(
	'fix:Estilo web actualizado',
	'fix:La Sexta'
	)
);

$todos[]=array(
"24-Mayo-2012",
array(
	'add:Soundcloud admite listas de reproducción',
	'fix:Algunas URLs que daban fallo por caracteres "extraños" funcionan'
	)
);

$todos[]=array(
"23-Mayo-2012",
array(
	'add:La Sexta en pruebas. <a id=enl href="http://descargavid.blogspot.com/2012/05/la-sexta-agregada.html">Más información aquí</a>',
	'add:LaSextaNoticias en pruebas. <a id=enl href="http://descargavid.blogspot.com/2012/05/la-sexta-agregada.html">Más información aquí</a>'
	)
);

$todos[]=array(
"16-Mayo-2012",
array(
	'fix:RTVE'
	)
);

$todos[]=array(
"16-Mayo-2012",
array(
	'fix:RTVV',
	'fix:Imagenes en el resultado de RTVE'
	)
);

$todos[]=array(
"15-Mayo-2012",
array(
	'add:Orm.es, 7rm.es y RTPA.es dejan de estar en pruebas'
	)
);

$todos[]=array(
"14-Mayo-2012",
array(
	'add:Veoh.com'
	)
);

$todos[]=array(
"12-Mayo-2012",
array(
	'add:Todos los enlaces obtenidos están acompañados de un título y una imagen. <a id=enl href="http://descargavid.blogspot.com.es/2012/05/miniaturas-y-titulo-en-los-resultados.html">Más información aquí</a>'
	)
);

$todos[]=array(
"10-Mayo-2012",
array(
	'add:324.cat',
	'add:Orm.es en pruebas. <a id=enl href="http://descargavid.blogspot.com.es/2012/05/7-region-de-murcia-y-onda-regional-de.html">Más información aquí</a>',
	'add:7rm.es en pruebas. <a id=enl href="http://descargavid.blogspot.com.es/2012/05/7-region-de-murcia-y-onda-regional-de.html">Más información aquí</a>',
	'add:RTPA.es en pruebas. <a id=enl href="http://descargavid.blogspot.com.es/2012/05/rtpa-radiotelevision-del-principado-de.html">Más información aquí</a>',
	'add:Soporte para formula1 de antena 3',
	'add:TV3, 3XL, Esport3 y Super3 dejan de estar en pruebas',
	'add:TVE.es. Estos vídeos pertenecen a rtve pero tienen un funcionamiento diferente',
	'fix:3alacarta'
	)
);

$todos[]=array(
"8-Mayo-2012",
array(
	'add:Super3.cat',
	'add:Blogs.tv3.cat',
	'fix:TV3 arreglado'
	)
);

$todos[]=array(
"5-Mayo-2012",
array(
	'fix:RTVV'
	)
);

$todos[]=array(
"4-Mayo-2012",
array(
	'add:Contadores en la web',
	'add:Soporte para los vídeos del grupo mitele a traves del enlace de insercion:<br>&lt;iframe src=... &gt;&lt;/iframe&gt;',
	'add:Los enlaces premium tienen su propio mensaje de error y ya no se guarda dicho enlace en el listado de enlaces fallidos para ser solucionados',
	'fix:Mitele'
	)
);

$todos[]=array(
"28-Abril-2012",
array(
	'fix:Mitele'
	)
);

$todos[]=array(
"22-Abril-2012",
array(
	'add:3XL.cat'
	)
);

$todos[]=array(
"20-Abril-2012",
array(
	'fix:TV3.cat'
	)
);

$todos[]=array(
"18-Abril-2012",
array(
	'fix:TV3.cat'
	)
);

$todos[]=array(
"18-Abril-2012",
array(
	'add:Canalsuralacarta. <a id=enl href="http://descargavid.blogspot.com.es/2012/04/canal-sur.html">Más información aquí</a>',
	'fix:Actualizado Antena3. Algunos vídeos han cambiado el formato',
	'fix:Varios cambios estéticos'
	)
);

$todos[]=array(
"16-Abril-2012",
array(
	'add:AragonTV. <a id=enl href="http://descargavid.blogspot.com.es/2012/04/aragontv.html">Más información aquí</a>'
	)
);

$todos[]=array(
"15-Abril-2012",
array(
	'add:TV3.cat en pruebas',
	'add:Esport3.cat en pruebas'
	)
);

$todos[]=array(
"14-Abril-2012",
array(
	'add:RTVE soporta los enlaces de audio del formato "http://www.rtve.es/alacarta/live_audio_PopUp.shtml"',
	'fix:Tras las mejoras del pasado 12 de Abril cometí un error en el servicio de RTVE. Pido disculpas e informo que dicho error se encuentra solucionado'
	)
);

$todos[]=array(
"12-Abril-2012",
array(
	'add:La web cuenta con blog:<br><a id=enl href=http://descargavid.blogspot.com.es/>descargavid.blogspot.com.es</a><br>Si se cae, hay algun fallo o cualquier otro problema, se informará allí',
	'add:Nuevas secciones (contacta y changelog)'
	)
);

$todos[]=array(
"8-Abril-2012",
array(
	'fix:Mayor velocidad para obtener los enlaces de todos los servidores'
	)
);

$todos[]=array(
"2-Abril-2012",
array(
	'fix:El enlace obtenido de RTVE es el de mayor calidad de imagen'
	)
);

$todos[]=array(
"1-Abril-2012",
array(
	'fix:RTVE',
	'fix:Mejoras internas para más velocidad'
	)
);

$todos[]=array(
"22-Marzo-2012",
array(
	'fix:Mitele'
	)
);

$todos[]=array(
"21-Marzo-2012",
array(
	'fix:Audio de RTVE'
	)
);

$todos[]=array(
"18-Marzo-2012",
array(
	'add:Telecinco',
	'add:Divinity',
	'add:Soundcloud'
	)
);

$todos[]=array(
"17-Marzo-2012",
array(
	'add:Estilo web',
	'add:KONY&#9660;2012'
	)
);

$todos[]=array(
"15-Marzo-2012",
array(
	'fix:RTVV'
	)
);

$todos[]=array(
"14-Marzo-2012",
array(
	'add:Nuevo estilo de la web'
	)
);

$todos[]=array(
"11-Marzo-2012",
array(
	'add:Nuevos vídeos de RTVE'
	)
);

if($max==-1)
	$max=sizeof($todos);
elseif($max>sizeof($todos))
	$max=sizeof($todos);
else $max=0;

$res='<div id="changelog">';
for($i=0;$i<$max;$i++){
	$res.='<div class="tit">'.$todos[$i][0].'</div>';
	foreach($todos[$i][1] as $elem){
		$f=strpos($elem,':');
		$tipo=substr($elem,0,$f);
		$mod=substr($elem,$f+1,strlen($elem)-$f-1);
		$res.='<div class="in '.$tipo.'">'.$mod.'</div>';
	}
}
$res.='</div>';
return $res;
}
?>