<?php 

namespace Auth0\RASDK\Helpers\Cache;

interface CacheHandler {

  public function get($key);
  public function delete($key);
  public function set($key, $value);

}