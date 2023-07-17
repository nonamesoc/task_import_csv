<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/services/ProductStorageInterface.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/services/ProductCSVMapper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/services/ProductFactory.php';

class Controller {

  private ProductStorageInterface $productStorage;

  public function __construct(ProductStorageInterface $productStorage) {
    $this->productStorage = $productStorage;
  }

  public function formPage(): void {
    require 'views/form_page.php';
  }

  public function uploadCvsFile(): void {
    if (!isset($_FILES['csv_file']) || !file_exists($_FILES['csv_file']['tmp_name'])) {
      throw new Exception('File not found');
    }

    $csv = $_FILES['csv_file'];
    if (($fp = fopen($csv['tmp_name'], "r")) !== FALSE) {

      // Пропускаем заголовки
      fgetcsv($fp, NULL, ";");
      while (($data = fgetcsv($fp, NULL, ";")) !== FALSE) {
        if (count($data) !== 14) {
          continue;
        }

        //@todo Добавить логи если пропущена строка
        $productDTO = ProductCSVMapper::mapCsvArrayToDTO($data);
        $product = ProductFactory::createProductFromDto($productDTO);
        $this->productStorage->save($product);
      }
      fclose($fp);
    }

    header('Location: /?redirection=success');
  }

  public function listPage(): void {
    $page = $_GET['page'] ?? 0;
    $itemsPerPage = 200;
    $products = $this->productStorage->loadRawProducts($page, $itemsPerPage);
    $totalCount = $this->productStorage->totalCount();
    $lastPage = $totalCount / $itemsPerPage;
    require 'views/list_page.php';
  }

}