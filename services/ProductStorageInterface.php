<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/models/ProductInterface.php';

interface ProductStorageInterface {

  public function save(ProductInterface $product): ProductInterface;

  public function loadRawProducts(int $page = 0, int $limit = 200): array;

  public function totalCount(): int;

}