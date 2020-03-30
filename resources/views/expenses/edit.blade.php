<form action="{{ route('expense.update',['expense'=>$expense->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="value" value="{{$expense->value}}"/>
    <input type="text" name="purpose" value="{{$expense->purpose}}"/>
    <textarea name="comment">{{$expense->comment}}</textarea>
    <button type="submit">Update expense</button>
</form>
<br>
<a href="{{route('expense.index')}}">back</a>
