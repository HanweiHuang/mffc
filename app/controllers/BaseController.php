<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/3/2018
 * Time: 4:19 PM
 */
class BaseController{

    protected $view;
    protected $mail;

    public function __construct(){
    }

    //will be run finally
    public function __destruct(){
        $view = $this->view;
        if ( $view instanceof View ) {
            //extract data
            extract($view->data);
            //include template
            require $view->view;

        }

        //for mail
        $mail = $this->mail;
        if ( $mail instanceof Mail ) {
            $mailer = new Nette\Mail\SmtpMailer($mail->config);
            $mailer->send($mail);
        }


    }



}