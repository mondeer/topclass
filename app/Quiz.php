<?php

namespace topclass;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['email_customer','question', 'due_date','length_of_assignment'];
}
