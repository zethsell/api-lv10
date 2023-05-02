<?php

namespace Src\Application\Decorators;

use Illuminate\Support\Facades\DB;
use Src\Application\Controllers\Controller;
use Throwable;

class DbTransactionController extends Controller
{
  private Controller $decoratee;

  public function __contruct(Controller $_decoratee)
  {
    $this->decoratee = $_decoratee;
  }

  public function __perform($request)
  {
    DB::beginTransaction();
    try {
      return $this->decoratee->__perform($request);
      DB::commit();
    } catch (Throwable $error) {
      DB::rollBack();
      throw $error;
    }
  }
}
