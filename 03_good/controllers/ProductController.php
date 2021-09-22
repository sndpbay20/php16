<?php

namespace app\controllers;

// use app\models\product;
use app\Router;

class ProductController
{
    public function index(Router $router)
    {
        $products = $router->db->getProducts();
        echo '<pre>';
        var_dump($products);
        echo '</pre>';

     $router->renderView('products/index');
    }

    public function create()
    {
        echo "Create page";
    }
    
    public function update()
    {
        echo "Update page";
    }

    public function delete()
    {
        echo "Delete page";
    }
}
   