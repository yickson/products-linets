<?php

namespace App\Modules;

use Illuminate\Support\Collection;

class Product
{
    public static function getFile()
    {
        $data = [];
        $armed = [];
        $characters = '';
        $name = '';
        $i = 0;
        $products = \App\Product::all();
        $products = $products->groupBy('model');
        //$headers = self::getHeaderFile($products);
        foreach ($products as $r => $product) {
            foreach ($product as $j => $items) {
                $items = $items->toArray();
                foreach ($items as $k => $item) {
                    switch ($k){
                        case 'sku':
                            $characters .= $k.'='.$item.' ';
                            break;
                        case 'attribute_color':
                            $characters .= 'color='.$item. '|';
                            break;
                        case 'name':
                            $name = $item;
                            break;
                        default:
                            $armed[$k] = $item;
                    }
                }
            }
            $armed['configurable_variations'] = $name.''.$characters;
            $data[$i] = $armed;
            $i++;
        }
        return collect($data);
    }

    public static function getHeaderFile()
    {
        $products = \App\Product::all();
        $products = $products->groupBy('model');
        $headers = [];
        foreach ($products as $product) {
            foreach ($product as $data){
                $headers = array_keys($data->toArray());
                break;
            }
            break;
        }
        $headers[] = 'configurable_variations';
        $headers = array_diff($headers, ["sku", "name", "attribute_color"]);
        return $headers;
    }
}
