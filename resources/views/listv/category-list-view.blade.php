@extends('layouts.layout-front')
@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container-fluid" style="">
            <br>
            <br>
            <br>
            <br>
            <hr color="rgba(255,255,255,.4)">
            <div class="row justify-content-center">
                <div id="carouselExampleIndicators" class="carousel slide w-75" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="max-height: 350px;">
                            <img class="d-block w-100" src="https://i.ytimg.com/vi/KEc1ugYKHaM/maxresdefault.jpg" alt="First slide" style="overflow: hidden; max-height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>My Caption Title (1st Image)</h5>
                                <p>The whole caption will only show up if the screen is at least medium size.</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="max-height: 350px;">
                            <img class="d-block w-100" src="https://specials-images.forbesimg.com/imageserve/5f2d59483974decdf5573985/960x0.jpg?cropX1=0&cropX2=1105&cropY1=8&cropY2=617" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="max-height: 350px;">
                            <img class="d-block w-100" src="https://cdn.shazoo.ru/456667_ueodbezE4x_destiny2.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="width:40px;height:40px;" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style="width:40px;height:40px;" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <hr color="rgba(255,255,255,.4)">

            <div class="title" style="font-size: 22px; color: #fff;">
                <span>
                    Orders
                </span>
            </div>

            <div class="container-lg" style=" margin-right: 12%; margin-left: 12%; margin-top: 10px;">
                <div class="row justify-content-center">
                    @foreach($category_products as $products)
                        @foreach($products->products as $pr)
                        <div class="ServicesItem col-12 col-md-6 col-xl-4" >
                            <div class="card" style="background-image: url('{{$pr->image->path}}'); background-size: cover; margin-top: 3rem; border: 1px solid #fff;">
                                <form action="{{route('order.page', $pr->id)}}" method="get">
                                    <div class="card-body" style="min-height: 222px;">
                                        <div class="card-footer" style="backdrop-filter: blur(5px); border: 1px solid #fff; margin-top: 40%; padding-left: 0;">
                                            <button type="submit" id="open_order_{{$pr->id}}" style="display: none;">sadasd</button>
                                            <label for="open_order_{{$pr->id}}" href="#" class="btn col-md-4 text-left shadow-none"></label>
                                            <a href="#" class="but-buy btn btn-outline-info float-right col-md-4">Buy</a>
                                            <style>
                                                .card-footer > a {
                                                    color: #fff;
                                                    font-size: 18px;
                                                    font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial, sans-serif;
                                                }
                                                .card-footer > .btn:focus, .card-footer > .btn:active {
                                                    box-shadow: none !important;
                                                }
                                                .btn{
                                                    transition: .5s;
                                                }
                                                .card-footer > .but-buy {
                                                    transition: 2s ease-in-out;
                                                }
                                                .card-footer > .but-buy:hover {
                                                    background-image: linear-gradient(90deg,#3d82f4,#956ff7),linear-gradient(90deg,#3d82f4,#956ff7);
                                                }

                                            </style>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                    <div class="row justify-content-center col-md-12" style="padding-top: 20px;">
                        <?php ?>
                    </div>
                </div>
            </div>
            <div class="title" style="font-size: 22px; color: #fff;">
                <span>
                    Reviews
                </span>
            </div>
        </div>
    </div>
    <style>
        .carousel-control-prev, .carousel-control-next {
            width: 6%;
        }
        .carousel-control-prev:hover, .carousel-control-next:hover {
            background-color: rgba(255,255,255,0.1);
        }
    </style>

    <style>
        .title {
            /* Чтобы спрятать часть линий, которые
            ** будут вылазить за пределы блока */
            overflow: hidden;
            /* Выравнивание заголовка по центру,
            ** можно использовать left, right */
            text-align: center;
            /* Тут можно добавить другие стили для заголовка */
            font-size: 30px;
        }
        .title span {
            /* Стили тега обертки для заголовков
            ** в несколько строк */
            display: inline-block;
            vertical-align: middle;
        }
        .title:before,
        .title:after {
            /* Обязательно указываем пустое свойство content,
            ** иначе псевдоэлементы не появятся на сайте */
            content: "";
            /* Указываем что наши линии будут строчно-блочные и
            ** выравнивание по высоте - по центру */
            display: inline-block;
            vertical-align: middle;
            /* Задаем ширину 100% и выбираем высоту линии,
            ** в нашем примере она равна 4 пикселям */
            width: 100%;
            height: 1px;
            /* Добавляем цвет для линии */
            /*background-color: rgba(255,255,255,.4);*/
            background: rgb(0, 80, 85);
            /* Добавляем пседоэлемантам возможность изменить
            ** позицию линии, для создания отступов от текста */
            position: relative;
        }
        .title:before {
            /* Смещаем левую линию на 100% влево, чтобы линия
            ** встала рядом с текстом слева */
            margin-left: -100%;
            /* Указываем в пикселях отступ линии от текста заголовка */
            left: -14px;
        }
        .title:after {
            /* Смещаем правую линию на 100% вправо, чтобы
            ** линия встала рядом с текстом справа */
            margin-right: -100%;
            /* Указываем в пикселях отступ линии от текста заголовка */
            right: -14px;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
