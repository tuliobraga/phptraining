<?php
namespace Pedidos\Model;
use Pedidos\Model\Produto;

/**
 * Description of ItemPedido.
 *
 * @author tulio
 */
class ItemPedido {

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $observacao;

    /**
     *
     * @var \Pedidos\Model\Produto
     */
    private $produto;

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
    public function getObservacao() {
        return $this->observacao;
    }

    /**
     * 
     * @param string $observacao
     */
    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    /**
     * 
     * @return \Pedidos\Model\Produto
     */
    public function getProduto() {
        return $this->produto;
    }

    /**
     * 
     * @param \Pedidos\Model\Produto $produto
     */
    public function setProduto(Produto $produto) {
        $this->produto = $produto;
    }

}