<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    protected $fillable = array('body','completed');

    protected $guarded = array();

    public function getCompletedAttribute($value){
        return (boolean) $value;
    }
}
