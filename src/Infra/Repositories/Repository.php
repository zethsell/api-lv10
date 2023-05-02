<?php

namespace Src\Infra\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository
{

  private Model $model;

  public function __construct(Model $_model)
  {
    $this->model = $_model;
  }

  protected function model(): Model
  {
    return $this->model;
  }
}
