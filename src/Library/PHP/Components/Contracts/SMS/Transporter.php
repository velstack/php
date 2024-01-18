<?php


namespace Velstack\PHP\Components\Contracts\SMS;
use Velstack\PHP\Builders\SMS\smsDriver as Provider;

class Transporter extends Provider
{
    /**
     * Connect to the database set in the .env file
     * </p>
     * @param $recipient
     * @param string $message
     * @return mixed
     */

    public static function send($recipient, string $message): mixed
    {
        return self::forwardToProvider($recipient, $message);
    }

}