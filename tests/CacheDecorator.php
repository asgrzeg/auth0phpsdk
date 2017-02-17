<?php
namespace Auth0\Tests;

use Auth0\RASDK\Helpers\Cache\CacheHandler;

class CacheDecorator implements CacheHandler
{
  
  protected $cache;
  protected $counter = [];

  public function __construct(CacheHandler $cache) 
  {
    $this->cache = $cache;
  }

  public function get($key) {
    $this->add_count('get');
    return $this->cache->get($key);
  }

  public function delete($key) {
    $this->add_count('delete');
    return $this->cache->delete($key);
  }
  
  public function set($key, $value) {
    $this->add_count('set');
    return $this->cache->set($key, $value);
  }

  private function add_count($method) {
    if (!isset($this->counter[$method])) {
      $this->counter[$method] = 0;
    }
    $this->counter[$method]++;
  }

  public function count($method) {
    if (!isset($this->counter[$method])) {
      return null;
    }
    return $this->counter[$method];
  }

}