<?php

namespace Auth0\RASDK\API\Management;

use Auth0\RASDK\API\Helpers\ApiClient;
use Auth0\RASDK\API\Header\ContentType;

class Logs extends GenericResource 
{
  public function get($id) 
  {
    return $this->apiClient->get()
      ->logs($id)
      ->call();
  }

  public function search($params = array()) {

    $client = $this->apiClient->get()
        ->logs();

    foreach ($params as $param => $value) {
        $client->withParam($param, $value);
    }

    return $client->call();
  }
}