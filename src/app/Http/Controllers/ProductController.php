<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSeason;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort');

        if (isset($sort)) {
            $products = Product::orderBy('price', $sort)->paginate(6);
            $appendsParams['sort'] = $sort;
            $products->appends($appendsParams);
        } else {
            $products = Product::paginate(6);
        }

        return view('index', compact('products', 'sort'));
    }

    public function test(Request $request)
    {
        // 今月を取得
        $nowMonth = Carbon::create(2025, 12);
        // 今月の最終日を取得
        $lastDay = $nowMonth->endOfMonth()->day;

        // 今月の日付を全て取得
        $monthDate = [];
        $attendances = [];
        for ($i = 1; $i <= $lastDay; $i++) {
            $date = Carbon::create(2025, 12, $i)->toDateString();
            $attendance = Attendance::where('user_id', $userId)
                                    ->where('check_in', $date)
                                    ->first();

            $attendances[$date] = null;
            if (isset($attendance)) {
                $attendances[$date] = $attendance;
            }
        }

        dd($monthDate);

        return view('test', compact('number'));
    }
}
