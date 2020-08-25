@extends('layouts.layout-front')


@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container-fluid" style="color: #fff; margin-left: 0;">
            <div class="row justify-content-lg-start">
                <div class="col-md-6" style="padding-top: 10px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('Create new tasks') }}</div>

                        <div class="card-body">
                            <form class="create_service_form" {{--method="POST" --}}{{--action="{{route('create.service')}}"--}} enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="title" class="input-label-profiler text-center" value="Title" readonly>
                                        <input type="text" name="title" class="input-profiler" value="" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12" style="display: flex; align-items: flex-start;">
                                        <input class="input-label-profiler text-center" value="Description" style="margin-right: 5px;" readonly>
                                        <textarea name="description" id="description" type="text" class="input-textarea-admin"></textarea>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="input-label-profiler text-center" value="Price $" readonly>
                                        <input id="num" type="number" name="price" class="input-profiler" value="" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="input-label-profiler text-center" value="Category" readonly>
                                        <select name="category[]" id="select_category" multiple="multiple">
                                            @if(!empty($category_list))
                                                @foreach($category_list as $category)
                                                    <option value="{{$category->id}}">
                                                        {{$category->title}}
                                                    </option>
{{--                                                    <option value="{{$category->id}}">{{$category->title}}</option>--}}
                                                @endforeach
                                            @endif
                                        </select>
{{--                                        <select name="category" aria-hidden="true" class="input-profiler" multiple>--}}
{{--                                            @if(!empty($category_list))--}}
{{--                                            @foreach($category_list as $category)--}}
{{--                                                <option value="{{$category->id}}">{{$category->title}}</option>--}}
{{--                                            @endforeach--}}
{{--                                            @endif--}}
{{--                                        </select>--}}
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">



                                    <div class="col-md-12">
                                        <input class="input-label-profiler text-center" value="Price / List Options" style="margin-bottom: 10px;" readonly />
                                        <div id="parse_options">
                                        <input class="input-profiler" type="button" id="bt" value="+Add option" onclick="createChk()" style="margin-bottom: 10px;" />
                                        </div>
                                        <p id="container"></p>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-md-12" style="display: flex; align-items: flex-start;">
                                        <label class="input-label-profiler" for="imgInp" style="margin-right: 30px;">Click here to Upload image</label>
                                        <input type="file" name="image" id="imgInp" class="brt">
                                        <img class="brt input-profiler" id="blah" src="#" alt="your image" style="max-width: 300px; max-height: 250px;" />
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="button-gb-gradient-register">
                                            {{ __('Create task') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="padding-top: 10px;">
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('Create new category') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('create.category')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="input-label-profiler text-center" value="Title" readonly>
                                        <input type="text" name="title" class="input-profiler" value="" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="button-gb-gradient-register">
                                            {{ __('Create category') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="background: #222; border-radius: 0;">
                        <div class="row justify-content-center card-header">{{ __('list category') }}</div>
                        <div class="card-body">
                            <form id="dis-del" action="{{route('create_dis_button')}}" method="post">
                                @csrf
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td width="200px;">Title</td>
                                        <td>Disable</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category_list as $category)
                                        <tr>
                                            <td>{{$category->title}}</td>
                                            <td><input type="checkbox" name="{{$category->id.'_btn-category'}}" value="{{$category->id}}" id=""></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </form>
                            <button form="dis-del" class="button-gb-gradient-register col-md-4" name="btn-del">delete</button>
                            <button form="dis-del" class="button-gb-gradient-register col-md-4" name="btn-dis">disable from list</button>
                            <button form="dis-del" class="button-gb-gradient-register col-md-3" name="btn-act">activate</button>
                        </div>
                        <div class="row justify-content-center">
                            <?php echo $category_list->render();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /*.brbr {*/
        /*    display: inline-block;*/
        /*    padding: 10px 5px 10px 5px;*/
        /*    text-align: center;*/
        /*    background: silver;*/
        /*    background-size: contain;*/
        /*    background-repeat: no-repeat;*/
        /*    background-position: center;*/
        /*}*/

        .brt {
            display: none;
        }
    </style>
    <script !src="">
        $('#select_category').selectpicker();
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        openDisplay = document.getElementById('blah');
        $("#imgInp").change(function() {
            openDisplay.style.display = 'block';
            readURL(this);
        });


        var i = 1;

        function createChk() {
                var checkbox = document.createElement('input');
                checkbox.setAttribute('type', 'text');
                checkbox.setAttribute('class', 'input-profiler text-center');
                checkbox.setAttribute('style', 'margin-bottom: 5px; margin-right: 5px; width: 19%');
                checkbox.setAttribute('placeholder', 'Enter a price');
                checkbox.setAttribute('name', 'price_option_' + i);
                checkbox.setAttribute('data-name', 'price_option_i' + i);

                var new_input = document.createElement('input');
                new_input.setAttribute('for', 'option' + i);
                new_input.setAttribute('type', 'text');
                new_input.setAttribute('class', 'input-profiler');
                new_input.setAttribute('style', 'margin-bottom: 5px;');
                new_input.setAttribute('placeholder', 'Enter a option');
                new_input.setAttribute('name', 'option_name_' + i);
                new_input.setAttribute('data-name', 'option_name_i' + i);
                container.appendChild(checkbox);
                container.appendChild(new_input);
                i++;
        }

    </script>
    <script !src="">
        $(document).ready(function () {
            $('.create_service_form').on('submit', function (e) {
                e.preventDefault();

                var data = $('.create_service_form').serializeArray();
                console.log(data);
                // var data = document.querySelectorAll('.create_service_form');
                // var data = document.querySelector('.create_service_form');
                var options = document.getElementById('container').childNodes;
                let price = [];
                let title_op = [];
                let obj={
                    push:function push(element) {
                        [].push.call(this,element)
                    }
                };

                let obj2={
                    push:function push(element) {
                        [].push.call(this,element)
                    }
                };
                var iterator = 1;
                for(let i = 0; i < options.length; i++) {
                    console.log(options[i].name);
                    if(options[i].name === 'price_option_' + iterator.toString()) {
                        obj.push({name:options[i].name, title: options[i].value});
                    }
                    else if(options[i].name === 'option_name_' + iterator.toString()) {
                        obj2.push({name:options[i].name, title: options[i].value});
                        iterator++;
                    }
                }
                var url = '/create/service';
                var formData = new FormData(this);
                // formData.append('obj',JSON.stringify(obj));
                // formData.append('obj2', JSON.stringify(obj2));

                $.ajax({
                    type: 'post',
                    url: url,
                    data: formData,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    // dataType: 'JSON',
                    success: function(data) {
                        // location.reload()
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        // console.log(errors);
                    }
                });
            })
        });
    </script>
@endsection
