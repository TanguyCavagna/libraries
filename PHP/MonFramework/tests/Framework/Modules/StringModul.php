<?php
namespace Tests\Framework\Modules;

class StringModul
{

    public function __construct(\Framework\Router $router)
    {
        $router->get('/demo', function () {
            return 'DEMO';
        }, 'demo');
    }
}