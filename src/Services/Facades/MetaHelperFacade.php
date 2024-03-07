<?php

namespace Embit88\MetaHelper\Services\Facades;

use Illuminate\Support\Facades\Facade;

class MetaHelperFacade extends Facade
{
     protected static function getFacadeAccessor(): string
     {
         return 'metahelper';
     }

}
