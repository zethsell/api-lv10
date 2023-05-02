<?php

declare(strict_types=1);

namespace Src\Infra\Gateways;

use HubSpot\Client\Crm\Companies\Model\SimplePublicObjectInput;
use HubSpot\Client\Crm\Contacts\ApiException;
use HubSpot\Factory;
use Src\Domain\Contracts\Gateways\HubspotAdapterInterface;
use Src\Infra\Enum\HubspotEnum;

class HubspotAdapter implements HubspotAdapterInterface
{
  protected $client;

  public function __construct()
  {
    $this->client = Factory::createWithAccessToken(config('HUBSPOT_ACCESS_TOKEN'));
  }

  public static function listContacts($quantity = HubspotEnum::DEFAULT_MAXIMUM_RESULTS)
  {
    try {
      return self::$client->crm()->contacts()->basicApi()->getPage($quantity);
    } catch (ApiException $e) {
      return ['error' => $e->getMessage()];
    }
  }

  public static function getContact($contactId)
  {
    try {
      return self::$client->crm()->contacts()->basicApi()->getById($contactId);
    } catch (ApiException $e) {
      return ['error' => $e->getMessage()];
    }
  }

  public static function storeContact($data)
  {
    try {
      $contact = new SimplePublicObjectInput([
        'properties' => $data,
        'associations' => null,
      ]);
      return self::$client->crm()->contacts()->basicApi()->create($contact);
    } catch (ApiException $e) {
      return ['error' => $e->getMessage()];
    }
  }

  public static function updateContact($data)
  {
    try {
      $contact = new SimplePublicObjectInput([
        'properties' => $data
      ]);
      return self::$client->crm()->contacts()->basicApi()->update($data['contact_id'], $contact);
    } catch (ApiException $e) {
      return ['error' => $e->getMessage()];
    }
  }

  public static function deleteContact($contact_id)
  {
    try {
      return self::$client->crm()->contacts()->basicApi()->archive($contact_id);
    } catch (ApiException $e) {
      return ['error' => $e->getMessage()];
    }
  }
}
