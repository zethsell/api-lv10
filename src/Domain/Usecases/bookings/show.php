<?php

declare(strict_types=1);

namespace Src\Domain\Usecases\Bookings;

use Error;
use Src\Domain\Contracts\Repositories\ShowBooking as ShowRepo;
use Src\Domain\Entities\Bookings\IShowBooking;


class ShowBooking implements IShowBooking
{
  private ShowRepo $repo;

  public function __construct(ShowRepo $repo)
  {
    $this->repo = $repo;
  }

  public function setupShow($input)
  {
    $booking = $this->repo->show($input);
    if (!isset($booking)) throw new Error('Booking Not Found!');
    return $booking;
  }
}
