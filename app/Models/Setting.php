<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
      'small_logo',
      'small_logo_dark',
      'inline_logo',
      'inline_logo_dark',
      'behance',
      'facebook',
      'instagram',
      'whatsapp',
      'mobile1',
      'mobile2',
      'email1',
      'email2',
      'cv',
  ];
}
