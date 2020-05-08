<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    /**
     * コンストラクタ
     */
    public function __construct() {

    }

    /**
     * status=0イベントデータ取得
     * @param request
     * @return eventData
     */
    public static function getEventData($request)
    {
        $eventData = "";

        // search event data
        if ($request->search === null) {
            $eventData = DB::table('events')->where('status', 0)->get();
            // $eventData = Event::where('status', 0)->get();
            // var_dump($eventData);exit;
        } else {
            $eventData = DB::table('events')
                            ->where([
                                ['status', 0],
                                ['title', 'like', '%'.$request->search.'%'],
                            ])->get();
        }

        return $eventData;
    }

}
