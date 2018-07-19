<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/7/2018
 * Time: 11:37 PM
 */

use Nette\Mail\Message;

class Mail extends Message{


    public $config;

    // [String] e-mail

    protected $from;

    // [Array] e-mail list

    protected $to;

    protected $title;

    protected $body;

    function __construct($to){

        $this->config = require BASE_PATH.'/config/mail.php';

        $this->setFrom($this->config['username']);

        if ( is_array($to) ) {

            foreach ($to as $email) {

                $this->addTo($email);

            }

        } else {

            $this->addTo($to);

        }

    }

    public function from($from=null){

        if ( !$from ) {

            throw new InvalidArgumentException("sender cannot be empty");

        }

        $this->setFrom($from);

        return $this;

    }

    public static function to($to=null){

        if ( !$to ) {

            throw new InvalidArgumentException("Receipt cannot be empty!");

        }

        return new Mail($to);

    }

    public function title($title=null){

        if ( !$title ) {

            throw new InvalidArgumentException("Title cannot be empty!");

        }

        $this->setSubject($title);

        return $this;

    }

    public function content($content=null){

        if ( !$content ) {

            throw new InvalidArgumentException("Mail content cannot be empty");

        }

        $this->setHTMLBody($content);

        return $this;

    }




}