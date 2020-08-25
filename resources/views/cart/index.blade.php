@extends('layouts.layout-front')
@section('content')
    <div class="D2HomePage" style="background: #000;">
        <div class="container-fluid" style="left: 785px; top: 282px; color: #fff;">
            <h1>Your cart (items)</h1>
            <div class="col-md-12 d-flex">
                <div class="col-md-7">
                    <div class="row justify-content-start" >
                        <div id="forReload">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th width="600px">item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Options</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($getProducts))
                                    @foreach($getProducts as $product => $name)
                                        <tr>
                                            <th scope="row"><a href="{{route('order.page', $name->id)}}">{{$name->title}}</a></th>
                                            <td>{{$name->price}}</td>
                                            <td></td>
                                            <td>@mdo</td>
                                            <td><form action=""><a href="#" onclick="delete_item({{$product}}); return false;">Delete</a></form></td>
                                        </tr>
                                    @endforeach
                                @else
                                    Empty
                                @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-md-4" style="color: #0e0e0e;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total items:</h5>
                            <br>
                            <h6 class="card-subtitle mb-2 text-muted">Subtotal:</h6>
                            <p class="card-text">Grand total:</p>

                            <div>
                                <textarea name="" id="" cols="50" rows="5" style="min-width: 420px; min-height: 120px;" placeholder="Add your comment"></textarea>
                            </div>
                            <br>

                            <button class="btn btn-success">Check out</button>
                            <br>

                        </div>

                    </div>
                    <div class="col-md-6" id="above_success" style="display: none;">
                        <div id="success" class="alert alert-success" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script !src="">
        function delete_item(id) {
            $.ajax({
                type: 'POST',
                url: '/cart/deleteFromCart',
                data: {id: id,},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                dataType: 'json',
                success: function (data) {
                    $('#above_success').css('display', 'block');
                    $('#success').html(data['Content']);
                    $("#forReload").load(document.URL + ' #forReload');
                    setTimeout(function() { $('#above_success').css('display', 'none'); }, 3000);
                }
            })
        }
    </script>
@endsection
