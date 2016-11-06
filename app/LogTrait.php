<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

trait LogTrait {

    public static function createLog($text){
        $log = new \Portfolio\Log;
        $log->description = $text;
        $log->save();
        //return true;
    }
}