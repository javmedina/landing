<!DOCTYPE html>
<html lang="en">
<meta name="theme-color" content="#8efd81">

<style>
@import url('https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Roboto+Slab:wght@300&display=swap'); 

/* Scroll Personalizado */

body::-webkit-scrollbar {
	width: 10px;
}

body::-webkit-scrollbar-thumb {
	background: #ffe845;
}

body{background-color: #3a1c74;margin:0;}

p {text-align: center; font-family:'Roboto Slab', serif;font-size: 1rem; color: #dc91e5;font-weight: 900;}

h1 {text-align: center;font-family: 'Holtwood One SC', serif; font-size: 4rem;color: #ffe845;line-height: 4rem;}
h2 {text-align: center;font-family: 'Holtwood One SC', serif; font-size: 2rem;color: white;}
h3 {text-align: center;font-family: 'Holtwood One SC', serif; font-size: 3rem;color:#8efd81}
h4 {text-align: center; font-family:'Roboto Slab', serif; font-size: 0.8rem; letter-spacing: 0.25rem;color: white;}
h5 {text-align: center;font-family: 'Holtwood One SC', serif; font-size: 1rem;color: white;line-height: 0.5rem;letter-spacing: 0.15rem;}
h6 {text-align: center;font-family: 'Holtwood One SC', serif; font-size: 1rem;color: white;line-height: 0.5rem;letter-spacing: 0.15rem;}

video {  position:fixed;
        min-width: 100%;
        min-height: 100%;
        top:50%;
        left:50%;
        transform: translateX(-50%) translateY(-50%);
        filter: opacity(40%);
        z-index: -1;}

</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png">
    <title>¡Este es un sitio de Resultados! (Trabajo UTN Javier Medina)</title>
    <h1>LIGA <br> UTN GAMES</h1>
    <h6> A continuación los datos de las competencias:<h6>
</head>
<body>

<video muted autoplay loop>
<source src="game.mp4"
 type="video/mp4">
</video>

<?php
$texto='Torneo 2020 :';
$jugadores_activos=11;
$puntos=6098;
$fecha='01/05/2020'

?>

<h2><?php echo $texto; ?> </h2>
<ul>

    <p> Jugadores Activos: <?php echo $jugadores_activos; ?> </p> 
    <p> Puntos: <?php echo $puntos; ?> </p> 
    <p> Fecha de inicio: <?php echo $fecha; ?> </p> 



</ul>
<div>
<?php

$texto2 = 'Torneo 2021 :';
$jugadores_activos2=10;
$puntos2=9000;
$fecha2='12/05/2021'
?>

<h2><?php echo $texto2; ?> </h2>
<ul>

    <p> Jugadores Activos: <?php echo $jugadores_activos2; ?> </p> 
    <p> Puntos: <?php echo $puntos2; ?> </p> 
    <p> Fecha de inicio: <?php echo $fecha2; ?> </p> 



</ul>

</div>

<?php
$monedas = 200;
$jugadores_total = $jugadores_activos + $jugadores_activos2 ;
$puntos_total = $puntos + $puntos2;
$puntos_en_monedas = $puntos_total / $monedas;


?>
<br>
<br>
<h3> CONTEO TOTAL : </h3>


<ul>
<h5>Jugadores Totales Activos: <?php echo $jugadores_total; ?></h5>
<h5>Puntos Totales:  <?php echo $puntos_total; ?></h5>
<h5>Puntos en Monedas: ETH <?php echo round ($puntos_en_monedas); ?></h5>

</ul>

<! constantes >
<br>
<br>
<p>
<?php
define ('CONSTANTE', 'EL PRÓXIMO TORNEO DE GAMEPLAY SERÁ: ');
echo CONSTANTE;
define ('TORNEO', array ('APERTURA 2022 ','CLAUSURA 2022 ','PRECOMPETICIÓN 2023 '));
echo TORNEO [0]; 

?>
</p>
</body>

<footer>
<br>
<br>


<h4> Todos los Derechos Reservados | Trabajo UTN Javier Medina | Prof. Yanel Ricarte</h4>

</footer>
</html>