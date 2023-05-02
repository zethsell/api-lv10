<?php

namespace Src\Infra\Enum;

abstract class HubspotEnum
{

  public const DEFAULT_MAXIMUM_RESULTS = 10;

  public static function toString(): string
  {
    $string = self::DEFAULT_MAXIMUM_RESULTS . ',';

    return $string;
  }
}
