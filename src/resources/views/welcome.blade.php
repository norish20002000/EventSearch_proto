@extends('layouts.app')
@section('content')
<div>
<div>
</div>
</div>
<div class='container'>
    <div>
        <form class="formsearch" method="GET" action="/">
            <input type="search" name="search" class="formsearch-input" placeholder="search" value={{$search ?? ''}} >
            <button type="submit" class="formsearch-button"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="search_list">
        <a class="p-btn search_day" href="{{ route('todayevent') }}">今日</a>
        <a class="p-btn search_day" href="{{ route('tomorrowevent') }}">明日</a>
        <a class="p-btn search_day" href="{{ route('weekendevent') }}">週末</a>
    </div>
    <div>
        <example-component :event-data="{{ $event_data }}"></example-component>
    </div>
    {{-- @foreach ($event_data as $event)
        {{$event->summary}}
        <example-component :event-data="{{ $event }}"></example-component>
    @endforeach
    --}}
</div>

@endsection
