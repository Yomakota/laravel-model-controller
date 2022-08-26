@extends('layouts.app')

@section('page_title')
    Homepage
@endsection

@section('main_content')
    @include('components.products-list')
@endsection
