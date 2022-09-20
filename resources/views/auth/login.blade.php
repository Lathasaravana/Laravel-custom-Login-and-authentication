@if ($errors->any())
<ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif
<form method="POST" action="authenticate">
    <label for="">EMAIL:<input type="text" name="email" ></label><br/>
    <label for="">PASSWORD:<input type="password" name="password"></label><br/>
    <input type="submit" value="login">
    @csrf

</form>
