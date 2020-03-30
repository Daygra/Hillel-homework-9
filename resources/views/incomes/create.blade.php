<form action="{{ route('income.store') }}" method="post">
    @csrf
    <input type="text" name="value"/>
    <input type="text" name="source"/>
    <textarea name="comment"></textarea>
    <button type="submit">Create income</button>
</form>
<br>
<a href="{{route('income.index')}}">back</a>
