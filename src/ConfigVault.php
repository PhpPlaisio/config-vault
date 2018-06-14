<?php

namespace SetBased\Abc\ConfigVault;

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
   * Returns the value stored under a key in a domain or all key-value pairs as an associative array in a domain.
   *
   * @param string      $domain The name of the domain.
   * @param string|null $key    The key. If null all key-value pairs in the domain are returned.
   *
   * @return mixed
   */
  public function getValue(string $domain, ?string $key = null);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a value under a key in a domain or replaces all key-value pairs in a domain with key-value pairs given as an
   * associative array.
   *
   * @param string      $domain The name of the domain.
   * @param string|null $key    The key. If null the value must be an associative array.
   * @param mixed       $value  The value.
   *
   * @return void
   */
  public function putValue(string $domain, ?string $key, $value): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Removes a key from a domain or removes a whole domain.
   *
   * @param string      $domain The name of the domain.
   * @param string|null $key    The key. If null a whole domain will be removed.
   *
   * @return void
   */
  public function unset(string $domain, ?string $key = null): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
