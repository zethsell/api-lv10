<?php

namespace Src\Domain\Entities\Bookings;

use Src\Infra\Repositories\Models\Booking;

interface IShowBooking
{
  function setupShow(int $input);
}
