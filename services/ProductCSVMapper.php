<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/dto/ProductDTO.php';

class ProductCSVMapper {

  /**
   * @param array $data
   * @return ProductDTO
   */
  public static function mapCsvArrayToDTO(array $data): ProductDTO {
    return ProductDTO::fromCSV($data);
  }

}