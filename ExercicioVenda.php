<?php

class Venda
{
	private $data;
	private $produto;
	private $quantidade;
	private $valorTotal;
	private $valorUnitario;

	public function_construct($data, $produto, $quantidade, $valorTotal, $valorUnitario)
	{
		this->data = $data;
		this->produto = $produto;
		this->quantidade = $quantidade;
		this->valorTotal = $valorTotal;
		this->valorUnitario = $valorUnitario;
	}

	public function calcularTotalProduto($valorTotalProduto)
	{
		$this->$quantidade * $valorUnitario = $valorTotalProduto;
		return 'Valor total do' . $produto . =' R$ ' . $valor .;
	}

		public function calcularTotal($valorTotal)
	{
		$this->valorTotal += $valorTotalProduto;
		return 'Valor total da compra: ' . $valorTotal .;
	}

		public function obterValor()
	{
		return 'O valor total é : R$ ' . $this->valorTotal;
	}

}

$caixa = new venda(
	'08/07/2021', // data
	'Leite de castanhas', // produto
	'12' // quantidade
	'0' // valorTotal
);





echo $caixa->calcularTotalProduto(); //0

echo PHP_EOL;

echo $caixa ->valorTotal();