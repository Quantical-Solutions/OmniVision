<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesHubController extends Controller
{
    public function router($uri = 'index')
    {
        switch ($uri) {

            case 'index': $content = $this->index(); break;
            case 'plans': $content = $this->plans(); break;
            case 'infos': $content = $this->infos(); break;
            case 'recap': $content = $this->recap(); break;
            case 'payment': $content = $this->payment(); break;
            case 'statement': $content = $this->statement(); break;
            default: $content = $this->error404(); break;
        }
        return $content;
    }

    private function index()
    {
        return view('basket.index');
    }

    private function plans()
    {
        return view('basket.plans');
    }

    private function infos()
    {
        return view('basket.infos');
    }

    private function recap()
    {
        return view('basket.recap');
    }

    private function payment()
    {
        return view('basket.payment');
    }

    private function statement()
    {
        return view('basket.statement');
    }

    private function error404()
    {
        return abort(404);
    }
}
