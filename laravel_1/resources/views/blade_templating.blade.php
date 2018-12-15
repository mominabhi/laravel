
@extends('bladeMaster')
@section('main_content')
    <h3>my name is abhi.</h3>
    The current UNIX timestamp is {{ time() }}.
    <a href="{{route('template.index')}}">Quotes</a>
@endsection