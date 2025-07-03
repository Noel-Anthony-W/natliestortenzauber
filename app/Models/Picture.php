<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\PictureProperties;

class Picture extends Model
{
    protected $fillable = [
        PictureProperties::URL->value,
        PictureProperties::TAG->value,
        PictureProperties::ALT->value,
    ];


    public function getNextPicture(Picture $picture): ?Picture{
        $nextPicture = Picture::where(getEnumValue(PictureProperties::ID), '>', $picture->getEnumValue(PictureProperties::ID))
                              ->orderBy(getEnumValue(PictureProperties::ID), 'asc')
                              ->firstOrNull();

        return $nextPicture;
    }
     public function getPreviousPicture(Picture $picture): ?Picture{
        $nextPicture = Picture::where(getEnumValue(PictureProperties::ID), '>', $picture->getEnumValue(PictureProperties::ID))
                              ->orderBy(getEnumValue(PictureProperties::ID), 'desc')
                              ->firstOrNull();

        return $nextPicture;
    }

}