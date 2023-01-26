<?php

include 'No.php';

/**
 * O objeto da lista terá três atributos
 * 
 * Primeiro Nó;
 * Ultimo Nó;
 * Quantidade.
 */

class ListaLigada
{
    private ?No $primeiro;
    private ?No $ultimo;
    private int $tamanho;

    public function __construct()
    {
        $this->tamanho = 0;
        $this->ultimo = null;
        $this->primeiro = null;
    }

    /**
     * Métodos de inserção e remoção no inicio, final,
     * por posição e consulta
     */

    public function totalNos(): int
    {
        return $this->tamanho;
    }

    /**
     * Metodos pra mostrar quem esta na lista
     */

    public function mostraQuemTaNaLista(): void 
    {
        $no = $this->primeiro;
        while ($no !== null) {
            print_r("Nome do NÓ = {$no->getNome()} \n");
            $no = $no->getProximo();
        }
    }

    /**
     * Metodo pra adicionar no final
     */

    public function addFinal(string $nomeNo): void
    {
        if($this->tamanho == 0) {
            $this->addInicio($nomeNo);
            return;
        }

        $novoNo = new No($nomeNo);
        $this->ultimo->setProximo($novoNo);
        $this->ultimo = $novoNo;
        $this->tamanho++;
    }

    /**
     * Adiciona por cada posição
     */

    public function addPorPosicao(string $nomeNo, int $index): void
    {
        $novoNo = new No($nomeNo);
        $noAtual = $this->primeiro;
        $proximoNo = $this->primeiro->getProximo();

        for ($i = 1; $i <= $this->tamanho; $i++) {

            if($i == $index) {
                $novoNo->setProximo($proximoNo);
                $noAtual->setProximo($novoNo);
                return;
            }

            $noAtual = $proximoNo;
            $proximoNo = $proximoNo->getProximo();
        }
    }

    /**
     * Adiciona no inicio
     */

    public function addInicio(string $nomeNo): void
    {
        $novoNo = new No($nomeNo);
        $novoNo->setProximo($this->primeiro);

        if($this->tamanho == 0) {
            $this->ultimo = $novoNo;
        }

        $this->primeiro = $novoNo;
        $this->tamanho++;
    }

    /**
     * Remove pela posição
     */

    public function removePorPosicao(int $index): void 
    {
        if($this->tamanho == 0) {
            return;
        }

        if($this->tamanho == 1) {
            $this->removeDoInicio();
        }

        $noAtual = $this->primeiro;
        $proximoNo = $this->primeiro->getProximo();

        for($i = 1; $i <= $this->tamanho; $i++) {

            if($i == $index) {
                $noAtual->setProximo($proximoNo->getProximo());
                $proximoNo->getProximo(null);
                return;
            }
        }

        $noAtual = $proximoNo;
        $proximoNo = $proximoNo->getProximo();
    }

    /**
     * Remove do inicio
     */

    public function removeDoInicio(): void
    {
        if($this->tamanho == 0) {
            return;
        }

        $this->primeiro = $this->primeiro->getProximo();
        $this->tamanho--;
    }
}

$lista = new ListaLigada();

$lista->addInicio("João Ribeiro");
$lista->addFinal("Ricardo dos Santos");
$lista->addInicio("Julia Bianca");
$lista->addPorPosicao("Amanda Menezes", 2);

$lista->mostraQuemTaNaLista();
print_r("\n\n");

$lista->removeDoInicio();
$lista->removePorPosicao(1);
$lista->addFinal('Junior Reis');

$lista->mostraQuemTaNaLista();
print_r("\n\n");