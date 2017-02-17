<?php
/**
 * Created by PhpStorm.
 * User: remuslazar
 * Date: 01.12.16
 * Time: 10:16
 */

namespace Auth0\Tests;

use Auth0\RASDK\API\Authentication;

class AuthApiDBConnectionsTest extends ApiTests {

    protected $email;
    protected $connection = 'Username-Password-Authentication';

    protected function setUp() {
        $this->email = 'test-dbconnections-user' . rand() . '@test.com';
    }

    public function testSignup() {
        $env = $this->getEnv();

        $api = new Authentication($env['DOMAIN'], $env['APP_CLIENT_ID']);

        $email = $this->email;
        $password = '123-xxx-23A-bar';
        $connection = $this->connection;

        $response = $api->dbconnections_signup($email, $password, $connection);

        $this->assertArrayHasKey('_id', $response);
        $this->assertArrayHasKey('email_verified', $response);
        $this->assertArrayHasKey('email', $response);
        $this->assertEquals($email, $response['email']);
    }

    public function testChangePassword() {
        $env = $this->getEnv();

        $api = new Authentication($env['DOMAIN'], $env['APP_CLIENT_ID']);

        $email = $this->email;
        $connection = $this->connection;

        $response = $api->dbconnections_change_password($email, $connection);

        $this->assertNotEmpty($response);
        $this->assertContains('email', $response);
    }
}
