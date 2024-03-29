<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelatedLinks extends Model
{
    protected $table = 'relatedLinks';
    //主鍵名稱
    protected $promaryKey = 'id';
     //可變動欄位
    protected $fillable = [
      'title',
      'link',
      'releases',
    ];
}
