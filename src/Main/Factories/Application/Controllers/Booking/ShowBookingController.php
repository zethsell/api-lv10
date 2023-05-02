<?php

namespace Src\Main\Factories\Application\Controllers\Booking;

use Src\Application\Controllers\Booking\ShowBookingController;
use Src\Application\Controllers\Controller;
use Src\Main\Factories\Domain\Usecases\Booking\MakeShowBooking;
use Src\Main\FactoriesApplication\Decorators\MakeDbTransactController;

class MakeShowBookingController
{
  public static function make(): Controller
  {
    $controller = new  ShowBookingController(MakeShowBooking::make());
    return MakeDbTransactController::make($controller);
  }
}
