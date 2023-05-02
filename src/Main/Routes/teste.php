<?php


namespace Src\main\Routes;


class Teste
{
  private $controller;

  public function __construct($controller)
  {
    $this->controller = $controller;
  }

  public static function make()
  {
    return new $this->controller();
  }
}
