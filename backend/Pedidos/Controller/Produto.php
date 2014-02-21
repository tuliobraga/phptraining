<?php
namespace Pedidos\Controller;

use \Pedidos\Request\Request;
use \Pedidos\Request\Response;

class Produto {
	
	public function carregar(Request $request, Response $response) {
            $em = \Pedidos\Application::getInstance()->getEntityManager();
            $produtos = $em->findAll('Produto');
            $dataset = array();
            foreach($produtos as $produto) {
                    $dataset[] = array(
                            'nome' => $produto->getNome(),
                            'preco' => $produto->getPreco()
                    );
            }
            $response->setDataset($dataset);
	}

}