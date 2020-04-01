<ul>
    @foreach($incomes as $income)
        <li>
            <a href="{{route('income.show',['income'=>$income->id])}}">{{$income->value}}</a>
            <a href="{{route('income.edit',['income'=>$income->id])}}"> Edit</a>
        </li>
    @endforeach
    <a href="{{route('income.create')}}">Добавить доход</a>

</ul>
<br>

<a href="/">back</a><! --Возникла проблемма при создании ссылки назад-->

