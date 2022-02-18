<?php
  namespace App\Repositories;

  use Illuminate\Support\Facades\Facade;

  class GetCustomFacade extends Facade{

      protected static function getFacadeAccessor(){
         return 'sum';
      }

  }

?>