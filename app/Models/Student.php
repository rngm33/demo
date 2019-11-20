<?php

 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;

class Student extends Model{

    protected $fillable = [

        'name',
        'address',
        'dob',
        'email',
        'gender',
        'phone'	
        
    ];
 
    protected $table= 'student';
 

}