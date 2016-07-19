<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2016/6/13
 * Time: 23:17
 */

namespace Mozzos\NLPTool\Facades;


use Illuminate\Support\Facades\Facade;

class NLPTool extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'NLPTool';
    }
}