@extends('errors::web')

@section('title', __('Internal Server Error'))
@section('code', '500')
@section('message', __('We are already working to solve the problem.'))
@section('icon')
<svg class="mb-4 w-10 h-10 text-gray-500 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
  </svg>

@endsection
@section('image')
    <img src="{{ Vite::asset('resources/images/errors/500.svg') }}" class="w-100%" />
@endsection
