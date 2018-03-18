<?php
/**
 * Created by PhpStorm.
 * 把原始数据转化成逗号分隔字符串|把字符串去除逗号转化成数组
 * User: administrator
 * Date: 2018/3/7
 * Time: 上午10:11
 */
$initialData = "400229
400344
400356
400367
";

// 生成逗号分隔的字符串
$string = preg_replace("/(\n)|(\s)|(\t)|(\')|(')|(，)/" ,',' ,$initialData);
//echo $string;

// 把逗号去除分成数组
$arr=explode(',',$string);
var_dump($arr);