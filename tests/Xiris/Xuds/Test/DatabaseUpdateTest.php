<?php
/*
 * This file is part of the Xuds package, an Xiris project.
 *
 * (c) 2014 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package     Xuds
 * @author      Christopher Silva <chris[at]planner.net.br>
 * @copyright   (c) 2014 Christopher Silva
 * @version     1.0
 */

namespace Xiris\Xuds\Test;

use Xiris\Xuds\DatabaseUpdate;

/**
 * Class DatabaseUpdateTest
 *
 * @package Xuds\Test
 */
class DatabaseUpdateTest extends \PHPUnit_Framework_TestCase
{
    private $du;

    /**
     * setUp()
     */
    protected function setUp()
    {
        $this->du = new DatabaseUpdate();
    }

    /**
     * testGetAllFiles()
     */
    public function testGetAllFiles()
    {
        $fromVersion = '3.5.2';
        $toVersion   = '3.5.4';

        $files = $this->du->getAllFiles($fromVersion, $toVersion);
        $this->assertTrue(is_array($files));
    }
}