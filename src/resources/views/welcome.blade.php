@extends('layouts.app')
@section('content')
<div>
<div>
</div>
</div>
<div class='container'>
<example-component :event-data="{{ $event_data }}"></example-component>
    <!-- @foreach ($event_data as $event)
        {{$event->summary}}
        <example-component :event-data="{{ $event }}"></example-component>
    @endforeach -->
</div>

@endsection
