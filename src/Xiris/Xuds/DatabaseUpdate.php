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

namespace Xiris\Xuds;

/**
 * Class DatabaseUpdate
 *  Provides an database upgrade system
 *
 */
class DatabaseUpdate
{
    const VERSION_ISGREATER = 1;
    const VERSION_ISEQUAL   = 0;
    const VERSION_ISLOWER   = -1;

    /**
     * @var string
     */
    private $filesPath = '';

    /**
     * isUpdated()
     *
     * Validate if the system is updated comparing
     * database storage version with const version
     *
     * @return bool
     */
    public static function isUpdated()
    {
        return true;
    }

    /**
     * getAllFiles()
     * Get all files names in the directory
     *
     * @param $fromVersion string
     * @param $toVersion string
     * @return array
     */
    public function getAllFiles($fromVersion = '', $toVersion = '')
    {
        $files = array();

        /** ...  */

        return $files;
    }

    /**
     * getUpgradeFile()
     *
     * @param       $fromVersion
     * @param string $toVersion
     * @param array $files
     * @return string
     */
    public function getUpgradeFile($fromVersion, $toVersion, array $files)
    {
        $upgradeFile = '';

        /** ... */

        return $upgradeFile;
    }

    /**
     * setFilesPath()
     *
     * @param string $path
     * @throws Exception
     */
    public function setFilesPath($path = '')
    {
        if (empty($path)) {
            throw new \InvalidArgumentException("Please enter a valid path");
        }

        $this->filesPath = $path;
    }

    /**
     * getFilesPath()
     *
     * @return string
     */
    private function getFilesPath()
    {
        return $this->filesPath;
    }


}