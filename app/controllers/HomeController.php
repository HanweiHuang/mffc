<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/3/2018
 * Time: 4:19 PM
 */


class HomeController extends BaseController
{

    public function index(){
        //example for catch data from database;
//        $article = Article::first();
//        require dirname(__FILE__).'/../views/home.php';

        //example for advanced way to catch data with view template "home" (views/home.php)
        $this->view = View::make('home')->with('article', Article::first())
                                        ->withTitle('MFFC')
                                        ->withFuckMe('OK!');

        Utility::test();
        // example for use mail to send email;
//        $this->mail = Mail::to(['wei2215038@gmail.com', 'wei2215038+test@gmail.com'])
//            ->from('MotherFucker <ooxx@163.com>')
//            ->title('Fuck Me!')
//            ->content('<h1>Hello~~</h1>');


        //example for use redis
        //Redis::set('key','value',25,'s');
        //echo Redis::get('key');
    }
}