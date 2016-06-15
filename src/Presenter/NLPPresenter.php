<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2016/6/15
 * Time: 14:48
 */

namespace Mozzos\NLPTool\Presenter;


use Illuminate\Support\Facades\Config;
use Mozzos\NLPTool\Contract\NLPAbstract;
use Mozzos\NLPTool\Generators\BosonGenerator;
use Mozzos\NLPTool\Generators\LTPGenerator;

class NLPPresenter
{
    /**
     * Get currect instance
     * @return BosonGenerator|LTPGenerator
     */
    public static function getInstance()
    {
        switch (Config::get('nlp.default')) {
            case 'LTP_Cloud':
                return new LTPGenerator();
            case 'Boson':
                return new BosonGenerator();
            default:
                return new LTPGenerator();
        }
    }
}