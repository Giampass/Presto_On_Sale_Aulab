<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;


class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'category_id', 'user_id'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function getSubstring(){
        if (strlen($this->description) > 25) {
            return substr($this->description,0 , 25) . '...';
        }else{
            return $this->description;
        }
    }
}