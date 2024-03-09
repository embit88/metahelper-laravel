<?php

namespace Embit88\SeoHelper\Services\Facades;

use Illuminate\Support\Facades\Facade;

class SeoHelperFacade extends Facade
{
     protected static function getFacadeAccessor(): string
     {
         return 'seohelper';
     }

}
