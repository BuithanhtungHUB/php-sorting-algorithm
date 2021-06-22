<?php


class DataProduct
{
    public static $path ="product/product.json";

    public static function loadData()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return self::convertToProduct($data);
    }

    public static function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function convertToProduct($data)
    {
        $products = [];
        foreach ($data as $item){
            $product = new Product($item->id, $item->name,$item->price,$item->image,$item->detail);
            array_push($products,$product);
        }
        return $products;
    }

    public static function addProduct($product)
    {
        $products = self::loadData();
        array_push($products,$product);
        self::saveData($products);
    }

    public static function getProductById($id)
    {
        $products = self::loadData();
        foreach ($products as $product){
            if ($product->getId() == $id){
                return$product;
            }
        }
    }

    public static function editProductById($id, $newProduct)
    {
        $products = self::loadData();
        foreach ($products as $product) {
            if ($product->getId() == $id) {
                $product->setName($newProduct->getName());
                $product->setPrice($newProduct->getPrice());
                $product->setImage($newProduct->getImage());
                $product->setDetail($newProduct->getDetail());
            }
        }
        self::saveData($products);
    }

    public static function sortProductByPrice()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson,1);
        foreach ($data as $item){
            $item->getPrice();
            arsort($item);
        }
        echo '<pre>';
        print_r($data);

    }
}