<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PostTag
 *
 * @property int $post_id
 * @property int $tag_id
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag whereTagId($value)
 * @mixin \Eloquent
 */
class PostTag extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'post_tag';
}
