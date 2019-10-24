<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasChildren;
use App\Models\Traits\IsOrderable;

class Category extends Model
{
    use HasChildren, IsOrderable;

    protected $fillable = [
        'name',
        'order',
        'slug'
    ];



    

    
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
