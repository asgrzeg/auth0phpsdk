<?php namespace Auth0\Tests;

use Auth0\RASDK\Helpers\Cache\NoCacheHandler;
use Auth0\RASDK\Helpers\Cache\FileSystemCacheHandler;

class CacheTest extends \PHPUnit_Framework_TestCase 
{
    public function testNoCache() 
    {
        $cache = new NoCacheHandler();

        $this->assertNull($cache->get('pepe'));
        $cache->set('pepe', 'lala');

        $this->assertNull($cache->get('pepe'));
        $cache->delete('pepe');

        $this->assertNull($cache->get('pepe'));

    }

    public function testFileSystemCache() 
    {
        $cache = new FileSystemCacheHandler();

        $this->assertNull($cache->get('pepe'));
        $cache->set('pepe', 'lala');

        $this->assertEquals('lala', $cache->get('pepe'));

        $cache->delete('pepe');
        $this->assertNull($cache->get('pepe'));
    }
}