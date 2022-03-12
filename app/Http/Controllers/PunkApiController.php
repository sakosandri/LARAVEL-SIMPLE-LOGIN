<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class PunkApiController extends Controller
{
    public function index(\Illuminate\Http\Request $request)
    {
        if (Auth::check()) {
            $currentPage = $request->page ? $request->page : 1;
            $response = Http::get(env('PUNK_URL_API').'beers/?page=' . $currentPage);
            return view('components.punkapi', ['data' =>
            $response->json(), 'currentPage' => $currentPage]);
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
