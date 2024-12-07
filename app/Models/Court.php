<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'court_status_id' => 'required|numeric|min:1|max:3'
    ];

    protected $fillable = ['court_status_id'];
}
