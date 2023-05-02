<?php

namespace Src\Application\Requests\Bookings;

use Illuminate\Http\Request;

class ShowBookingRequest extends Request
{
  public function rules()
  {
    return
      [
        'id' => ['required', 'integer']
      ];
  }
}
