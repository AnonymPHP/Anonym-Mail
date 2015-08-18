<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */

namespace Anonym\Components\Mail;

/**
 * the component of mail
 *
 * Class Mail
 * @package Anonym\Components\Mail
 */
class Mail
{

    /**
     * the instance of mail driver
     *
     * @var DriverInterface
     */
    private $driver;

    /**
     * the list of driver list
     *
     * @var array
     */
    private $defaultDriverList;

    /**
     * create a new instance and register the default driver list
     *
     */
    public function __construct()
    {
        $this->defaultDriverList = [
            'swift' => SwiftMailerDriver::class
        ];
    }

    /**
     * select a driver
     *
     * @param string $driver the name of driver
     * @param array $configs the configs for driver
     * @throws DriverException
     * @return DriverInterface|bool if driver name isset in driver list, return the driver instance, else return false
     */
    public function driver($driver = '', array $configs = [])
    {
        $driverList = $this->defaultDriverList;
        if (isset($driverList[$driver])) {
            $driver = $driverList[$driver];
            $driver = new $driver($configs);

            if ($driver instanceof DriverInterface) {
                return $driver;
            } else {
                throw new DriverException(sprintf('your %s driver has not Driver Interface', get_class($driver)));
            }
        } else {
            throw new DriverNotInstalledException(sprintf('your %s driver is not installed', $driver));
        }

    }

    /**
     * @return DriverInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param DriverInterface $driver
     * @return Mail
     */
    public function setDriver(DriverInterface $driver)
    {
        $this->driver = $driver;
        return $this;
    }

}
