<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$i = 0;

if(empty($nome))
{
	echo 'O nome não pode ser vazio';
	return;
}

if(strlen($nome) < 3)
{
	echo 'O nome deve conter mais de 3 caracteres';
	return;
}

if(strlen($nome) > 40)
{
	echo 'O nome é muito extenso';
	return;
}

if(!is_numeric($idade))
{
	echo 'Informe um número válido para idade';
	return;
}
// O ponto de exclamacao equivale ao operador NOT(negação)

// O nome inserido pelo $_POST faz o link com o nome definido no input do formulário html e
// recupera e trata os dados inseridos pelo usuário.

// Testando o GET
// $nome = $_GET['nome'];
// $idade = $_GET['idade'];

// var_dump($nome);
// var_dump($idade);
// Mostra as características das variáveis.
// return 0;

if($idade >= 6 && $idade <= 12)
{
	for($i = 0; $i <= count($categorias)-1; $i++)
	// Obs: o <= deve que ser substituído por = ou o limitador do for deve ser acrescido de -1
	// para que o laço não tente tratar uma posição que não existe no array.
	{
		if ($categorias[$i] == 'infantil')
			echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
	}
}
else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i <= count($categorias)-1; $i++)
	{
		if ($categorias[$i] == 'adolescente')
			echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
	}
}
else
{
	for($i = 0; $i <= count($categorias)-1; $i++)
	{
		if ($categorias[$i] == 'adulto')
			echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
	}
}
?>

