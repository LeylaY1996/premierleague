<?php

namespace App\Http\Controllers;

use App\Services\StatisticsService;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    private $statisticsService;
    public function __construct(StatisticsService $statisticsService)
    {
        $this->statisticsService = $statisticsService;
    }
    //
    public function index()
    {
        $data =$this->statisticsService->getAll();
        return response()->json($data);
    }
    public function filter(Request $request, int $week)
    {
        $data =$this->statisticsService->filterByWeek($week);
        return response()->json($data);
    }
}
