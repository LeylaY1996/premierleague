<?php

namespace App\Http\Controllers;

use App\Services\GameMatchService;
use Exception;
use Illuminate\Http\Request;

class GameMatchController extends Controller
{

    private $gameMatchService;
    

    public function __construct(GameMatchService $gameMatchService)
    {
        $this->gameMatchService = $gameMatchService;
    }
    //
    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->gameMatchService->getAll()
;        }catch(Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result,$result['status']);
    }
}
