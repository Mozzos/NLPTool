<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2016/6/13
 * Time: 23:17
 */

namespace Mozzos\NLPTool\Facades;


class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mozzos.NLPTool';
    }
}