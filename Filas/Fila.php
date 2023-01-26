<?php

// Fila

/**
 * Na fila, o primeiro a entrar é o primeiro a sair
 */

class Fila
{

    /**
     * Criando as variaveis e colocando valores
     * iniciais a elas dentro do construtor
     */

    private array $fila;
    private int $tamanho;

    public function __construct()
    {
        $this->fila = [];
        $this->tamanho = 0;
    }

    public function addFinal(string $nome): void
    {
        $this->fila[] = $nome;
        $this->tamanho++;
    }

    /**
     * Função pra mostrar as pessoas que estão
     * na fila
     */

    public function mostarPessoasNaFila(): void 
    {
        foreach($this->fila as $cliente) 
        {
            print_r("Nome do Cliente: {$cliente}. \n");
        }
    }

    /**
     * Função para retornar a contagem do tamanho
     * da fila
     */

    public function countClientes(): int
    {
        return $this->tamanho;
    }

    /**
     * Função pra remover o item do inicio
     * da fila
     */

    public function removerDoInicio(): void
    {
        array_shift($this->fila);
        $this->tamanho--;
    }
}

// Instanciando a classe Fila

$filaDoBanco = new Fila();

// Adicionando itens a fila (nome de pessoas)

$filaDoBanco->addFinal("João Ribeiro");
$filaDoBanco->addFinal("Marcus Vinicius");
$filaDoBanco->addFinal("Ricardo dos Santos");
$filaDoBanco->addFinal("Junior Reis");
$filaDoBanco->mostarPessoasNaFila();

// Mostra a quantidade de clientes

print_r("\n\n");
print_r("Quantidade de clientes na fila: = {$filaDoBanco->countClientes()}");
print_r("\n\n");

/**
 * Chama as funções de remoção do primeiro item,
 * mostra quem está na fila e depois mostra a 
 * quantidade de pessoas que estão na fila
 */

$filaDoBanco->removerDoInicio();
$filaDoBanco->mostarPessoasNaFila();

print_r("\n\n Quantidade de clientes na fila: {$filaDoBanco->countClientes()}");