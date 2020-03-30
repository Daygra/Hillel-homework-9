<form action="{{ route('income.update',['income'=>$income->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="value" value="{{$income->value}}"/>
    <input type="text" name="source" value="{{$income->source}}"/>
    <textarea name="comment">{{$income->comment}}</textarea>
    <button type="submit">Update income</button>
</form>
<br>
<a href="{{route('income.index')}}">back</a>
