<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template_customer extends Model
{
    protected $table = 'template_customer';
    protected $primary = ['id','user_id','template_id'];
    //
}
