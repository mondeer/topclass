<?php

namespace topclass;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    protected $fillable = [
      'first_name',
      'last_name',
      'category_of_freelance',
      'years_of_experience',
      'email',
      'phone',
      'status_of_acceptance'
    ];
}
