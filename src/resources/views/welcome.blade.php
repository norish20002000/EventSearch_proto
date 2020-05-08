@extends('layouts.app')
@section('content')
<div>
<div>
</div>
</div>
<div class='container'>
<div>
    <form class="formsearch" method="GET" action="/">
        <input type="search" name="search" class="formsearch-input" placeholder="search" value={{$search}} >
        <button type="submit" class="formsearch-button"><i class="fa fa-search"></i></button>
    </form>
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
