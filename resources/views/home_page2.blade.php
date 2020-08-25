@extends('layouts.layout-front')
@section('content')
    <div class="window-margin">
        <div class="window">

            <aside class="sidebar">
                <div class="top-bar">
                    <p class="logo">BorealisTeam</p>
                </div>

{{--                <div class="search-box">--}}
{{--                    <input type="text" placeholder="Search..."/>--}}
{{--                    <p class="fa fa-search"></p>--}}
{{--                </div>--}}

                <menu class="menu">
                    <p class="menu-name"></p>
                    <ul>
{{--                        <li class="active">--}}
{{--                            <a href="#">Action / Adventure</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Latest</a></li>--}}
{{--                                <li class="active"><a href="#">Popular</a></li>--}}
{{--                                <li><a href="#">Coming soon</a></li>--}}
{{--                                <li><a href="#">Staff picks</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">HOMEPAGE</a></li>
                        <li><a href="#">OFFERS</a></li>
                        <li><a href="#">JOBS / SELL</a></li>
                        <li><a href="#">QUESTIONS</a></li>
                    </ul>

                    <div class="separator"></div>

                    <ul class="no-bullets">
                        <li><a href="#">Latest news</a></li>
                        <li><a href="#">Critic reviews</a></li>
                        <li><a href="#">Box office</a></li>
                        <li><a href="#">Top 250</a></li>
                    </ul>

                    <div class="separator"></div>
                </menu>
            </aside>


            <div class="main" role="main">

                <div class="top-bar">

                    <div class="profile-box">
                        <div class="circle"></div>
                        <span class="arrow fa fa-angle-down"></span>
                    </div>

                    <ul class="top-menu">
                        <li class="menu-icon trigger-sidebar-toggle">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </li>
                        <li><a href="#">DESTINY 2</a></li>
{{--                        <li><a href="#">Articles</a></li>--}}
{{--                        <li class="active"><a href="#">Movies & Films</a></li>--}}
{{--                        <li><a href="#">Television</a></li>--}}
{{--                        <li><a href="#">Music</a></li>--}}
{{--                        <li><a href="#">Celebrities</a></li>--}}
                    </ul>

                </div> <!-- top bar -->


{{--                <div class="featured-movie">--}}
{{--                    <img class="cover" src="" alt="" class="cover" />--}}
{{--                    <p class="corner-title">Staff pick</p>--}}

{{--                    <div class="bottom-bar" STYLE="margin-top: 100px;">--}}
{{--                        <div class="title-container">--}}
{{--                            <span class="fa fa-play-circle"></span>--}}
{{--                            <b>Ничо</b> Не написано--}}
{{--                        </div>--}}

{{--                        <div class="right">--}}
{{--                            <div class="stars">--}}
{{--                                <span class="fa fa-star"></span>--}}
{{--                                <span class="fa fa-star"></span>--}}
{{--                                <span class="fa fa-star"></span>--}}
{{--                                <span class="fa fa-star-half-o"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}
{{--                            </div>--}}
{{--                            <div class="share">--}}
{{--                                <icon class="fa fa-share-square"></icon> Share--}}
{{--                            </div>--}}
{{--                        </div> <!-- right -->--}}
{{--                    </div> <!-- bottom bar -->--}}
{{--                </div> <!-- featured -->--}}


                <div class="movie-list">
                    <div class="title-bar">
                        <div class="left">
                            <p class="bold">Popular </p>
                            <p class="grey">Action / Adv</p>
                        </div> <!-- left -->
                        <div class="right">
                            <a class="blue" href="#">Rating <i class="fa fa-angle-down"></i></a>
                            <a href="#">Newest</a>
                            <a href="#">Oldest</a>
                        </div> <!-- right -->
                    </div> <!-- title-bar -->

                    <ul class="list">
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Sin City: A Dame To Kill For</p>
                            <p class="genre">Action, Crime</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Transcendence</p>
                            <p class="genre">Action, Drama</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Need For Speed</p>
                            <p class="genre">Action, Crime</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">The Amazing Spiderman</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Pompeii</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Divergent</p>
                            <p class="genre">Action, Sci-Fi</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Guardians of the Galaxy</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">X-Men: Days of Fury</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Captain America: The Winter Soilder</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Divergent</p>
                            <p class="genre">Action, Sci-Fi</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">RoboCop (2014)</p>
                            <p class="genre">Action, Crime</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Transcendence</p>
                            <p class="genre">Action, Drama</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Need For Speed</p>
                            <p class="genre">Action, Crime</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Pompeii</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Sin City: A Dame To Kill For</p>
                            <p class="genre">Action, Crime</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">X-Men: Days of Fury</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">The Amazing Spiderman</p>
                            <p class="genre">Action, Adventure</p>
                        </li>
                        <li>
                            <img src="" alt="" class="cover" />
                            <p class="title">Divergent</p>
                            <p class="genre">Action, Sci-Fi</p>
                        </li>
                    </ul>

                    <a href="#" class="load-more">Show more movies <span class="fa fa-plus"></span></a>

                </div> <!-- movie list -->


            </div> <!-- main -->

        </div> <!-- window -->
    </div> <!-- window margin -->
@endsection
