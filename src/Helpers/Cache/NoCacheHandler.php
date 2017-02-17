<?php 

namespace Auth0\RASDK\Helpers\Cache;

class NoCacheHandler implements CacheHandler {

  public function get($key) {
    return null;
  }

  public function delete($key) {

  }
  
  public function set($key, $value) {

  }

}