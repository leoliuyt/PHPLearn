<?php
/**
 * 单例工厂类
 * 通过这个工厂类来根据类型名生产单例
 */
class ModelFactory{
    static $all_model = array();
    static function M($model_name){
        if(!isset(static::$all_model[$model_name]) ||
        !(static::$all_model[$model_name] instanceof $model_name)){
            self::$all_model[$model_name] = new $model_name();
        }
        return static::$all_model[$model_name];
    }
}