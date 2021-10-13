<h1>Inserção de Restaurante</h1>
<hr>

<form action="{{route('restaurant.store')}}" method="POST">

    {{csrf_field()}}

    <p>
        <label for="">Nome do Restaurante</label><br>
        <input type="text" name="name" value="{{old('name')}}"> <br>

        @if ($errors->has('name'))
             {{($errors->First('name'))}}
        @endif
    </p>

    <p>
        <label for="">Endereço do Restaurante</label><br>
        <input type="text" name="address" value="{{old('address')}}">
        <br>
        @if ($errors->has('address'))
            {{($errors->First('address'))}}
        @endif
    </p>

    <p>
        <label for="">Fale sobre o Restaurante</label><br>
        <textarea name="description" id="" cols="30" rows="10" value="{{old('description')}}"></textarea>
        <br>
        @if ($errors->has('description'))
            {{($errors->First('description'))}}
        @endif
    </p>

    <input type="submit" name="" id="" value="Cadastrar">

</form>