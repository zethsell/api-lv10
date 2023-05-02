<?php

namespace Src\Domain\Contracts\Repositories;

use Src\Infra\Repositories\Models\Booking;

interface ListBookings
{
  public function get();
}

interface ShowBooking
{
  public function show(int $input);
}

interface SaveBookings
{
  public function save(Booking $data);
}

interface DeleteBookings
{
  public function delete(int $input);
}
