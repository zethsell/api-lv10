<?php

namespace Src\Domain\Contracts\Gateways;

interface HubspotAdapterInterface
{
  /**
   * $quantity is the number of items that must be returned
   */
  public static function listContacts(int $quantity);

  /**
   * Retrieve a contact by contactId
   */
  public static function getContact(int $contactId);

  /**
   * Create a contact in Hubspot
   *
   * $data structure:
   * 'contact_id'
   * 'properties' => [
   * 'company'
   * 'email'
   * 'firstname'
   * 'lastname'
   * 'sas_applied'
   * 'sas_activated'
   * 'sas_properties'
   * 'sas_pm'
   * 'sas_pm_agency'
   * 'sas_leads_individual'
   * 'sas_leads_agency'
   * 'sas_guest_guest'
   * 'sas_owner_owner'
   * 'sas_subscribed'
   * 'sas_partners'
   * 'contact_property_count'
   * ],
   */
  public static function storeContact(mixed $data);

  /**
   * Update a contact in Hubspot by the Contact ID
   *
   * $data structure:
   * 'id'
   * 'properties' => [
   * 'company'
   * 'email'
   * 'firstname'
   * 'lastname'
   * 'sas_applied'
   * 'sas_activated'
   * 'sas_properties'
   * 'sas_pm'
   * 'sas_pm_agency'
   * 'sas_leads_individual'
   * 'sas_leads_agency'
   * 'sas_guest_guest'
   * 'sas_owner_owner'
   * 'sas_subscribed'
   * 'sas_partners'
   * 'contact_property_count'
   * ],
   */
  public static function updateContact(mixed $data);

  /**
   * Delete a contact in Hubspot by the Contact ID
   */
  public static function deleteContact(int $contactId);
}
