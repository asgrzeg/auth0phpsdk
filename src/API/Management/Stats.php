<?php

namespace Auth0\RASDK\API\Management;

use Auth0\RASDK\API\Helpers\ApiClient;
use Auth0\RASDK\API\Header\ContentType;

class Stats extends GenericResource 
{
  public function getActiveUsersCount() 
  {
    return $this->apiClient->get()
      ->stats()
      ->addPath('active-users')
      ->call();
  }

  public function getDailyStats($from, $to) 
  {
    return $this->apiClient->get()
      ->stats()
      ->daily()
      ->withParam('from', $from)
      ->withParam('to', $to)
      ->call();
  }
}