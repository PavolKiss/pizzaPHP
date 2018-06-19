<?php
	if (isset($_GET["fourS"]) || isset($_GET["threeS"]) || isset($_GET["fiveS"]) || isset($_GET["sixS"]) || isset($_GET["sevenS"])) {
		
	if (isset($_GET["terms"])) {

		$prices = array(
			'threeS' => 3,
			'fiveS' => 5,
			'sixS' => 6,
			'sevenS' => 7,
			'fourS' => 4
		);

		$sum = array();
		$getkeys = array_keys($_GET);
		foreach($prices as $key => $value){
		 if(in_array($key, $getkeys)) $sum[] = $value;
		}
		echo "<div>Your pizza was ordered!</div><div>Your final price is <b>€</b>";
		echo array_sum($sum);
	}else{
		echo "<div>Please agree with Terms and Conditions</div>";
	}
}else{
		echo "Select some option";
	}

?>