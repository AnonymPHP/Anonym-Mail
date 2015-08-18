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
 * Interface PhpMailerAttachmentInterface
 * @package Anonym\Components\Mail
 */
interface PhpMailerAttachmentInterface
{

    /**
     * create a new instance and register the name and type
     *
     * @param string $fileName
     * @param string $type
     * @return PhpMailerAttachment
     */
    public static function create($fileName = '', $type = '');

    /**
     * @return string
     */
    public function getFile();


    /**
     * @return string
     */
    public function getType();

}
