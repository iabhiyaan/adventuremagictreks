<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageGdp extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function scopePublished($query)
    {
        // dd(1);
      return $query->where('published', 1);
    }
    
    public function package()
    {
      return $this->belongsTo('App\Models\Package', 'package_id');
    }
}
