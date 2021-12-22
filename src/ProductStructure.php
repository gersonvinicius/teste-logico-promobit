<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
       //todo your code.
       $array = array();
       $produtos = self::products;
       foreach($produtos as $product){
           $p = explode('-',$product);
           $counts = array_count_values($produtos);
           $soma = $counts[$product];
           if(in_array($p[0], $array))
               $array[$p[0]] = array_merge($array[$p[0]], array($p[1] => $soma));
           else
               $array[$p[0]][$p[1]] = $soma;
           unset($produtos[$p[0]]);
       }
       // echo '<pre>'; print_r($array); echo '</pre>';
       return $array;
    }
}