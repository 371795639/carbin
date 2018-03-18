<?php
$file = fopen('BlacklistSummary.csv','r'); //读取内容

while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
    //print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可  
    $goods_list[] = $data; //$good_list为数组，可以foreach看到指定下标的数据 $goods_list[1][0]; $goods_list[2][0];

}

fclose($file);


// 打开文件资源，不存在则创建
$fp = fopen('test.csv','a');
// 处理内容
$content = '';
foreach ($goods_list as $item => $value) {
        $content.= $goods_list[$item][0].",";
}

$csv = $content; // $csv是所有指定下标的内容
// 写入并关闭资源
fwrite($fp, $csv);
fclose($fp);

?>


