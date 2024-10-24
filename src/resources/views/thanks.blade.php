<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

</head>

@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
  <div class="thanks__content">
    <div class="thanks__heading">
      <h2>お問い合わせありがとうございます</h2>
    </div>
  </div>
@endsection
