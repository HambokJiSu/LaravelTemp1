<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // 테이블 이름 지정
    protected $table = 'tb_test';
    
    // 사용할 컬럼 지정
    protected $fillable = ['COL1', 'COL2', 'COL3'];
}