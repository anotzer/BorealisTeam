@extends('layouts.layout-front')
@section('content')
    <div class="header">
        <div class="one_section">
            BorealisTeam
        </div>
        <div class="second_section">
            Destiny 2
        </div>
        <div class="header-search">
            <form class="header-search__form" action="" method="get">
                <fieldset> <span class="header-search__icon"></span>
                    <input type="text" required="" class="header-search__input js-search_input" placeholder="Search your service">
                    <button type="reset" class="header-search__close" data-tf-inspect="-1609461109"></button>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="choice-wrapper">
        <div class="choice-en">
            <ul>
                <li><a href="">Raids</a></li>
                <li><a href="">PvP</a></li>
                <li><a href="">PvE</a></li>
                <li><a href="">God Rolls</a></li>
            </ul>
        </div>
    </div>
    <div class="main-image">
        <img src="image/TestImage.png" alt="" width="100%" height="100%">
    </div>
    <div class="list-actual-name">
        <h1>Actual Orders</h1>
    </div>
    <div class="list-actual">
        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__item">
                    <div style="height: 100%; background: url('https://gamingbolt.com/wp-content/uploads/2020/02/Destiny-2-Trials-of-Osiris_03.jpg') top/cover;">Trials</div>
                </div>
                <div class="slider__item">
                    <div style="height: 450px; background: green;">Raid</div>
                </div>
                <div class="slider__item">
                    <div style="height: 450px; background: violet;">God Rolls</div>
                </div>
                <div class="slider__item">
                    <div style="height: 450px; background: coral;">4</div>
                </div>
                <div class="slider__item">
                    <div style="height: 450px; background: brown;">5</div>
                </div>
                <div class="slider__item">
                    <div style="height: 450px; background: orchid;">6</div>
                </div>
                <div class="slider__item">
                    <div style="height: 450px; background: aqua;">7</div>
                </div>
            </div>
            <a class="slider__control slider__control_left" href="#" role="button"></a>
            <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
        </div>
    </div>

    <div class="reviews-user">

    </div>
@endsection
