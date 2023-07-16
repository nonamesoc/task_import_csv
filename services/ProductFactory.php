<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/dto/ProductDTO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/Product.php';

class ProductFactory {

  public static function createProductFromDto(ProductDTO $productDTO): Product {
    return new Product(
      $productDTO->getCode(),
      $productDTO->getName(),
      $productDTO->getLevel1(),
      $productDTO->getLevel2(),
      $productDTO->getLevel3(),
      $productDTO->getPrice(),
      $productDTO->getPriceSp(),
      $productDTO->getCount(),
      $productDTO->getPropertyFields(),
      $productDTO->getJointPurchases(),
      $productDTO->getUnit(),
      $productDTO->getImage(),
      $productDTO->getShowFrontPage(),
      $productDTO->getDescription(),
    );
  }

}