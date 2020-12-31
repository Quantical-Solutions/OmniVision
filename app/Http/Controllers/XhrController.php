<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XhrController extends Controller
{
    public function index(Request $request)
    {
        $method = 'get' . ucfirst($request->input('job'));
        if (method_exists(XhrController::class, $method)) {

            try {

                echo json_encode($this->$method($request), JSON_THROW_ON_ERROR);

            } catch (\JsonException $e) {

                echo $e->getMessage();
            }

        } else {

            abort(404);
        }
    }

    private function getTest($request)
    {
        return $request;
    }
}
