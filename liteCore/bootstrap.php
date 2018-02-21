<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 07/01/2017
 * Time: 14:46
 */
require_once('Router.class.php');
$router = new \liteCore\Router(array(
    'index' => 'Home',
    'portfolio' => 'Portfolio',
    'blog' => 'Blog',
));
$router->getRequest();
if ($router->state != 200) {
    http_response_code($router->state);
}
$router->render();
echo $router;