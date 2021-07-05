<?php 


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'Eduardo';
$idade = 8;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
	for($i = 0; $i <= count($categorias); $i++) //começa meu i zero, enquanto ele for menor ou igual a lista de categorias
	{
		if($categorias[$i] == 'infantil')
			echo "O nadador ",$nome," compete na categoria infantil"; //se categorias na posicao zero é igual a infantil, entra e devolve a mensagem
	}
}

else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i <= count($categorias); $i++) 
	{
		if($categorias[$i] == 'adolescente')
			echo "O nadador ",$nome," compete na categoria adolescente"; 
	}
}
else
{
		for($i = 0; $i <= count($categorias); $i++) 
	{
		if($categorias[$i] == 'adulto')
			echo "O nadador ",$nome," compete na categoria adulto"; 
	}
}
