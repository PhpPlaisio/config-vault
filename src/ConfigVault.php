<?php
declare(strict_types=1);

namespace Plaisio\ConfigVault;

/**
 * Interface for configuration vaults.
 *
 * A configuration vault is an object for storing safely sensitive configuration data such as API keys, private keys,
 * and other configuration data using key-value pairs.
 */
interface ConfigVault
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a boolean stored under a key in a domain.
   *
   * @param string $domain The name of the domain.
   * @param string $key    The key
   *
   * @return bool|null
   */
  public function getBool(string $domain, string $key): ?bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns all key-value pairs as an associative array in a domain.
   *
   * @param string $domain The name of the domain.
   *
   * @return array
   */
  public function getDomain(string $domain): array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a float stored under a key in a domain.
   *
   * @param string $domain The name of the domain.
   * @param string $key    The key
   *
   * @return float|null
   */
  public function getFloat(string $domain, string $key): ?float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns an integer stored under a key in a domain.
   *
   * @param string $domain The name of the domain.
   * @param string $key    The key
   *
   * @return int|null
   */
  public function getInt(string $domain, string $key): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a string stored under a key in a domain.
   *
   * @param string $domain The name of the domain.
   * @param string $key    The key
   *
   * @return string|null
   */
  public function getString(string $domain, string $key): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a boolean under a key in a domain.
   *
   * @param string    $domain The name of the domain.
   * @param string    $key    The key under which the integer must be stored.
   * @param bool|null $value  The value.
   *
   * @return void
   */
  public function putBool(string $domain, string $key, ?bool $value): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a float under a key in a domain.
   *
   * @param string     $domain The name of the domain.
   * @param string     $key    The key under which the integer must be stored.
   * @param float|null $value  The value.
   *
   * @return void
   */
  public function putFloat(string $domain, string $key, ?float $value): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores an integer under a key in a domain.
   *
   * @param string   $domain The name of the domain.
   * @param string   $key    The key under which the integer must be stored.
   * @param int|null $value  The value.
   *
   * @return void
   */
  public function putInt(string $domain, string $key, ?int $value): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a string under a key in a domain.
   *
   * @param string      $domain The name of the domain.
   * @param string      $key    The key under which the integer must be stored.
   * @param string|null $value  The value.
   *
   * @return void
   */
  public function putString(string $domain, string $key, ?string $value): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Removes a whole domain.
   *
   * @param string $domain The name of the domain.
   *
   * @return void
   */
  public function unsetDomain(string $domain): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Removes a key from a domain
   *
   * @param string $domain The name of the domain.
   * @param string $key    The key.
   *
   * @return void
   */
  public function unsetKey(string $domain, string $key): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
