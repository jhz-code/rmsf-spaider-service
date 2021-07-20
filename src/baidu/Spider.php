<?php

namespace RmTop\RmSpider\Badiu;

class Spider
{


    /**
     * 数据推送
     * @param string $authUrl
     * @param array $urlArr
     * @return bool|string
     */
    static function push(string $authUrl,array  $urlArr){
        $api = "http://data.zz.baidu.com/urls?site=$authUrl";
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urlArr),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        return curl_exec($ch);
    }

}