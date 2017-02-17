<?php

namespace Auth0\RASDK\API\Management;

use Auth0\RASDK\API\Helpers\ApiClient;
use Auth0\RASDK\API\Header\ContentType;

class Blacklists extends GenericResource 
{
    public function getAll($aud) 
    {
        return $this->apiClient->get()
            ->blacklists()
            ->tokens()
            ->withParam('aud', $aud)
            ->call();
    }

    public function blacklist($aud, $jti) 
    {
        return $this->apiClient->post()
            ->blacklists()
            ->tokens()
            ->withHeader(new ContentType('application/json'))
            ->withBody(json_encode([
              'aud' => $aud, 
              'jti' => $jti
            ]))
            ->call();
    }
}