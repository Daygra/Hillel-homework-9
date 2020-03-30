<form action="{{ route('expense.store') }}" method="post">
    @csrf
    <input type="text" name="value"/>
    <input type="text" name="purpose"/>
    <textarea name="comment"></textarea>
    <button type="submit">Create expence</button>
</form>
<br>
<a href="{{route('expense.index')}}">back</a>
