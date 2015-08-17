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
 * the interface of driver
 *
 * Interface DriverInterface
 * @package Anonym\Components\Mail
 */
interface DriverInterface
{

    /**
     * send the prepared mail content.
     *
     * @return bool
     */
    public function send();

    /**
     * Set the address information sent by mail.
     *
     * @param string $mail the address of mail
     * @param string $name the real name of mail sender
     * @return mixed
     */
    public function from($mail, $name);

    /**
     * set the address information to be send
     *
     * @param string|array $mail the address of mail
     * @param null|string $name the real name of mail receiver
     * @return mixed
     */
    public function to($mail, $name = null);

    /**
     * register the message body
     *
     * @param string $body the message body
     * @return mixed
     */
    public function body($body = '');


    /**
     * add a attachment to message
     *
     * @param  $attachment the attachment
     * @return mixed
     */
    public function attach($attachment);

    /**
     * register a new bcc
     *
     * @param string|array $mail the address of mail
     * @param null $name the realname
     * @return mixed
     */
    public function bcc($mail, $name = null);

    /**
     * register the address to send a reply message
     *
     * @param string $address
     * @return mixed
     */
    public function returnPath($address = '');
}
