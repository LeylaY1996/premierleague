<?php

namespace App\Http\Controllers;

use App\Services\TeamService;
use Exception;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    private $teamService;
    

    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }
    //
    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->teamService->getAll()
;        }catch(Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result,$result['status']);
    }
}
