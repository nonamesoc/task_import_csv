<?php

require_once 'ProductInterface.php';

class Product implements ProductInterface {

  private int $id;

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
   * @return int
   */
  public function getId(): int {
    return $this->id;
  }

  /**
   * @param int $id
   *
   * @return Product
   */
  public function setId(int $id): self {
    $this->id = $id;
    return $this;
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