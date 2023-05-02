<?php

namespace Src\Infra\Repositories;

// use Src\Domain\Contracts\Repositories\DeleteBookings;
// use Src\Domain\Contracts\Repositories\ListBookings;
// use Src\Domain\Contracts\Repositories\SaveBookings;
// use Src\Domain\Contracts\Repositories\ShowBooking;

use Src\Domain\Contracts\Repositories\DeleteBookings;
use Src\Infra\Repositories\Models\Booking;

class BookingRepository extends Repository implements DeleteBookings
{

  public function __construct()
  {
    $model = new Booking();
    parent::__construct($model);
  }

  public function get()
  {
    return $this->model()->all();
  }

  public function show($input)
  {
    return $this->model()->find($input);
  }

  public function save($data)
  {
    return $data['id']
      ? $this->model()->create()
      : $this->model()->update();
  }

  public function delete($input)
  {
    $this->model()->destroy($input);
  }
}
