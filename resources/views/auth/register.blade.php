@if ($errors->any())
<ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif
<form method="POST" action="store">
    <label for="">NAME:<input type="text" name="name" ></label><br/>
    <label for="">EMAIL:<input type="text" name="email" ></label><br/>
    <label for="">PASSWORD:<input type="password" name="password"></label><br/>
    <label for="">CONFIRM PASSWORD:<input type="password" name="password_confirmation" ></label><br/>
    <input type="submit" value="REGISTER">

@csrf
</form>