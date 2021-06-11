<?php

namespace App\Http\Controllers;

use App\Services\MatchLeagueService;
use Exception;
use Illuminate\Http\Request;

class MatchLeagueController extends Controller
{

    private $matchLeagueService;
    

    public function __construct(MatchLeagueService $matchLeagueService)
    {
        $this->matchLeagueService = $matchLeagueService;
    }
    //
    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->matchLeagueService->getAll()
;        }catch(Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result,$result['status']);
    }
}
