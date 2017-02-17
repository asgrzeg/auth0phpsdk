<?php
namespace Auth0\RASDK\API\Header;

class ContentType extends Header {

    public function __construct ($contentType) {
        parent::__construct("Content-Type", $contentType);
    }

}