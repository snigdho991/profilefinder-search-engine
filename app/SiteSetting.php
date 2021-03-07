<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    //
    protected $fillable = [
        'sitetitle', 'metatitle', 'metadesc', 'metakey', 'footertext', 'extra',
    ];
}
