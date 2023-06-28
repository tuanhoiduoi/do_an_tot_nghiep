@extends('layout_user')
@section('css')
 <link rel="stylesheet" href="/css/ghe.css">
@endsection
@section('js')
<script src="{{asset('js/taoghe.js')}}"></script>
@endsection
@section('content')

    {{-- @foreach ($ghe as $ghees)
        <a href="">{{$ghees->tenghe}}</a>
    @endforeach --}}

    <div id="chair" style="--rows: {{$dong}}; --cols: {{$cot}};">
        @foreach ($ghe as $ghees )
            <input name="ghe[]" type="checkbox" class="btn-check" id="btn-{{$ghees->dong}}-{{$ghees->cot}}" value="{{$ghees->tenghe}}-{{$ghees->dong}}-{{$ghees->cot}}" autocomplete="off">
            <label class="btn btn-outline-primary" for="btn-{{$ghees->dong}}-{{$ghees->cot}}" style="--row:{{$ghees->dong}};--col:{{$ghees->cot}}">{{$ghees->tenghe}}</label>
        @endforeach
    </div>
@endsection
