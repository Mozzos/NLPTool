<?php

namespace Mozzos\NLPTool;


use Illuminate\Config\Repository;
use Mozzos\NLPTool\Contract\NLPAbstract;
use Mozzos\NLPTool\Presenter\NLPPresenter as Client;

Trait NLPTool
{
    /**
     * @var Repository
     */
    protected $config;

    /**
     * @var array
     */
    protected $notifications = [];

    /**
     * @var NLPAbstract
     */
    protected $client;

    /**
     * Toastr constructor.
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * @return Generators\BosonGenerator|Generators\LTPGenerator
     */
    public static function getNLPClient(){
        return Client::getInstance();
    }

    /**
     * @param $text
     * @return $this
     */
    public function analysis($text){
        $this->client=$this->getNLPClient()->analysis($text);
        return $this;
    }

    /**
     * Setting patten ws
     * @return $this
     */
    public function ws()
    {
        $this->client=$this->getNLPClient()->ws()->analysis($text);
        return $this;
    }

    /**
     * Setting patten pos
     * @return $this
     */
    public function pos()
    {
        $this->client=$this->getNLPClient()->pos()->analysis($text);
        return $this;
    }

    /**
     * Setting patten ner
     * @return $this
     */
    public function ner()
    {
        $this->client=$this->getNLPClient()->ner()->analysis($text);
        return $this;
    }

    /**
     * Setting patten dp
     * @return $this
     */
    public function dp()
    {
        $this->client=$this->getNLPClient()->dp()->analysis($text);
        return $this;
    }

    /**
     * Setting patten sdp
     * @return $this
     */
    public function sdp()
    {
        $this->client=$this->getNLPClient()->sdp()->analysis($text);
        return $this;
    }

    /**
     * Setting patten srl
     * @return $this
     */
    public function srl()
    {
        $this->client=$this->getNLPClient()->srl()->analysis($text);
        return $this;
    }

    /**
     * @param null $level
     * @return $this
     */
    public function group($level = null){
        return $this->client->group($level);
    }

    /**
     * @return mixed
     */
    public function get(){
        return $this->client->get();
    }
}