<header id="header_redesigned">
    <div class="header">
        <div class="header-nav-block">
            <div class="header-nav-holder">
                <div class="header_right">
                    <button class="header-search__toggle" style="display: none"></button>
                    <div class="header-notification">
                        <a href="#" class="header-notification__link">
                            <span class="header-notification__number" style="display: none"></span>
                        </a>
                    </div>
                    <div class="header_currency currency first_lan" style="padding-left: 10px;">
                        <a href="{{route('cart.page')}}" style="font-size: 12px;">Открыть корзину <span id="cartCountItems"></span></a>
{{--                        <a href="#" class="currency-link currency-selected" data-tf-inspect="-1609461109">$</a>--}}
{{--                        <ul class="currency-list" style="display: none;">--}}
{{--                            <li>--}}
{{--                                <a rel="EUR" id="change_lang_EUR" class="currency-link trigger-currency-switch" href="javascript:void(0);" data-tf-inspect="-1609461109">€</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
                <div class="header-search">
                    <form action="" class="header-search__form">
                        <fieldset>
                                <span class="header-search__icon">

                                </span>
                            <input type="text" required="" class="header-search__input js-search_input" placeholder="Search your service">
                            <button type="reset" class="header-search__close" data-tf-inspect="-1609461109"></button>
                        </fieldset>
                    </form>
                </div>
                <div class="header_games games">
                    <ul class="list-menu-header">
                        <li itemscope="" itemtype="" class="list-element active">
                            <a class="games-link" id="change_game34_7" rel="7">
                                <div class="games-link__text">Destiny 2 </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            $url = url()->current();
        ?>
        @if($url == 'http://borealisteam.public/list/view')
        <div id="header_gallery_service" class="header_gallery_service gallery-service">
            <div class="header_gallery_wrap">
                <ul class="header_list_service list_service">
                    @foreach($categories as $category)
                        @if($category->active == 'activated')
                            <li class="type-button">
                                <a href="/">{{$category->title}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
</header>
<style>
    #header_gallery_service {
        transition: .7s ease-in-out;
    }
</style>
<script !src="">
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header_gallery_service").style.top = "0";
        } else {
            document.getElementById("header_gallery_service").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>
