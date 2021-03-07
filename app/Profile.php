<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'email', 'date_of_birth', 'date_of_foundation', 'gender', 'location', 'address', 'state', 'city', 'zipcode', 'phone', 'country', 'photo', 'color', 'status', 'isfield', 'field', 'profession', 'custom1title', 'custom2title', 'custom1value', 'custom2value', 'tag', 'remark', 'metatitle', 'metadesc', 'metakey', 'others',
    ];
}
