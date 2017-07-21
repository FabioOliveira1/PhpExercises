<?php
	function soma(){
		$p = func_get_args();
		$tot = func_num_args();
		$s = 0;
		for($i = 0; $i < $tot; $i++){
			$s += $p[$i];	
		}

		return $s;
	}

	function mult(){
		$p = func_get_args();
		$tot = func_num_args();
		$s = 1;
		for($i = 0; $i < $tot; $i++){
			$s *= $p[$i];	
		}

		echo "$s<br/>";
	}

	function val($a){
		echo "Recebi a = $a por valor.<br/>";
	}

	function ref(&$a){
		echo "Recebi a = $a por referência.<br/>";
		$a +=1;
	}
?>