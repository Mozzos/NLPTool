<?php

namespace Mozzos\NLPTool\Generators;


use Carbon\Carbon;
use Mozzos\NLPTool\Contract\NLPAbstract;

class LTPGenerator extends NLPAbstract
{
    const URL = 'http://api.ltp-cloud.com/analysis/?';

    function __construct()
    {
        parent::__construct();
        $this->url = LTPGenerator::URL;
        $this->pattern = 'all';
        $this->format = 'json';
    }


    public function info()
    {
        // TODO: Implement info() method.
    }

    public function ping()
    {
        // TODO: Implement ping() method.
    }


    /**
     * Start analysis
     * @param $text
     * @return $this
     */
    public function analysis($text)
    {
        $this->buildSrc($text);

        $this->res = $this->send($this->src,LTPGenerator::URL);

        if (!$this->res) {
            $this->res = [];
        }
        return $this;
    }

    /**
     * Build src
     * @param $data
     * @return string
     */
    private function buildSrc($data)
    {
        $this->post_data['api_key'] = $this->api_key;
        $this->post_data['text'] = $data;
        $this->post_data['pattern'] = $this->pattern;
        $this->post_data['format'] = $this->format;
        $this->post_data['_'] = Carbon::now()->timestamp;
        $o = "";
        foreach ($this->post_data as $k => $v) {
            $o.= "$k=" . urlencode($v) . "&";
        }
        $this->src = substr($o, 0, -1);
        return $this->src;
    }

}