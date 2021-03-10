@extends('layouts.main')
@section('content')
<div>
    @foreach ($date as $prod)
    <div class="slide_menu">
        <div id="a_upd_pass" class=""><a onclick="updPass()">Сменить пароль</a></div>
        <div id="a_upd_inf" class=""><a onclick="updInf()">Редактировать информацию о себе</a></div>
    </div>

    <div id="upd_pass"  class="upd_div deactive" >
        <form action="{{ route('pas') }}" method="post" onsubmit=""  class="acc_form">
            @csrf
            <label for="pas">Старый пароль:</label>
            <input class="acc_inp" type="text" name="pas" >
            <label for="new_pas">Новый пароль:</label>
            <input  class="acc_inp" type="text" name="new_pas">
            <label for="new_pas_repeat">Повторите новый пароль:</label>
            <input  class="acc_inp" type="text" name="new_pas_repeat">
            <input class="acc_btn"  type="submit" value="Изменить">
        </form>
    </div>



    <div id="upd_inf"  class="upd_div deactive" >

            <form action="{{ route('inf') }}" method="post" onsubmit="" class="acc_form">
                @csrf

                    <label for="firm-name">Название фирмы:</label>
                    <input class="acc_inp" type="text" name="firm-name"  value="{{$prod->name}}">
                    <label for="tel">Телефон:</label>
                    <input class="acc_inp" type="text" name="tel" value="{{$prod->tel_number}}">
                    <label for="adr">Адрес:</label>
                    <input class="acc_inp" type="text" name="adr" value="{{$prod->adress}}" >
                    <label for="email">Email:</label>
                    <input class="acc_inp" type="text" name="email" value="{{$prod->email}}" >
                    <input class="acc_btn" type="submit" value="Изменить">

            </form>

    </div>
    @endforeach
</div>
@endsection
