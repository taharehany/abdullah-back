<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    use HasFactory;

    protected $fillable = [
      'image',
      'order',
      'desktop_col',
      'mobile_col',
      'project_id',
  ];
}
