<?php

namespace App;

enum Status: string{
    case Success = 'Success';
    case Error = 'Error';

    public static function getString(Status $status): string
    {
        return match ($status){
            Status::Success => Status::Success->value,
            Status::Error => Status::Error->value,
        };
    } 
}
