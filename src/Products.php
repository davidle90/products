<?php

namespace Davidle90\Products;

class Products {

    public function justDoIt() {
        $response = [
            'quote' => 'hello world',
            'author' => 'david'
        ];

        return $response['quote'] . ' - ' . $response['author'];
    }
}