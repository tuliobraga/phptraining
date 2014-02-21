<?php
namespace Pedidos\Controller;

use Pedidos\Request\Request;
use \Pedidos\Request\Response;

/**
 * Description of Pedido
 *
 * @author tulio
 */
class Login {

    public function login(Request $request, Response $response) {
        $dados = $request->getRow();
        
        if($dados['email'] == 'admin' && $dados['senha'] == '123') {
            $message = new \Pedidos\Message();
            $message->setType(\Pedidos\Message::SUCCESS);
            $message->setText('Login efetuado com sucesso.');
        } else {
            $message = new \Pedidos\Message();
            $message->setType(\Pedidos\Message::ERROR);
            $message->setText('Usuário ou senha inválidos.');
        }
        $response->addMessage($message);
    }

}