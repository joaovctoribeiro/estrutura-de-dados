<?php

/**
 * Lista encadeada é uma lista de objetos onde um sempre
 * aponta para o proximo
 * 
 * Para implementar, precisa de duas classes, uma da lista
 * e a outra do nó
 */

class No
{
    private string $nome;
    private ?self $proximo;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->proximo = null;
    }

    /**
     * Get e Set de cada função
     */

    /**
     * @return string
     */

    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */

    public function setNome(string $nome):void 
    {
        $this->nome = $nome;
    }

    /**
     * @return ?self
     */

    public function getProximo(): ?self
    {
        return $this->proximo;
    }

    /**
     * @param ?self $proximo
     */

    public function setProximo(?self $proximo): void
    {
        $this->proximo = $proximo;
    }
}