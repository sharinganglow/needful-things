<?php

namespace App\Blocks;

class ProductBlock
{
    public function render()
    {
        require APP_ROOT . '/views/product.phtml';
    }

    public function getData() :array
    {
        return $data = [
            [
                'name'      => 'IPhone 1',
                'price'     => '13004',
                'country'   => 'Serbia',
                'brand'     => 'Apple',
                'date'      => '19.03.2001',
                'category'  => 'smartphone, ios',
            ],
                ['name'     => 'Samsung chin chan chon chi',
                'price'     => '89999',
                'country'   => 'China',
                'brand'     => 'Samsung',
                'date'      => '23.05.2023',
                'category'  => 'smartphone, android',
            ],
            [
                'name'      => 'Sklip-Sklok 10',
                'price'     =>'100000',
                'country'   => 'Russia',
                'brand'     => 'Bea(e)r',
                'date'      => '30.02.2007',
                'category'  => 'supersmartphone, linux',
            ]
        ];
    }

    public function setData(): void
    {

    }
}