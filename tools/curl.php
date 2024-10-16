<?php

namespace tools;

class Curl
{

    /**
     * 使用cURL发送GET请求
     *
     * @param string $url 请求的URL地址
     * @param array $header 请求头数组，默认为空
     * @param bool $ssl_verify 是否验证SSL证书，默认为true
     * @return mixed 返回请求的结果
     */
    function CurlGet($url, $header = array(), $ssl_verify = true) {
        // 初始化cURL会话
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_TIMEOUT,60);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch,CURLOPT_PROXY,"0.0.0.0:80");
//        curl_setopt($ch,CURLOPT_PROXYPORT,"80");

        $header = [
            'Content-Type: application/json',
            'Accept: */*',
            'Host: <calculated when request is sent>',
            'User-Agent: PostmanRuntime/7.42.0',
            'Accept-Encoding: gzip, deflate, br',
            'Connection: keep-alive',
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // 设置cURL选项以跳过SSL证书验证
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_verify);

        $response = curl_exec($ch);

        if ($response === false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo 'Response: ' . $response;
        }

        curl_close($ch);
    }

    function CurlPost($url, $data, $header = array(), $ssl_verify = true)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));


        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // 设置cURL选项以跳过SSL证书验证
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_verify);

        $response = curl_exec($ch);

        var_dump($response);
        if ($response === false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo 'Response: ' . $response;
        }

        curl_close($ch);
        return $response;

    }
}