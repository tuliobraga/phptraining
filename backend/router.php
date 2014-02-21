<?php
$baseurl = '/treinamento/backend';
// Define HTTP URI
$uri = isset($_SERVER['REQUEST_URI']) 
        ? parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH)
        : parse_url('/', PHP_URL_PATH);

$route = str_replace($baseurl, '', $uri);

if(isset($routes[$route])) {
    $callController = function ($routeDescription) {
        $parts = explode('::', $routeDescription);
        $controller = new $parts[0]();

        $request = new \Pedidos\Request\Request();
        $request->setRow($_POST);
        $response = new \Pedidos\Request\Response();
        $controller->$parts[1]($request, $response);
        echo $response; die;
    };

    $callController($routes[$route]);
} else {
    $message = array(
        'message' => array(
            'text'=>"Rota $route inválida!",
            'type'=>'E'
        )
    );

    echo json_encode($message); die;
}