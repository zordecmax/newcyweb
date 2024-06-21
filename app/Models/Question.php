<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Question extends Model
{
    use HasFactory,Translatable;

    protected $fillable = ['question', 'answer'];
    protected $translatable = ['question', 'answer'];
}
