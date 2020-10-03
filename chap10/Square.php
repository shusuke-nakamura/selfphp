<?php
// require_once 'Figure.php';

// class Square extends Figure {
//   public function getArea(): float {
//     return $this->width * $this->height;
//   }
// }

require_once 'IFigure.php';

class Square implements IFigure {

  private $width;
  private $height;

  public function __construct(float $width, float $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea(): float {
    return $this->width * $this->height;
  }
}