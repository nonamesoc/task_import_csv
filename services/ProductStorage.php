<?php

require_once 'ProductStorageInterface.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/ProductInterface.php';

class ProductStorage implements ProductStorageInterface {

  private Connection $database;

  public function __construct($database) {
    $this->database = $database;
  }

  public function save(ProductInterface $product): ProductInterface {
    $id = $this->database->insert('products', [
      'code' => $product->getCode(),
      'name' => $product->getName(),
      'level_1' => $product->getLevel1(),
      'level_2' => $product->getLevel2(),
      'level_3' => $product->getLevel3(),
      'price' => $product->getPrice(),
      'price_sp' => $product->getPriceSp(),
      'count' => $product->getCount(),
      'property_fields' => $product->getPropertyFields(),
      'joint_purchases' => $product->getJointPurchases(),
      'unit' => $product->getUnit(),
      'image' => $product->getImage(),
      'show_frontpage' => $product->getShowFrontPage(),
      'description' => $product->getDescription(),
    ]);
    $product->setId($id);

    //@todo update method

    return $product;
  }

}