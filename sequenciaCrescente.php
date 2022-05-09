<?php
	function verificaSequencia($array)
	{
		$i=1;
		$sequencia=1;
		while ($i<sizeof($array) and $sequencia==1)
		{

				if($array[$i]>$array[$i-1])
						$i++;
				else
					$sequencia=0;
		}
		return $sequencia;
	}
	function sequenciaCrescente($array)
	{
		$i=0;
		$arrayCopy = $array;
		$parou=0;
		while ($i<sizeof($array) and $parou==0)
		{
			if(verificaSequencia($arrayCopy)==1)
			{
				$parou = 1;
			}
			else
			{
				$arrayCopy = $array;
				unset($arrayCopy[$i]);
				$i++;
			}
		}
		if($parou==1)
			echo "True\n";
		else
			echo "False\n";
	}
	
	sequenciaCrescente(array(1, 3, 2, 1));
	sequenciaCrescente(array(1, 3, 2));
	sequenciaCrescente(array(1, 2, 1, 2));  
	sequenciaCrescente(array(3, 6, 5, 8, 10, 20, 15));
	sequenciaCrescente(array(1, 1, 2, 3, 4, 4));
	sequenciaCrescente(array(1, 4, 10, 4, 2));
	sequenciaCrescente(array(10, 1, 2, 3, 4, 5));
	sequenciaCrescente(array(1, 1, 1, 2, 3));
	sequenciaCrescente(array(0, -2, 5, 6));
	sequenciaCrescente(array(1, 2, 3, 4, 5, 3, 5, 6));
	sequenciaCrescente(array(40, 50, 60, 10, 20, 30));
	sequenciaCrescente(array(1, 1));
	sequenciaCrescente(array(1, 2, 5, 3, 5));
	sequenciaCrescente(array(1, 2, 5, 5, 5));
	sequenciaCrescente(array(10, 1, 2, 3, 4, 5, 6, 1));
	sequenciaCrescente(array(1, 2, 3, 4, 3, 6));
	sequenciaCrescente(array(1, 2, 3, 4, 99, 5, 6));
	sequenciaCrescente(array(123, -17, -5, 1, 2, 3, 12, 43, 45));
	sequenciaCrescente(array(3, 5, 67, 98, 3));
?>