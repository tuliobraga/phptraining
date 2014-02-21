<?php
namespace Pedidos\Controller;

use \Pedidos\Request;
use \Pedidos\Response;

/**
 * Description of Pedido
 *
 * @author tulio
 */
class Pedido {

    public function salvarPedido(Request $request, Response $response) {
        $dataset = $request->getDataset();
        $pedidoRow = $dataset['pedido'];
        $itemPedidoRows = $dataset['itempedido'];

        $pedido = new \Pedidos\Model\Pedido();
        $pedido->setDataEmissao(new \DateTime());

        foreach ($itensPedidoRows as $itemPedidoRow) {
            $itemPedido = new \Pedidos\Model\ItemPedido();
            $itemPedido->setObservacao($itemPedidoRow['OBSERVACAO']);
            $pedido->addItemPedido($itemPedido);
        }
        
        $entityManager = \Pedidos\Application::getInstance()->getEntityManager();
        $entityManager->persist($pedido);
        $entityManager->flush();
        $message = new \Pedidos\Message();
        $message->setType(\Pedidos\Message::SUCCESS);
        $message->setText('Pedido salvo com sucesso.');
        $response->addMessage($message);
    }

}