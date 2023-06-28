<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'creation_date'
    ];

    public function category() {

        return $this->belongsTo(Category::class);

    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
