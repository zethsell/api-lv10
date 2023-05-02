<?php

namespace Src\Main\Factories\Infra\Repositories;

use Src\Infra\Repositories\BookingRepository;

class MakeBookingRepository
{
  public static function make(): BookingRepository
  {
    return new BookingRepository();
  }
}
