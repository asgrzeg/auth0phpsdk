<?php

namespace Auth0\RASDK\API\Management;

use Auth0\RASDK\API\Helpers\ApiClient;
use Auth0\RASDK\API\Header\ContentType;

class UserBlocks extends GenericResource 
{
  public function get($user_id) 
  {
    return $this->apiClient->get()
      ->addPath('user-blocks',$user_id)
      ->call();
  }

  public function getByIdentifier($identifier) 
  {
    return $this->apiClient->get()
      ->addPath('user-blocks')
      ->withParam('identifier', $identifier)
      ->call();
  }

  public function unblock($user_id) 
  {
    return $this->apiClient->delete()
      ->addPath('user-blocks',$user_id)
      ->call();
  }

  public function unblockByIdentifier($identifier) 
  {
    return $this->apiClient->delete()
      ->addPath('user-blocks')
      ->withParam('identifier', $identifier)
      ->call();
  }
}