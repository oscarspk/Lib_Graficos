<?
require("class/ChartsDesign.php");
//
$colors=array('#b87333', '#703593', '#76A7FA');
$data=array(
			array("data"=>"iPhone", "total"=>9),
			array("data"=>"Windows", "total"=>10),
			array("data"=>"Android", "total"=>7)
			);
$data2=array(
			array("data"=>"Google", "total"=>600),
			array("data"=>"Apple", "total"=>100)
			);

$charts=new ChartsDesign();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?
echo $charts->ini("addGraficos");
echo $charts->addPieChar("grafico",$data,5,$colors, "Plataformas");
echo $charts->addPieChar("grafico2",$data2,5,$colors, "Ingresos");
echo $charts->end();
?>
</head>

<body>
<div id="grafico"></div>
<div id="grafico2"></div>
</body>
</html>
