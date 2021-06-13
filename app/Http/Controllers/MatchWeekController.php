<?php

namespace App\Http\Controllers;

use App\Models\MatchWeek;
use App\Services\MatchWeekService;
use Exception;
use Illuminate\Http\Request;

class MatchWeekController extends Controller
{
    //
      //
      private $matchWeekService;
    

      public function __construct(MatchWeekService $matchWeekService)
      {
          $this->matchWeekService = $matchWeekService;
      }
      //
      public function index()
      {
          $result = ['status' => 200];
  
          try {
              $result['data'] = $this->matchWeekService->getAll()
  ;        }catch(Exception $e) {
              $result = [
                  'status' => 500,
                  'error' => $e->getMessage()
              ];
          }
  
          return response()->json($result,$result['status']);
      }

    
}
