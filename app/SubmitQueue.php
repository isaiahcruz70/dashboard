<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmitQueue extends Model
{
    protected $fillable = ['date', 'rep-name', 'client-name', 'business-name', 'email', 'reason', 'phone', 'message', 'vulnerabiliy'];
}
