<?php 

$anoNascimento = 1998;

$nomeCompleto = "Rodrigo Grosso de Oliveira Fernandes";

$primeiroNome = "Rodrigo";

$sobreNome = "Grosso";

$nomeTodo = $primeiroNome . " " . $sobreNome;

//Não pode colocar o número no começo da variável. Pode colocar no final.

//O Comentário pode ser em bloco, com /* e fechando com */.

//Não pode user também variável pré-definida, como $this.

if (isset($nomeCompleto)) {

	echo $nomeCompleto;
}

echo "<br>";

echo $nomeTodo;

echo "<br>";

echo $primeiroNome . " " . $sobreNome;

 ?>