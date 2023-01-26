<?php

// Fila Duplamente Terminada (Deque)

/**
 * A diferença dessa estrutura para a Fila é que nela nós podemos inserir 
 * e remover tanto do início como no fim. 
 * Ele acaba sendo uma mistura da Pilha com a Fila.
 */

class Deque 
{

    /**
     * Criando as variaveis e colocando valores
     * iniciais a elas dentro do construtor
     */

    private array $deque;
    private int $tamanho;

    public function __construct()
    {
        $this->tamanho = 0;
        $this->deque = [];
    }

    /**
     * Função pra adicionar o item no final
     */

    public function addNoFinal(string $nome): void 
    {
        $this->deque[] = $nome;
        $this->tamanho++;
    }

    /**
     * Função pra adicionar o item no inicio
     */

    public function addInicio(string $nomeJogo): void
    {
        array_unshift($this->deque, $nomeJogo);
        $this->tamanho++;
    }

    /**
     * Função pra mostrar os itens
     */

    public function showItens(): void 
    {
        foreach($this->deque as $item) 
        {
            print_r("Nome do jogo: {$item}. \n");
        }
    }

    /**
     * Função pra remover o item do inicio
     */

    public function removeInicio(): void 
    {
        array_shift($this->deque);
        $this->tamanho--;
    }

    /**
     * Função pra remover o item do final
     */

    public function removeFinal(): void 
    {
        array_pop($this->deque);
        $this->tamanho--;
    }
}

/**
 * Instanciando a classe Deque
 */

$deque = new Deque();

/**
 * Chamando as funções e adicionando os itens e mos
 */

$deque->addInicio("Rio de Janeiro");
$deque->addInicio("São Paulo");
$deque->addInicio("Rio Grande do Sul");
$deque->addInicio("Bahia");
$deque->showItens();

$deque->removeInicio();
$deque->removeFinal();

print_r("\n\n");

$deque->showItens();