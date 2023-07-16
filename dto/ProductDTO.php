<?php

class ProductDTO {

  private string $code;

  private string $name;

  private string $level1;

  private string $level2;

  private string $level3;

  private float $price;

  private float $priceSp;

  private int $count;

  private string $propertyFields;

  private string $jointPurchases;

  private string $unit;

  private string $image;

  private string $showFrontPage;

  private string $description;

  /**
   * @param string $code;

   * @param string $name;

   * @param string $level1;

   * @param string $level2;

   * @param string $level3;

   * @param float $price;

   * @param float $priceSp;

   * @param int $count;

   * @param string $propertyFields;

   * @param string $jointPurchases;

   * @param string $unit;

   * @param string $image;

   * @param string $showFrontPage;

   * @param string $description;
   */
  public function __construct(
    string $code,
    string $name,
    string $level1,
    string $level2,
    string $level3,
    float $price,
    float $priceSp,
    int $count,
    string $propertyFields,
    string $jointPurchases,
    string $unit,
    string $image,
    string $showFrontPage,
    string $description
  ) {
    $this->code = $code;
    $this->name = $name;
    $this->level1 = $level1;
    $this->level2 = $level2;
    $this->level3 = $level3;
    $this->price = $price;
    $this->priceSp = $priceSp;
    $this->count = $count;
    $this->propertyFields = $propertyFields;
    $this->jointPurchases = $jointPurchases;
    $this->unit = $unit;
    $this->image = $image;
    $this->showFrontPage = $showFrontPage;
    $this->description = $description;
  }

  /**
   * Получаем данные конкретно из CSV
   *
   * @param array $data
   *
   * @return ProductDTO
   */
  public static function fromCSV(array $data): ProductDTO {
    return new self(
      $data[0],
      $data[1],
      $data[2],
      $data[3],
      $data[4],
      (float) $data[5],
      (float) $data[6],
      $data[7],
      $data[8],
      $data[9],
      $data[10],
      $data[11],
      $data[12],
      $data[13],
    );
  }

  /**
   * @return string
   */
  public function getCode(): string {
    return $this->code;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getLevel1(): string {
    return $this->level1;
  }

  /**
   * @return string
   */
  public function getLevel2(): string {
    return $this->level2;
  }

  /**
   * @return string
   */
  public function getLevel3(): string {
    return $this->level3;
  }

  /**
   * @return float
   */
  public function getPrice(): float {
    return $this->price;
  }

  /**
   * @return float
   */
  public function getPriceSp(): float {
    return $this->priceSp;
  }

  /**
   * @return int
   */
  public function getCount(): int {
    return $this->count;
  }

  /**
   * @return string
   */
  public function getPropertyFields(): string {
    return $this->propertyFields;
  }

  /**
   * @return string
   */
  public function getJointPurchases(): string {
    return $this->jointPurchases;
  }

  /**
   * @return string
   */
  public function getUnit(): string {
    return $this->unit;
  }

  /**
   * @return string
   */
  public function getImage(): string {
    return $this->image;
  }

  /**
   * @return string
   */
  public function getShowFrontPage(): string {
    return $this->showFrontPage;
  }

  /**
   * @return string
   */
  public function getDescription(): string {
    return $this->description;
  }

}