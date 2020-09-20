<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $table = 'customers';
    public $timestamps = true;

    

    protected $fillable = [
        'customerName',
        'address' ,
        'organization', 
        'email' ,
        'mobile' ,
        'image' ,
        'created_at'
    ];
}
