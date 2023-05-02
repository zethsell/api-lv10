<?php

namespace Src\Main\Factories\Domain\Usecases\Booking;

use Src\Domain\Usecases\Bookings\ShowBooking;
use Src\Main\Factories\Infra\Repositories\MakeBookingRepository;

// function  makeShowBooking(): ShowBooking
// {
//   return new ShowBooking(MakeBookingRepository::make());
// }


class MakeShowBooking
{
  public static function make(): ShowBooking
  {
    return new ShowBooking(MakeBookingRepository::make());
  }
}
