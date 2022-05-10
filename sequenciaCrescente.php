<?php
	
	//função para validar sequência
	function verificaSequencia($array)
	{
		
		$i=1;
		$sequencia=1;
		
		//verifica se o array é uma sequência
		while ($i<sizeof($array) and $sequencia==1)
		{

				if($array[$i]>$array[$i-1])
						$i++;
				else
					$sequencia=0;
		}
		
		//retorna 1 caso o array for sequência e 0 caso não seja
		return $sequencia;
	}
	
	//função principal
	function sequenciaCrescente($array)
	{
		
		$i=0;
		$arrayCopy = $array;
		
		//flag que para o laço se identificar que o array é uma sequência
		$parou=0;
		
		while ($i<=sizeof($array) and $parou==0)
		{
			
			if(verificaSequencia($arrayCopy)==1)
			{
				$parou = 1;
			}
			else //se não for sequência, vai remover posição por posição para identificar se pode ser sequência
			{
				//como só pode remover 1 posição, o array é restaurado ao original
				$arrayCopy = $array;
				
				//removendo posição $i
				unset($arrayCopy[$i]);
				
				//reajustando o índice
				$arrayCopy = array_values($arrayCopy);
				$i++;
			}
		}
		
		//caso a flag $parou seja 1, a sequêcia retorna TRUE, se não, FALSE
		if($parou==1)
		{
			echo "TRUE\n";
			$retorno = TRUE;
		}
		else
		{
			echo "FALSE\n";
			$retorno = FALSE;
		}
		
		return $retorno;
	}
	
	//testes
	sequenciaCrescente(array(1, 3, 2, 1));;
	sequenciaCrescente(array(1, 3, 2)); ;
	sequenciaCrescente(array(1, 2, 1, 2));  ;
	sequenciaCrescente(array(3, 6, 5, 8, 10, 20, 15)); ;
	sequenciaCrescente(array(1, 1, 2, 3, 4, 4)); ;
	sequenciaCrescente(array(1, 4, 10, 4, 2)); ;
	sequenciaCrescente(array(10, 1, 2, 3, 4, 5)); ;
	sequenciaCrescente(array(1, 1, 1, 2, 3)); ;
	sequenciaCrescente(array(0, -2, 5, 6)); ;
	sequenciaCrescente(array(1, 2, 3, 4, 5, 3, 5, 6)); ;
	sequenciaCrescente(array(40, 50, 60, 10, 20, 30)); ;
	sequenciaCrescente(array(1, 1)); ;
	sequenciaCrescente(array(1, 2, 5, 3, 5)); ;
	sequenciaCrescente(array(1, 2, 5, 5, 5)); ;
	sequenciaCrescente(array(10, 1, 2, 3, 4, 5, 6, 1));;
	sequenciaCrescente(array(1, 2, 3, 4, 3, 6));;
	sequenciaCrescente(array(1, 2, 3, 4, 99, 5, 6));;
	sequenciaCrescente(array(123, -17, -5, 1, 2, 3, 12, 43, 45));;
	sequenciaCrescente(array(3, 5, 67, 98, 3));;
?>