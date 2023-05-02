<?php

namespace Src\Application\Controllers\Booking;

use Illuminate\Http\Request;
use Src\Application\Requests\Bookings\ShowBookingRequest;
use Src\Application\Controllers\Controller;
use Src\Domain\Usecases\Bookings\ShowBooking;

class ShowBookingController extends Controller
{
  private ShowBooking $entity;

  public function __construct(ShowBooking $_entity)
  {
    $this->entity = $_entity;
  }

  public function __perform(Request $request)
  {
    return $this->entity->setupShow($request->validated());
  }
}
