@extends('layouts.app')

@section('page_title')
  FAQ
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12">
        @foreach ($faq as $faq)
          <h3>{{$faq['question']}}</h3>
          <p>{{$faq['answer']}}</p>
        @endforeach
      </div>
    </div>
  </div>
@endsection
