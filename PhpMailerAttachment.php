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
 * the attachment class for phpmailer driver
 *
 * Class PhpMailerAttachment
 * @package Anonym\Components\Mail
 */
class PhpMailerAttachment
{

    /**
     * the name of file
     *
     * @var string
     */
    private $file = '';

    /**
     * the type of file
     *
     * @var string
     */
    private $type = '';

    /**
     * create a new instance and register the name and type
     *
     * @param string $fileName
     * @param string $type
     */
    public function __construct($fileName = '', $type = '')
    {
        $this->setFile($fileName);
        $this->setType($type);
    }

    /**
     * create a new instance and register the name and type
     *
     * @param string $fileName
     * @param string $type
     * @return PhpMailerAttachment
     */
    public static function create($fileName = '', $type = '')
    {
        return new static($fileName, $type);
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return PhpMailerAttachment
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PhpMailerAttachment
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }



}