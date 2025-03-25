<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    // 그리드 페이지를 보여주는 메소드
    public function index()
    {
        return view('test.index');
    }

    // 데이터를 JSON 형식으로 반환하는 메소드
    public function getData()
    {
        $data = Test::select('COL1', 'COL2', 'COL3')->get();
        return response()->json($data);
    }

    // 새로운 데이터 조회 메소드
    public function getData2()
    {
        $data = DB::select("
        SELECT	COL1, COL2, CONCAT(COL2, '_', COL3) AS COL3
        FROM	tb_test
        LIMIT 5
        ");
        return response()->json($data);
    }
}