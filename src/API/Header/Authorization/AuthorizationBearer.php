<?php
namespace Auth0\RASDK\API\Header\Authorization;

use Auth0\RASDK\API\Header\Header;

class AuthorizationBearer extends Header {

    public function __construct ($token) {
        parent::__construct("Authorization", "Bearer $token");
    }

}