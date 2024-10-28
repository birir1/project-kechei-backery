@extends('layouts.app')

@section('content')
    @include("frontend.partials.navbar1")

    @include("frontend.partials.navbar2")

    @include("frontend.partials.orderonline")

    {{-- @include("frontend.partials.artisanbread") --}}

    {{-- @include("frontend.partials.historicalphotos") --}}

    @include("frontend.partials.footer")
@endsection
