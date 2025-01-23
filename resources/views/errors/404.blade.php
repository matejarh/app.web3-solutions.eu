@extends('errors::web3')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Whoops! That page doesn’t exist.'))
@section('icon')
    <svg class="mb-4 w-10 h-10 text-gray-500 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
        height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
    </svg>
@endsection
@section('image')
    <img src="{{ Vite::asset('resources/images/errors/404-computer.svg') }}" class="w-100%" />
@endsection
