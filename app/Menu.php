<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table ='category';
    protected $primaryKey = 'category_id';

    public function parent()
    {
        return $this->belongsTo('App\Menu', 'parent_id');
    }
 
    public function children()
    {
        return $this->hasMany('App\Menu', 'parent_id')->where('valid','1')->orderBy('sequence');
    }

}