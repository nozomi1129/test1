<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public static $rules = array(
        'category_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'tel' => 'required|max:15',
        'address' => 'required',
        'detail' => 'required|max:120'
    );
    public function book() {
    return $this->hasOne('App\Models\Book');
    }

    public function books() {
    return $this->hasMany('App\Models\Book');
    }

    public function scopeCategorySearch($query, $category_id) {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeKeywordSearch($query, $keyword) {
        if (!empty($keyword)) {
            $query->where('first_name', 'like', '%' . $keyword . '%');
            $query->where('last_name', 'like', '%' . $keyword . '%');
            $query->where('email', 'like', '%' . $keyword . '%');
        }
    }


}
