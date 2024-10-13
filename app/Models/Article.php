<?php

namespace App\Models;

use App\Enums\NotificationEnum;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = ['title', 'content', 'published', 'notifications', 'photo_path'];

    protected $casts = [
        'id' => 'integer',
        'published' => 'boolean',
        'notifications' => AsEnumCollection::class . ':' . NotificationEnum::class,
    ];

    // protected function casts(): array
    // {
    //     return [
    //         'id' => 'integer',
    //         'published' => 'boolean',
    //         'notifications' => AsEnumCollection::of(NotificationEnum::class),
    //     ];
    // }
}
