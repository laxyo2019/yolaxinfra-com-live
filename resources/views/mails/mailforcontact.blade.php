@extends('layouts.mail')

@section('content')
<h3>Contacted via contact page on yolaxinfra.com</h3>
<div>
  <p>Name of User:        {{$data['name']}}</p>
  <p>Email id:            {{$data['email']}}</p>
  <p>Mobile No:           {{$data['mobile']}}</p>
  <p>Mobile No:           {{$data['company_name']}}</p>
  <p>message:{{$data['message']}}</p>
</div>

@endsection
