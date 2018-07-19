<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/3/2018
 * Time: 4:51 PM
 *
 * Article Model
 */

/**
 * Class Article
 * article have the same name with the table in database
 */
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

//    public static function first()
//    {
//        $connection = mysql_connect("localhost","root","root");
//        if (!$connection) {
//            die('Could not connect: ' . mysql_error());
//        }
//
//        mysql_set_charset("UTF8", $connection);
//
//        mysql_select_db("mffc", $connection);
//
//        $result = mysql_query("SELECT * FROM articles limit 0,1");
//
//        if ($row = mysql_fetch_array($result)) {
//            return $row;
//        }
//
//        mysql_close($connection);
//    }
    public $timestamps = false;

}