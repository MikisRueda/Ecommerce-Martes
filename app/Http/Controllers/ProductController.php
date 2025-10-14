<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => [
            'id' => 1,
            'name' => 'Airpods pro 2',
            'price' => 120,
            'image' => 'https://www.apple.com/v/airpods-pro/n/images/meta/og__eui2mpgzwyaa_overview.png',
            'category' => 'accesorios',
            'description' => 'Audífonos inalámbricos con supresion de ruido y gran batería.'
        ],
        2 => [
            'id' => 2,
            'name' => 'Smartwatch Pro',
            'price' => 250,
            'image' => 'https://mac-center.com/cdn/shop/files/IMG-14867089.jpg?v=1726874273&width=823',
            'category' => 'tecnologia',
            'description' => 'Reloj watch con diversas funciones de salud y conectividad.'
        ],
        3 => [
            'id' => 3,
            'name' => 'Asus TUF Gaming',
            'price' => 3200,
            'image' => 'https://dlcdnwebimgs.asus.com/gain/3a36a12f-9a0d-488c-bef3-05431f041b96/',
            'category' => 'computadores',
            'description' => 'PC Gamer con RTX 5080, Ryzen 9 y 16GB RAM.'
        ],
        4 => [
            'id' => 4,
            'name' => 'Xbox Series X',
            'price' => 1800,
            'image' => 'https://cms-assets.xboxservices.com/assets/f0/8d/f08dfa50-f2ef-4873-bc8f-bcb6c34e48c0.png?n=642227_Hero-Gallery-0_C2_857x676.png',
            'category' => 'tecnologia',
            'description' => 'Consola de videojuegos 1TB de almacenamiento'
        ],
    ];

    // Mostrar todos los productos
    public function index()
    {
        return view("products.index", ["products" => $this->products]);
    }

    // Mostrar detalle de un producto
    public function detail($id, $category = null)
    {
        $product = $this->products[$id] ?? null;

        if (!$product) {
            abort(404, 'Producto no encontrado');
        }

        return view("products.detail", [
            "product" => $product
        ]);
    }

    // Vista para crear producto
    public function create()
    {
        return view("products.create");
    }
}
