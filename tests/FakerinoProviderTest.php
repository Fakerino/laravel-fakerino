<?php
/**
 * This file is part of the Fakerino Laravel package.
 *
 * (c) Nicola Pietroluongo <nik.longstone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fakerino\Test\Package {

    use Fakerino\Package\FakerinoProvider;

    class FakerinoProviderTest extends \PHPUnit_Framework_TestCase
    {
        public function setUp()
        {
            $this->app = $this->getMockBuilder('\Illuminate\Contracts\Foundation\Application')
                            ->getMock();
            $this->provider = new FakerinoProvider($this->app);
        }

        public function testBoot()
        {
            $this->provider->boot();
            $pathsToPublish = $this->provider->pathsToPublish();
            $configPath = key($pathsToPublish);

            $this->assertInstanceOf('Fakerino\Package\FakerinoProvider', $this->provider);
            $this->assertTrue(file_exists($configPath));
        }

        public function testProvides()
        {
            $providerName = $this->provider->provides();

            $this->assertEquals('Fakerino\Fakerino', $providerName[0]);
        }
    }
}

namespace Fakerino\Package {
    function config_path()
    {
        return true;
    }
}