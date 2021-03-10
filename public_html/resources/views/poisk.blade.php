@extends('layouts.main')
@section('content')
    <div class="catalog">
        <div><a id='top'/></div>
        <div class="side_fill">
            <hr class="kat_line" noshade>
            <ul>
                <li>
                    Мясо:
                    <ul>
                        <li><a href="{{ route('maso') }}">Мяо дорогое</a></li>
                        <li><a href="{{ route('riba') }}">Рыба белая</a></li>
                        <li><a href="{{ route('sous') }}">Соус</a></li>
                        <li><a href="{{ route('peas') }}">Горох</a></li>
                    </ul>
                </li>
                <li>
                    Рыба:
                    <ul>
                        <li><a href="{{ route('maso') }}">Мяо дорогое</a></li>
                        <li><a href="{{ route('riba') }}">Рыба белая</a></li>
                        <li><a href="{{ route('sous') }}">Соус</a></li>
                        <li><a href="{{ route('peas') }}">Горох</a></li>
                    </ul>
                </li>
                <li>
                    Сыры:
                    <ul>
                        <li><a href="{{ route('maso') }}">Мяо дорогое</a></li>
                        <li><a href="{{ route('riba') }}">Рыба белая</a></li>
                        <li><a href="{{ route('sous') }}">Соус</a></li>
                        <li><a href="{{ route('peas') }}">Горох</a></li>
                    </ul>
                </li>
                <li>
                    Соусы:
                    <ul>
                        <li><a href="{{ route('maso') }}">Мяо дорогое</a></li>
                        <li><a href="{{ route('riba') }}">Рыба белая</a></li>
                        <li><a href="{{ route('sous') }}">Соус</a></li>
                        <li><a href="{{ route('peas') }}">Горох</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div><a href="#top" class="idTop">&#x2191</a></div>
        @if(Auth::check())
            <div class="product_fill">

                <form action="{{ route('search') }}" method="post" onsubmit="" >
                    @csrf
                    <input type="text" name="search" class="res_f_kol" value="">
                    <input class="req_sumbol" type="submit" value="Отправить" />
                </form>

                @foreach ($product as $prod)

                    <div class="product_card">
                        <div class="product_card-info">
                            <li>

                                <picture class="info-picture">
                                    <img class="info-pic"  src="{{asset( $prod->p_pic )}}">
                                </picture>
                                <p class="info-op" align="center">{{ $prod->p_name }}</p>
                                <p class="info-op" align="center">{{ $prod->p_description }}</p>
                                <p class="info-price" align="center" >{{ $prod->p_price }} руб </p>
                            </li>
                        </div>
                        <form class="div_in_bas" align="center" action="{{ route('bas') }}" method="post" onsubmit="">
                            {{ csrf_field() }}
                            @csrf
                            <input type="hidden" name="name" value="{{ $prod->p_name }}">
                            <input type="hidden" name="p_id" value="{{ $prod->id }}">
                            <input type="hidden" name="p_price" value="{{ $prod->p_price }}">
                            <input type="hidden" name="unit_id" value="{{ $prod->unit_id }}">
                            <input  class="form-in_bas" type="submit" value="Добавить в корзину" />
                        </form>

                    </div>



                @endforeach


            </div>
        @else
            <div class="product_fill">
                @foreach ($product as $prod)
                    <div class="product_card">
                        <div class="product_card-info">
                            <li>


                                <img class="info-pic"  src="{{asset( $prod->p_pic )}}">

                                <p class="info-op" align="center">{{ $prod->p_name }}</p>
                                <p class="info-op" align="center">{{ $prod->p_description }}</p>

                            </li>
                        </div>
                        <div class="div_in_bas">
                            <button class="form-in_bas" align="center" onclick="opModel()">В корзину</button>
                        </div>

                    </div>

                @endforeach



            </div>

        @endif
        <div id="modal" class="modal">
            <div class="modal_content">
                <span onclick="clModal()">×</span>
                <p>Добавлять товары в корзину могут только зарегистрированные пользователи</p>
            </div>
        </div>


        <div class="side_fill side_fill_right">
            <div class="side_fill_right_adv">

                <img class="adv_pic" src="{{asset('storage/foto/meeet.png')}}" alt="рыба">

                <p>ГОРЯЧЕЕ ПРЕДЛОЖЕНИЕ</p>
            </div>
            <div class="side_fill_right_adv">

                <img class="adv_pic" src="{{asset('storage/foto/meeet.png')}}" alt="рыба">

                <p>ГОРЯЧЕЕ ПРЕДЛОЖЕНИЕ</p>
            </div>
            <div class="side_fill_right_adv">

                <img class="adv_pic" src="{{asset('storage/foto/meeet.png')}}" alt="рыба">

                <p>ГОРЯЧЕЕ ПРЕДЛОЖЕНИЕ</p>
            </div>
        </div>
    </div>

@endsection
