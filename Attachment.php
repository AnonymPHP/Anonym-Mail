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
 * Class Attachment
 * @package Anonym\Components\Mail
 */
abstract class Attachment
{

    /**
     * the new name of file
     *
     * @var string
     */
    private $newName;

    /**
     * @return string
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * @param string $newName
     * @return Attachment
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }
}
