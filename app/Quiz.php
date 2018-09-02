<?php

namespace topclass;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['subject',
                          'level',
                          'work_type',
                          'page_count',
                          'language',
                          'deadline',
                          'topic',
                          'instructions',
                          'email',
                          'phone',
                          'writer'];
}
