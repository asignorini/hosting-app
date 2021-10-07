<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = "article_id";
    protected $fillable = ['article_title', 'article_description', 'article_text', 'article_image', 'article_image_alt', 'user_id', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function hasImage() {
        return $this->article_image != '' && file_exists(public_path('/storage/img/' . $this->article_image));
    }
}
