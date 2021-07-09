<?php

class ContaBancaria
{
	private $banco;
	private $nomeTitular;
	private $numeroAgencia;
	private $numeroConta;
	private $saldo;

	public function_construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
	{
		this->banco = $banco;
		this->nomeTitular = $nomeTitular;
		this->numeroAgencia = $numeroAgencia;
		this->numeroConta = $numeroConta;
		this->saldo = $saldo;
	}

	public function obterSaldo()
	{
		return 'Seu saldo atual é: R$ ' . $this->saldo;
	}

	public function depositar($valor)
	{
		$this->saldo += $valor; //Mais igual ao valor do paramentro;
		return 'Depósito de R$ ' . $valor . ' realizado!';
	}

		public function sacar($valor)
	{
		$this->saldo -= $valor; //Menos igual ao valor do parametro;
		return 'Saque de R$ ' . $valor . ' realizado!';
	}

}

$conta = new ContaBancaria(
	'Banco do Brasil', // banco
	'Gustavo Fraga', // nomeTitular
	'8244' // numeroAgencia
	'57354-10' // numeroConta
	'0' // saldo
);

$conta2 = new ContaBancaria(
	'Caixa Economica', // banco
	'Joana Silva', // nomeTitular
	'1234' // numeroAgencia
	'453543-10' // numeroConta
	'200.00' // saldo
);




/*
echo $conta->obterSaldo(); //0

echo PHP_EOL;

echo $conta ->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo(); //300

echo PHP_EOL;

echo $conta->$sacar(150.00);

echo PHP_EOL;

echo $conta->obterSaldo(); // 150

*/
