<?php
	include_once '../app/conexion.inc.php';
	include_once '../app/redireccionamientos.inc.php';

	$titulo = 'Pagina Principal';


	include_once '../plantillas/header.vistas.inc.php';
	include_once '../plantillas/Navbar.vistas.inc.php';
	
	if(Control_Sesion::sesion_iniciada()){
		
	
	
 ?>
  
    
<div class="container pt-5 hero">
<div class="row align-items-center text-center text-md-left">

<div class="col-lg-4">
<p>Las reclamaciones y actividades asociadas con el movimiento por los derechos de los hombres, han sido criticadas y calificadas de odiosas, violentas y sin importancia por parte de gran parte de la sociedad. Han sido clasificados algunos grupos de derechos de los hombres como parte de una ideología del odio bajo las bases del patriarcado y la supremacía masculina. El movimiento ha sido descrito como misógino, u las desventajas percibidas que algunos hombres sienten, se argumenta que a menudo se debe a pérdida de ventajas y privilegios. La igualdad de género implica, por lo tanto acabar con las discriminaciones basadas en el sexo, otorgando el mismo valor, los mismos derechos, las mismas oportunidades a mujeres y hombres.</p>
</div>
<div class="col-lg-8">
<img src="../assets/images/1x/hhh.jpeg" alt="Image" class="img-fluid">
</div>
</div>
</div>


<div class="site-section">
<div class="container">

<div class="row">
<div class="col-lg-3">
<div class="featured-user mb-5 mb-lg-0">
<h3 class="mb-4">Integrantes</h3>
<ul class="list-unstyled">
<li>
<a href="#" class="d-flex align-items-center">
<img src="../assets/images/person_1.jpeg" alt="Image" class="img-fluid mr-2">
<div class="podcaster">
<span class="d-block">Laura Juliana Caicedo Londoño</span>
</div>
</a>
</li>
<li>
<a href="#" class="d-flex align-items-center">
<img src="../assets/images/person_2.jpeg" alt="Image" class="img-fluid mr-2">
<div class="podcaster">
<span class="d-block">María Camila Rodríguez Vera</span>
</div>
</a>
</li>
<li>
<a href="#" class="d-flex align-items-center">
<img src="../assets/images/person_3.jpeg" alt="Image" class="img-fluid mr-2">
<div class="podcaster">
<span class="d-block">Mariana Agudelo Rendón</span>
</div>
</a>
</li>
<li>
<a href="#" class="d-flex align-items-center">
<img src="../assets/images/person_4.jpeg" alt="Image" class="img-fluid mr-2">
<div class="podcaster">
<span class="d-block">Yulisa Valentina Padilla Correa</span>
</div>
</a>
</li>
</ul>
</div>
</div>

<div class="col-lg-9">


<div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
<div class="image" style="background-image: url('../assets/images/img_l.jpeg');" ></div>
<div class="text">

<h3 class="font-weight-light">Por ti, por mí</h3>
<div class="text-white mb-3"><span class="text-black-opacity-05">
<p>Un día le destrozaron<br>
Un día, marchitaron su ser<br>
Le destrozaron, como alguien que halla un viejo papel sin significación alguna<br>
Y sin cavilar... lo despedaza<br>
Marchitaron su ser, como las rosas que le dio a su madre<br>
Y en cinco días, estaban secas, tristes, <br>
Pero ese maldito, jodido... se marchitó en segundos...<br>
Cuando rompieron su <br>
Cuando le golpearon<br>
Cuando se tragó las lágrimas<br>
Cuando prefirió usar otra prenda para no ser burlado<br>
Cuando en la basta sociedad, se vio creciendo como hombre<br>
Y le gritaron "violador"<br>
"Opresor"<br>
"Maldito"<br>
"Horripilante monstruo"<br>
Hoy, soy un monstruo que<br> 
Llora<br>
Levanta la voz<br>
Por ti<br>
Por mí<br>
Hombre inocente, prejuiciado, doliente.</p>
    </span></div>




</div>
</div>
</div>
  
<div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
<div class="row">
<div class="image col-xs-12 col-sm-7 col-md-8 col-lg-7" style="background-image: url('../assets/images/img_3.jpeg'); width:1000px; height:550px; background-size: 100% 100%;"></div>
<div class="col-xs-6 col-md-4 col-lg-5">

<h3 class="font-weight-light"><a href="single-post.html">Expiración.</a></h3>
<div class="text-white mb-3"><span class="text-black-opacity-05">
<p>Llegué a casa aquella noche<br>
Visualicé a mí amada encima de una bestia que le movía ferozmente<br>
Sentí, punzadas que se repetían<br>
Todavía el viento tenue, me acariciaba el rostro<br>
Ella volteó a verme y una lágrima rodó en su rostro resbalando en su seno desnudo...<br>
Tocando el pecho de su maldito amante<br>
Ella se había parado de allí, con su desnudez a flor de piel<br>
Revelando su figura con bordes gruesos, perversamente estremecedores<br>
Su amante, le siguió y yo no pude articular palabra alguna<br>
Ella estaba emanando un hedor inmundo<br>
Tomó el cuchillo y lo enterró en mi pecho una y otra vez...<br>
Su amante jaló el gatillo del arma y penetró mi cabeza<br>
Mientras yo, le miraba a ella acribillándome, todavía bella de algún modo.<br></p></span>
</div>
</div>
</div>
</div>
    
<div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
<div class="row">
<div class="image col-xs-12 col-sm-7 col-md-8 col-lg-7" style="background-image: url('../assets/images/img_a.jpeg'); width:1000px; height:410px;"></div>
<div class="col-xs-6 col-md-4 col-lg-5">

<h3 class="font-weight-light"><a href="single-post.html">¿Por qué?</a></h3>
<div class="text-white mb-3"><span class="text-black-opacity-05">
<p>¿Por qué hieres, agrietas?<br>
¿Por qué lastimas?<br>
¿Por qué fracturas esas almas?<br>
¿Por qué juzgas, maltratas, injurias?<br>
¿Por qué incriminas en general?<br>
Dueles...<br>
Mi pesadumbre, ahora se dilata<br>
Mi tedio, está acrecentando<br>
Obsérvame, percíbeme, examíname<br>
¿Escuchas los cristales?<br>
Sí, tal vez...<br>
Traigo el aliento tan roto, que cuando deambulo<br>
Suenan cristales.<br></p></span>
</div>
</div>
</div>
</div>


<div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
<div class="row">
<div class="image col-xs-12 col-sm-7 col-md-8 col-lg-7" style="background-image: url('../assets/images/img_4.jpeg'); width:900px; height:650px;background-size: 100% 100%;"></div>
<div class="col-xs-6 col-md-4 col-lg-5">

<h3 class="font-weight-light"><a href="single-post.html">Odio</a></h3>
<div class="text-white mb-3"><span class="text-black-opacity-05">
<p>Odias<br>
Estás decepcionado, maldito mundo cruel <br>
Te han hecho daño,  te han ultrajado<br>
Te han sepultado, quemado<br>
Te minimizaron, te arrugaron <br>
Tú quedaste vagando y sangrando<br>
El mundo sangra <br>
La vida llora<br>
El universo ha caído en pedazos<br>
Y ahora vengas tus penumbras<br>
Ahora hieres<br>
Decepcionas<br>
Ultrajas<br>
Sepultas, quemas, minimizas, arrugas<br>
¡Oh, ya para y ten conmiseración<br>
Descansa, gravita, respira<br>
Siente...<br>
No odies<br>
No rompas<br>
No destruyas<br>
Reposa, reposa, reposa<br></p></span>
</div>
</div>
</div>
</div>
    
<div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
<div class="row">
<div class="image col-xs-12 col-sm-7 col-md-8 col-lg-7" style="background-image: url('../assets/images/img_5.jpeg'); width:900px; height:850px; background-size: 100% 100%;"></div>
<div class="col-xs-6 col-md-4 col-lg-5">

<h3 class="font-weight-light"><a href="single-post.html"></a></h3>
<div class="text-white mb-3"><span class="text-black-opacity-05">
<p>
A ti, hombre cándido...<br>
A ti, que te han querido llamar lobo <br>
A ti, el asno de todos los problemas<br>
Pesadísimo baladí, imperfecto cenutrio...<br>
A ti que rompes, destruyes, abrumas, hieres, asustas...<br>
A ti, hombre quiero recitarte al oído<br>
Decirte el tamaño de tu valor, de tu escandalosa alma<br>
Esa que arrulla, mece y cura otras almas<br>
No te inclines a los pronombres puestos bastamente por sociedades<br>
Alza tu voz, esa bella melodiosa que representa tu humanidad<br>
Tu humanidad, te hace ir desgarrando lágrimas, sollozos, gritos impetrando un entendimiento que te<br> 
libre de los más viles prejuicios<br>
¿Existen lobos feróces? Te preguntas...<br>
Sí, los hay...<br>
¿Existen asnos de todos los problemas?<br>
Clro que los hay...<br>
¿Existen baladíes, imperfectos cenutrios, destructores, abrumadores, hirientes, asustadores?<br>
Por supuesto...<br>
Pero tú, hombre cándido, inocente...<br>
No lo has hecho, no lo has sido<br>
Tu alma esplendorosa, de heridas, de angustias, de dolor<br>
Quebrantada, humillada, prejuiciada<br>
Hace súplicas por un mundo más justo<br>
Y el mundo queda suspendido ante tal demostración de dolor.<br></p></span>
</div>
</div>
</div>
</div>
    
<div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
<div class="row">
<div class="image col-xs-12  col-md-3 col-lg-3" style="background-image: url('../assets/images/img_6.jpeg'); width:800px; height:600px;"></div>

<div class="col-xs-1  col-md-1 col-lg-1"></div>
    
<div class="image col-xs-12  col-md-3 col-lg-3" style="background-image: url('../assets/images/img_7.jpeg'); width:900px; height:600px; "></div>
    
<div class="col-xs-1  col-md-1 col-lg-1"></div>    
    
<div class="image col-xs-12  col-md-3 col-lg-3" style="background-image: url('../assets/images/img_8.jpeg'); width:900px; height:600px; "></div>
</div>
</div>
    
   <footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-lg-4">
<h3>Información</h3>
<p></p>
</div>

<div class="col-lg-4">
<h3>Subscribe</h3>
<p>mpower1414@gmail.com</p>
<form action="#" class="form-subscribe">
<input type="email" class="form-control mb-3" placeholder="Enter Email">
<input type="submit" class="btn btn-primary" value="Subscribe">
</form>
</div>
</div>


</div>
</footer> 

</div>
</div>
</div>





    
  <?php
  include_once '../plantillas/footer.vistas.inc.php';
	}else{
		Redireccion :: Redirigir(RUTA_INICIO);
	}
