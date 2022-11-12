<?php
if (array_key_exists('enviar', $_POST)){
    include('class_lib.php');
    $diam = $_POST['diam'];
    $altu = $_POST['altu'];
    $cil = new Cilindro($diam,$altu);
    $volumen = $cil->calc_volumen();
    $area = $cil->calc_area();

    echo "<br/>  El volumen del cilindro es de ". $volumen . " metros cubicos";
    echo "<br/>  El area del cilindro es de ". $area . " metros cuadrados";
}else{

}
?>