<?php

namespace Src\Main\FactoriesApplication\Decorators;

use Src\Application\Controllers\Controller;
use Src\Application\Decorators\DbTransactionController;

class MakeDbTransactController
{
  public static function make(Controller $controller): DbTransactionController
  {
    return new DbTransactionController($controller);
  }
}
