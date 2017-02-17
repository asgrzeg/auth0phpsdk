<?php

namespace Auth0\RASDK\API\Management;

use Auth0\RASDK\API\Helpers\ApiClient;
use Auth0\RASDK\API\Header\ContentType;

class Clients extends GenericResource 
{
    public function getAll($fields = null, $include_fields = null) 
    {
        $request = $this->apiClient->get()
            ->clients();

        if ($fields !== null) 
        {
            if (is_array($fields)) 
            {
                $fields = implode(',', $fields);
            }
            $request->withParam('fields', $fields);
        }

        if ($include_fields !== null) 
        {
            $request->withParam('include_fields', $include_fields);
        }

        return $request->call();
    }

    public function get($id, $fields = null, $include_fields = null) 
    {
        $request = $this->apiClient->get()
            ->clients($id);

        if ($fields !== null) 
        {
            if (is_array($fields)) 
            {
                $fields = implode(',', $fields);
            }
            $request->withParam('fields', $fields);
        }
        if ($include_fields !== null) 
        {
            $request->withParam('include_fields', $include_fields);
        }

        return $request->call();
    }

    public function delete($id) 
    {
        return $this->apiClient->delete()
            ->clients($id)
            ->call();
    }

    public function create($data) 
    {
        return $this->apiClient->post()
            ->clients()
            ->withHeader(new ContentType('application/json'))
            ->withBody(json_encode($data))
            ->call();
    }

    public function update($id, $data) 
    {
        return $this->apiClient->patch()
            ->clients($id)
            ->withHeader(new ContentType('application/json'))
            ->withBody(json_encode($data))
            ->call();
    }
}