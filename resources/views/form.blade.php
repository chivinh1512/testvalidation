@if(count($errors)>0)
    <div>
        @foreach($errors->all() as $er)
            {{$er}}
        @endforeach
    </div>
@endif

<form action="" method="post">
    @csrf
    Name: <input type="text" name="name"> <br>
    Mail: <input type="text" name="email"><br>
    Age: <input type="number" name="age"> <br>
    Message : <input type="text" name="mess"> <br>
    <input type="submit" value="gởi">
</form>