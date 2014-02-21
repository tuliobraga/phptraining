<?php
namespace Pedidos\Model;

/**
 * Description of Endereco
 *
 * @author tulio
 */
class Endereco {

    /**
     *
     * @var string
     */
    private $id;

    /**
     *
     * @var string
     */
    private $cep;

    /**
     *
     * @var string
     */
    private $cidade;

    /**
     *
     * @var string
     */
    private $rua;

    /**
     *
     * @var string
     */
    private $numero;

    /**
     *
     * @var string
     */
    private $complemento;

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
    public function getCep() {
        return $this->cep;
    }

    /**
     * 
     * @param string $cep
     */
    public function setCep($cep) {
        $this->cep = $cep;
    }

    /**
     * 
     * @return string
     */
    public function getCidade() {
        return $this->cidade;
    }

    /**
     * 
     * @param string $cidade
     */
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    /**
     * 
     * @return string
     */
    public function getRua() {
        return $this->rua;
    }

    /**
     * 
     * @param string $rua
     */
    public function setRua($rua) {
        $this->rua = $rua;
    }

    /**
     * 
     * @return string
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * 
     * @param string $numero
     */
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    /**
     * 
     * @return string
     */
    public function getComplemento() {
        return $this->complemento;
    }

    /**
     * 
     * @param string $complemento
     */
    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

}