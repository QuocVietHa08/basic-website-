@extends('layouts.app')

@section('content')
   @foreach($message as $item) 
        <ul class="p-1 m-2  rounded ">
            <div class="bg-gray-200 p-1 rounded w-3/6">
                <li class="ml-7">Name: {{$item->name}}</li>
                <li class="ml-7">Email: {{$item->email}}</li>
                <li class="ml-7">Tel: {{$item->tel}}</li>
                <li class="ml-7">Message: {{$item->message}}</li>
            </div>
        </ul>
   @endforeach
@endsection