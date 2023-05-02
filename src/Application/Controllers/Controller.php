<?php

namespace Src\Application\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use Throwable;

abstract class Controller extends BaseController
{
  protected abstract function __perform(Request $request);

  public function __invoke($request)
  {
    try {
      return $this->__perform($request);
    } catch (Throwable $error) {
      return response()->json('Error:' . $error->getMessage(), 500);
    }
  }
}
