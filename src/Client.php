<?php
namespace Mozzos\NLPTool;


class Client
{
    protected $instance;

    function __construct()
    {
        $this->instance = curl_init();
        curl_setopt($this->instance, CURLOPT_POST, 1);
        curl_setopt($this->instance, CURLOPT_HEADER, 0);
        curl_setopt($this->instance, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($this->instance, CURLOPT_COOKIEJAR, 'cookie.txt');
    }

    /**
     * send Resquest
     * @param $data
     * @return mixed
     */
    public function send($data,$url){
        curl_setopt($this->instance, CURLOPT_URL,$url);
        curl_setopt($this->instance, CURLOPT_POSTFIELDS, $data);
        return curl_exec($this->instance);
    }
}