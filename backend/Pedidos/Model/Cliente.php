<?php
namespace Pedidos\Model;

/**
 * Description of Cliente
 *
 * @author tulio
 */
class Cliente {

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
    private $cpf;

    /**
     * @var string
     */
    private $telefone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $senha;

    /**
     *
     * @var array
     */
    private $endereços;

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
    public function getCpf() {
        return $this->cpf;
    }

    /**
     * 
     * @param string $cpf
     */
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    /**
     * 
     * @return string
     */
    public function getTelefone() {
        return $this->telefone;
    }

    /**
     * 
     * @param string $telefone
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    /**
     * 
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * 
     * @return string
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * 
     * @param string $senha
     */
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    /**
     * 
     * @return array
     */
    public function getEndereços() {
        return $this->endereços;
    }

    /**
     * 
     * @param array $endereços
     */
    public function setEndereços(array $endereços) {
         $this->endereços = $endereços;
    }

}