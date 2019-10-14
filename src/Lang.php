<?php declare (strict_types = 1);
#coding: utf-8
# +-------------------------------------------------------------------
# | SowerFrame
# +-------------------------------------------------------------------
# | Copyright (c) 2017-2019 Sower rights reserved.
# +-------------------------------------------------------------------
# +-------------------------------------------------------------------
namespace sowers;

use sower\Facade;


class Lang extends Facade
{
 
    protected static function getFacadeClass()
    {
        return 'lang';
    }
}
