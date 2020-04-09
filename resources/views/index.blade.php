@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <a href="{{route('income.index')}}">Показать доходы</a><br>
                    <a href="{{route('expense.index')}}">Показать расходы</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection

