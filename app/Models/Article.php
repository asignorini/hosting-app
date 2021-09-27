<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = "article_id";
    protected $fillable = ['article_title', 'article_description', 'article_text', 'user_id', 'category_id'];
    //protected $hidden = ['blabla']

    //TODO : public static function rules() {}
    //TODO : public static function rulesMessages() {}

    //Relationships

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
