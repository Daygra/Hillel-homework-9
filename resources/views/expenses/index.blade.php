<ul>
    @foreach($expenses as $expense)
        <li>
            <a href="{{route('expense.show',['expense'=>$expense->id])}}">{{$expense->value}}</a>
            <a href="{{route('expense.edit',['expense'=>$expense->id])}}"> Edit</a>
        </li>
    @endforeach
    <a href="{{route('expense.create')}}">Добавить расход</a>

</ul>
<br>
<a href="{{route('index')}}">back</a>
