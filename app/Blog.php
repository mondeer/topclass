<?php

namespace topclass;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'author', 'content'];
}
