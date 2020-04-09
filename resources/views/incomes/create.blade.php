@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Доходы create') }}</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                           <form action="{{ route('income.store') }}" method="post">
                                 @csrf
                               <ul class="list-unstyled">
                                   <li><input type="text" name="value"/></li>
                                   <li><input type="text" name="source"/></li>
                                   <li><textarea name="comment"></textarea></li>
                               </ul>

                              <button type="submit">Create income</button>
                          </form>
                        </div>
                        <a href="{{route('income.index')}}"><-back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
