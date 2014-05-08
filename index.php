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
$script=$charts->ini("addGraficos");
$script.=$charts->addPieChar("grafico",$data,5,$colors, "Plataformas");
$script.=$charts->addPieChar("grafico2",$data2,5,$colors, "Ingresos");
$script.=$charts->end();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Graficos</title>
<?
echo $script;
?>
</head>

<body>
<div id="grafico"></div>
<div id="grafico2"></div>
</body>
</html>
