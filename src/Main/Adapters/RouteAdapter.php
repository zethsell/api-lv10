<?php

namespace Src\Main\Adapters;

use Src\Application\Controllers\Controller;

class AdaptRoute
{
  public static function adapt(Controller $controller)
  {
    return $controller;
  }

  public function __construct(Controller $controller)
  {
    self::adapt($controller);
  }
}
