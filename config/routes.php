<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);
//Router::connect('/users/*',['controller'=>'Posts','action'=>'index']);
Router::scope('/posts',function (RouteBuilder $routes){
    $routes->connect('/',['controller'=>'Posts']);

    $routes->connect('/:id',
        ['controller'=>'Posts','action'=>'view'],
        ['id'=>'\d+','pass'=>['id']]
    );

    $routes->connect('/create',
        ['controller'=>'Posts','action'=>'create']
    );

    $routes->connect('/hello',
        ['controller'=>'Posts','action'=>'hello']
    );

    $routes->connect('/edit/:id',
        ['controller'=>'Posts','action'=>'edit'],
        ['id'=>'\d+','pass'=>['id']]
    );
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Posts', 'action' => 'index', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
