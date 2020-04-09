@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Доходы show') }}</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                                <ul class="list-unstyled">
                                    <li>value: {{$income->value}}</li>
                                    <li>source: {{$income->source}}</li>
                                    <li>comment: {{$income->comment}}<br></li>
                                </ul>

                        </div>
                        <a href="{{route('income.index')}}"><-back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
