<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;

    protected $fillable=[
        'title', 'subtitle', 'content'
    ];
    
    function formatDate(){
        return date_format($this->created_at, 'd-m-Y');
    }
}
