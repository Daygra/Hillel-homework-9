@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Доходы edit') }}</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="{{ route('income.update',['income'=>$income->id])}}" method="post">
                                @csrf
                                @method('patch')
                                <ul class="list-unstyled">
                                    <li><input type="text" name="value" value="{{$income->value}}"/></li>
                                    <li> <input type="text" name="source" value="{{$income->source}}"/></li>
                                    <li> <textarea name="comment">{{$income->comment}}</textarea></li>
                                </ul>

                                <button type="submit">Update income</button>
                            </form>
                        </div>
                        <a href="{{route('income.index')}}"><-back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
