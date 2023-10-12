<?php

//CARGA DE LISTA PRODUCTOS
$rutaArchivo = "productos20.csv";

require_once __DIR__ . '/vendor/autoload.php';

$dir = opendir("img");
$arrNombreProductos = array();

while (false !== ($entrada = readdir($dir))) {
    if ($entrada != "." && $entrada != "..") {
        array_push($arrNombreProductos, $entrada);
    }
}

if (isset($_POST['ejecutar'])) {

    $checkbox = $_POST['checkbox'];
    
    if($checkbox == "Cuatro"){
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,297],'orientation' => 'L',]);

            for ($y = 0; $y < count($arrNombreProductos);) {    
                $htmlPrueba = '<div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">';
                    $htmlPrueba .= '<img src="./img/'.$arrNombreProductos[$y].'" style="width: 212mm; height: 148,5mm; margin: 3px;" />';
                    $y++;
                    $htmlPrueba .= '<img src="./img/'.$arrNombreProductos[$y].'" style="width: 212mm; height: 148,5mm; margin: 3px;" />';
                    $y++;
                    $htmlPrueba .= '<img src="./img/'.$arrNombreProductos[$y].'" style="width: 212mm; height: 148,5mm; margin: 3px;" />';
                    $y++;
                    $htmlPrueba .= '<img src="./img/'.$arrNombreProductos[$y].'" style="width: 212mm; height: 148,5mm; margin: 3px;" />';
                    $y++;
                $htmlPrueba .= '</div>';
                $mpdf->AddPage();
                $mpdf->WriteHTML($htmlPrueba);
            }
        
        $mpdf->Output();
    }
    if($checkbox == "Dos"){
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,297]]);

            for ($y = 0; $y < count($arrNombreProductos);) {    
                    $htmlPrueba = '<div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">';
                        $htmlPrueba .= '<img src="./img/'.$arrNombreProductos[$y].'" style="width: 210mm; height: 148,5mm; margin: 0px;" />';
                        $y++;
                        $htmlPrueba .= '<img src="./img/'.$arrNombreProductos[$y].'" style="width: 210mm; height: 148,5mm; margin: 0px;" />';
                        $y++;
                    $htmlPrueba .= '</div>';
                    
                    $mpdf->AddPage();
                    $mpdf->WriteHTML($htmlPrueba);
            }
        
        $mpdf->Output();
    }
    if($checkbox == "Uno"){
        
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210,297], 'orientation' => 'L', ]);
        $mpdf->packTableData = false;
        $mpdf->simpleTables = true;
        for ($i = 0; $i < count($arrNombreProductos); $i++) {
            $UnProducto = "<body style='height:100vh;width:100vw;background-image:url(img/$arrNombreProductos[$i]);background-image-resize: 6;background-repeat:no-repeat;background-position: center;'></body>";
            $mpdf->AddPage();
            $mpdf->WriteHTML($UnProducto);
        }
        $mpdf->Output();
    }
    
    $files = glob('img/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file);
    }
}
if (isset($_POST['reset'])) {
    $files = glob('img/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de CVS a PDF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="container-form">    
            
            <form method="post" action="index.php" class="form-table-main">
                <div class="container-checkbox">
                    <label class="checkOption"><input type="radio" name="checkbox" id="check" value="Cuatro" required>Cuatro productos</label>
                    <label class="checkOption"><input type="radio" name="checkbox" id="check" value="Dos" required>Dos productos</label>
                    <label class="checkOption"><input type="radio" name="checkbox" id="check" value="Uno" required>Un producto</label>
                </div>
                <p>Productos Seleccionados: <span id="contador">0</span></p>
                <input id="dw_bt" type="submit" name="ejecutar" value="Convertir a PDF" class="btn_conversor">
            </form>
            <form method="post" action="index.php" class="form-table-main">
                <input id="dw_bt" type="submit" name="reset" value="Reset" class="btn_conversor">
            </form>
            
        </div>
        <div class="container-main">
            <div class="container-buscador">
                
                <input type="text" id="buscador" class="buscador-productos" placeholder="Buscador..">
                <img class="buscador-lupa" src="./assets/search.svg" >
            </div>
            <div class="container-etiqueta">
                <div id="tabla-tbody" class="etiqueta">
                                <?php
                                    $archivo = fopen($rutaArchivo, "r");
                                    while(($datos = fgetcsv($archivo, 1000, ";")) !== false){
                                                    
                                        echo '<div class="etiqueta-producto" id="producto">';
                                                                        
                                            foreach($datos as $key => $dato){
                                                echo'<p style="cursor: pointer;">'.$dato.'</p>';
                                            }
                                                            
                                        echo '</div>';    
                                                        
                                    }
                                    fclose($archivo);
                                ?>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="dom-to-image.js"></script>
    <script src="index.js"></script>
    </body>
</html>









 
