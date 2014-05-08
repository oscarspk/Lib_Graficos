<?
class ChartsDesign{
	var $numChart=1;
	
	public function ini($fn){
		$script="<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>\n";
		$script.="<script type=\"text/javascript\">\n";
      	$script.="google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});\n";
	    $script.="google.setOnLoadCallback($fn);\n";
		$script.="function $fn(){\n";
		return $script;
	}
	
	public function end($fn){
	    $script="}\n";
		$script.="</script>\n";
		return $script;
	}
	
	//
	public function addPieChar($div, $data, $maxView, $colors, $titulo, $options=""){
		$nameData="pieCharData".$this->numChart;
		$nameDiv="pieChar".$this->numChart;
		$nameOptions="pieChartOptions".$this->numChart;
		$script="var $nameData = google.visualization.arrayToDataTable([
			  ['App', 'Total',{ role: 'style' }]";
		for($i=0;$i<=$maxView;$i++){
			$script.=","."['".$data[$i]['data']." : ".$data[$i]['total']."', ".$data[$i]['total'].", '".$colors[mt_rand(0, 2)]."']";
		}
		$script.="]);";
		
		$script.="var $nameOptions = {";
		$script.= "title: '$titulo'";
		if($options!=""){
			$script.= ", $options";
		}else{
			$script.= ",is3D: true,";
			$script.= "slices: { 0: {offset: 0.2} }";
		}
		$script.="};";
	
		$script.="var $nameDiv = new google.visualization.PieChart(document.getElementById('$div'));";
		$script.="$nameDiv.draw($nameData, $nameOptions);";
		$this->numChart++;
		return $script;
	}
}
?>