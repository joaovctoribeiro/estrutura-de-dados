<?php

// Pilha comum

/**
 * Na pilha, o ultimo a entrar é o primeiro a sair
 */

class Pilha
{

    /**
     * Criando as variaveis e colocando valores
     * iniciais a elas dentro do construtor
     */

    private array $pilha;
    private int $tamanho;

    public function __construct()
    {
        $this->pilha = [];
        $this->tamanho = 0;
    }

    /**
     * Função que adiciona o Item na pilha
     * 
     * array_unshift() = Adiciona elementos no inicio do array
     * 
     * $this->tamanho++; = Soma a quantidade de elementos dentro
     * do array
     */

    public function addInicio(string $nomeJogo): void
    {
        array_unshift($this->pilha, $nomeJogo);
        $this->tamanho++;
    }

    /**
     * Função pra mostrar os itens da pilha
     * 
     * Para cada pilha, pilha retorna um item do array
     */

    public function showItens(): void 
    {
        foreach($this->pilha as $item) 
        {
            print_r("Nome do jogo => {$item}. \n");
        }
    }

    /**
     * Função pra retornar a quantidade de itens do array
     */

    public function countItens(): int
    {
        return $this->tamanho;
    }

    /**
     * Função pra remover um elemento do array
     * 
     * array_shift() = Remove o primeiro elemento do array
     * 
     * $this->tamanho--; = Faz a subtração da quantidade
     */

    public function removerIncio(): void
    {
        array_shift($this->pilha);
        $this->tamanho--;
    }
}

// Instanciando a classe Pilha

$pilhaJogos = new Pilha();

//Adicionando os itens (jogos)

$pilhaJogos->addInicio("Minecraft");
$pilhaJogos->addInicio("FIFA 23");
$pilhaJogos->addInicio("Outlast");
$pilhaJogos->addInicio("Terraria");
$pilhaJogos->addInicio("WathcDogs");
$pilhaJogos->showItens();

// Imprimindo a quantidade dos itens

print_r("\n\n");
print_r("Número de jogos = {$pilhaJogos->countItens()}");
print_r("\n\n");

// Testando a remoção dos itens

$pilhaJogos->removerIncio();
$pilhaJogos->showItens();

// Imprimindo a quantidade de itens

print_r("\n\n");
print_r("Número de jogos = {$pilhaJogos->countItens()}");
print_r("\n\n");