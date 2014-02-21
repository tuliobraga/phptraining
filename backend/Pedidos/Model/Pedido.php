<?php
namespace Pedidos\Model;

/**
 * Description of Pedido
 *
 * @author tulio
 */
class Pedido {

    const NAO_VISUALIZADO = 'N';
    const EM_PRODUCAO = 'P';
    const A_CAMINHO = 'C';
    const ENTREGUE = 'E';

    /**
     * Inicializa dados padrão.
     */
    public function __construct() {
        $this->status = self::NAO_VISUALIZADO;
    }

    /**
     *
     * @var string
     */
    private $id;

    /**
     *
     * @var \DateTime
     */
    private $dataEmissao;

    /**
     *
     * @var \DateTime
     */
    private $dataEntrega;

    /**
     *
     * @var string
     */
    private $status;

    /**
     *
     * @var array
     */
    private $itemPedidos = array();

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
     * @return \DateTime
     */
    public function getDataEmissao() {
        return $this->dataEmissao;
    }

    /**
     * 
     * @param \DateTime $dataEmissao
     */
    public function setDataEmissao($dataEmissao) {
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * 
     * @return \DateTime
     */
    public function getDataEntrega() {
        return $this->dataEntrega;
    }

    /**
     * 
     * @param \DateTime $dataEntrega
     */
    public function setDataEntrega($dataEntrega) {
        $this->dataEntrega = $dataEntrega;
    }

    /**
     * 
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 
     * @param string $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * 
     * @param \Pedidos\Model\ItemPedido $item
     */
    public function addItemPedido(ItemPedido $item) {
        $this->itemPedidos[] = $item;
    }
    
    /**
     * 
     * @return array
     */
    public function getItemPedidos() {
        return $this->itemPedidos;
    }

    /**
     * 
     * @param array $itemPedidos
     */
    public function setItemPedidos(array $itemPedidos) {
        $this->itemPedidos = $itemPedidos;
    }

}