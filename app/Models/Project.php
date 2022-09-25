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
        'project_order',
        'images',
        'description',
        'about',
        'mission',
        'main_image',
        'type',
    ];

    public function Details(){
      return $this->hasMany(ProjectDetails::class, 'project_id')->orderby('id', 'DESC');
    }
}
