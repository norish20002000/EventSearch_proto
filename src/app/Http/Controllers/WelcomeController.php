<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class WelcomeController extends Controller
{
    /**
     * top画面表示
     * @param Request $request
     * @return view
     */
    public function index(Request $request)
    {
        $data['event_data'] = Event::getEventData($request);
        $data['search'] = $request->search;

        return view("welcome", $data);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
}
