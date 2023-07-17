<?php

interface ProductInterface {

  public function getId(): int;

  public function setId(int $id): self;

  public function getCode(): string;

  public function getName(): string;

  public function getLevel1(): string;

  public function getLevel2(): string;

  public function getLevel3(): string;

  public function getPrice(): float;

  public function getPriceSp(): float;

  public function getCount(): int;

  public function getPropertyFields(): string;

  public function getJointPurchases(): string;

  public function getUnit(): string;

  public function getImage(): string;

  public function getShowFrontPage(): bool;

  public function getDescription(): string;

}