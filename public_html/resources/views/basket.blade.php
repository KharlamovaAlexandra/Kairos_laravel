@extends('layouts.main')
@section('content')
<div class="basket_fill">
    @if(Auth::check())
        @if($product->count()>0)
            <div class="basket-product">
                @foreach ($product as $prod)

                    <div  class="request-product">

                            <p class="bas_product_input bas_w_name" > {{ $prod->p_name }}</p>
                            <form action="{{ route('update_bas') }}" method="post" onsubmit="" class="req_min_form">
                                @csrf
                            <input  class="bas_product_input" type="hidden" name="id" value="{{ $prod->id }}" >
                            <input type="hidden" name="sum" value="{{ $prod->p_price  }}">
                            <input type="text" name="kol" class="res_f_kol" value="{{ $prod->b_quantity }}">
                            <input class="req_sumbol" type="submit" value="&#8635" />
                            </form>
                            <p class="bas_product_input bas_w_unit">{{$er=\App\Unit::where('id',$prod->unit_id )->get("unit_name")->first()->unit_name}}</p>
                            <p class="bas_product_input bas_w_sum">{{ $prod->b_sum }}</p>

                            <form action="{{ route('del_bas') }}" method="post" onsubmit="" class="req_min_form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $prod->id }}" >
                            <input class="req_sumbol" type="submit" value="	&#215" />
                        </form>

                    </div>

                @endforeach

            </div>
        <form id="form_zakaz" action="{{ route('new_request') }}" method="post" onsubmit="">
            @csrf
            <div class="request-info">
                <p align="center" class="marg_start">Инфо:</p>
                <p class="margin">Заказчик:</p>
                <p class="margin">{{Auth::user()->name}}</p>
                <label class="margin"for="adress">Адрес доставки:</label>
                <input class="margin"id="adress" type="text" name="adress" required autocomplete="off">
                <label class="margin"for="email">Email:</label>
                <input class="margin"id="email" type="email" name="email" required autocomplete="off">
                <label class="margin"for="tel">Телефон:</label>
                <input class="margin "id="tel" type="tel" name="tel" required autocomplete="off">
                <p class="margin">Итог:</p>
                <p class="margin marg_end">{{$sum ?? '0'}}</p>
                <input type="hidden" name="sum" value="{{ $sum  }}">


            </div>

        </form>
        <div class="tr">
            <label class="bas_lable" for="comment">Комментарий:</label>
            <textarea maxlength="500" name="comment" id="comment" cols="22" rows="2" class="req_com" form="form_zakaz"></textarea>
            <input  class="bas_bt" type="submit" value="оформить заказ" form="form_zakaz" >
        </div>

        @else
            Нет товаров
        @endif
    @else
        <div class="not_load_bas">
            <p class="not_load_bas-p">Оформление заявок доступно только зарегистрированным пользователям</p>
            <a  class="not_load-bt" href="{{ route('login') }}">Войти</a>
            <a class="not_load-bt" href="{{ route('register') }}">Регистрация</a>
        </div>
    @endif

</div>
@endsection
