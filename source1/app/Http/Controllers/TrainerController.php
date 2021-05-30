<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function getTrainers(Request $request) {

        $per_page = $request->input('per_page');

        //is null
//        if (empty($per_page)) {
//            $per_page = 10;
//        }
//
//        //is string
////        if (is_string($per_page)) {
////            $per_page = 10;
////        }
//        if (!is_numeric($per_page)) {
//            return redirect('error');
//        }

        $obj = new Trainer();
        $trainers = $obj->paginate($per_page);

        return view('trainers', ['trainers' => $trainers]);
    }
}
