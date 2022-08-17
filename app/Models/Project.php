<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'images',
        'description',
        'main_image',
    ];

    public function Details(){
      return $this->hasMany(ProjectDetails::class,'project_id')->orderby('id','DESC');
    }
}
