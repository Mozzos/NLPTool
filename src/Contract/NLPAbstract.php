<?php

namespace Mozzos\NLPTool\Contract;


use Illuminate\Support\Facades\Config;
use Mozzos\NLPTool\Client;

abstract class NLPAbstract
{

    protected $url;

    protected $pattern;

    protected $format;

    protected $text;

    protected $api_key;

    protected $default;

    protected $src;

    protected $result_type;

    protected $cache_type;

    protected $res;

    protected $post_data = [];

    function __construct()
    {

        $this->default = Config::get("nlp.default");
        $this->api_key = Config::get("nlp.connections.$this->default.API_KEY");
        $this->result_type = \Config::get("nlp.result");
        $this->cache_type = \Config::get("nlp.cache");
    }

    /**
     * Get res
     * @return mixed
     */
    public function get()
    {
        return json_decode($this->res);
    }

    public function group($level = null){
        $newResults = [];
        if($level){
            switch ($level){
                case 2:
                    foreach ($this->get() as $section){
                        foreach ($section as $sentence){
                                $newResults[] = $sentence;
                        }
                    }
                    return $newResults;
                case 3:
                    foreach ($this->get() as $section){
                        foreach ($section as $sentence){
                            foreach ($sentence as $word){
                                $newResults[] = $word;
                            }
                        }
                    }
                    return $newResults;
                default:return $this->get();
            }
        }else{
            return $this->get();
        }
    }

    /**
     * Setting patten ws
     * @return $this
     */
    public function ws()
    {
        $this->pattern = 'ws';
        return $this;
    }

    /**
     * Setting patten pos
     * @return $this
     */
    public function pos()
    {
        $this->pattern = 'pos';
        return $this;
    }

    /**
     * Setting patten ner
     * @return $this
     */
    public function ner()
    {
        $this->pattern = 'ner';
        return $this;
    }

    /**
     * Setting patten dp
     * @return $this
     */
    public function dp()
    {
        $this->pattern = 'dp';
        return $this;
    }

    /**
     * Setting patten sdp
     * @return $this
     */
    public function sdp()
    {
        $this->pattern = 'sdp';
        return $this;
    }

    /**
     * Setting patten srl
     * @return $this
     */
    public function srl()
    {
        $this->pattern = 'srl';
        return $this;
    }

    /**
     * Setting patten all
     * @return $this
     */
    public function all()
    {
        $this->pattern = 'all';
        return $this;
    }

    /**
     * PreStart Client
     * @return Client
     */
    public function client()
    {
        return new Client();
    }

    /**
     * @param $src
     * @param $url
     * @return mixed
     */
    public function send($src,$url){
        return $this->client()->send($src,$url);
    }



    public abstract function info();

    public abstract function ping();

    public abstract function analysis($text);

    public function __get($name)
    {
        return $this->$name;
    }

}