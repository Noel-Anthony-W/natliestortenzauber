<?php

namespace App;

 enum PictureProperties: string {
    case ID = 'id';
    case URL = 'url';
    case TAG = 'tag';
    case ALT = 'alt';
    case CreatedAt = 'created_at';
}
