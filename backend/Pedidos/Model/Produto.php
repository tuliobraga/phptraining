<?php
namespace Pedidos\Model;

/**
 * Description of Produto
 *
 * @author tulio
 */
class Produto {

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var float
     */
    private $preco;

    /**
     * 
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param string $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * 
     * @return string
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * 
     * @param string $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * 
     * @return string
     */
    public function getDescricao() {
        return $this->descricao;
    }

    /**
     * 
     * @param string $descricao
     */
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    /**
     * 
     * @return float
     */
    public function getPreco() {
        return $this->preco;
    }

    /**
     * 
     * @param float $preco
     */
    public function setPreco($preco) {
        $this->preco = $preco;
    }

}