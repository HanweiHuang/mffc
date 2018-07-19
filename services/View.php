<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/4/2018
 * Time: 12:30 AM
 */


class View
{
    const VIEW_BASE_PATH = '/app/views/templates/';

    public $view;
    public $data;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public static function make($viewName = null){
        if ( ! $viewName ) {
            throw new InvalidArgumentException("view name cannot be null!");
        }else {
            $viewFilePath = self::getFilePath($viewName);
            if ( is_file($viewFilePath) ) {
                return new View($viewFilePath);
            } else {
                throw new UnexpectedValueException("can not find view file");
            }
        }
    }

    public function with($key, $value = null)
    {
        $this->data[$key] = $value;
        return $this;
    }

    private static function getFilePath($viewName)
    {
        $filePath = str_replace('.', '/', $viewName);
        return BASE_PATH.self::VIEW_BASE_PATH.$filePath.'.php';
    }

    public function __call($method, $parameters)
    {
        if (starts_with($method, 'with'))
        {
            return $this->with(snake_case(substr($method, 4)), $parameters[0]);
        }

        throw new BadMethodCallException("Function [$method] does not exists.");
    }
}