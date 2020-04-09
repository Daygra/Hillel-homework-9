@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Доходы') }}</div>
                    <div class="card-body">
                            <ul class="list-group list-unstyled">
                                @foreach($incomes as $income)
                                <li>
                                    <a href="{{route('income.show',['income'=>$income->id])}}">{{$income->value}}</a>
                                    <div class="float-right">
                                      <form method="post" action="{{route('income.destroy',['income'=>$income->id])}}">
                                          @method('delete')
                                          @csrf
                                          <button type="submit" class=" btn btn-link btn-sm">X</button>
                                          <a href="{{route('income.edit',['income'=>$income->id])}}"> Edit</a>
                                      </form>
                                     </div>
                                </li>
                                @endforeach
                            </ul>
                        <div class="row justify-content-center">
                            <a href="{{route('income.create')}}">Добавить доход</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
