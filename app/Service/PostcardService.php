<?php

namespace App\Service;

use Illuminate\Support\Facades\Mail;

class PostcardService
{

    public function __construct(private $country, private $width, private $height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }


    public function hello($message, $email)
    {
        // Mail::raw($message, function($message) use ($email){
        //     $message->to($email);
        // });

        // mail out postcard through some service
        // based on country, width, height

        dump('Postcard was sent with the message:' . $message);
    }
}
