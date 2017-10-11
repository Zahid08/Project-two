<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
 protected  $fillable=[
     'category_name',
     'category_description',
     'publication_status',

 ];
}
