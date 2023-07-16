<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/models/ProductInterface.php';

interface ProductStorageInterface {

  public function save(ProductInterface $product): ProductInterface;

}