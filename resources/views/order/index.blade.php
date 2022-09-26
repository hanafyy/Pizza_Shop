@extends('layouts.app')


@section('content')

<div class="container">
    @if (session('message'))
    <div class="alert alert-success" role="alert" id="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="row justify-content-center">

        <div class="col-md-12">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">orders</li>
            </ol>
        </nav>

            <div class="card">
                <div class="card-header">orders list</div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">customer name</th>
                            <th scope="col">email / phone</th>
                            <th scope="col">date / time</th>
                            <th scope="col">pizza</th>
                            <th scope="col">s size</th>
                            <th scope="col">m size</th>
                            <th scope="col">l size</th>
                            <th scope="col">total $</th>
                            <th scope="col">message</th>
                            <th scope="col">status</th>
                            <th scope="col">accept</th>
                            <th scope="col">reject</th>
                            <th scope="col">delivered</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $key => $order)
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->email}} / {{$order->phone}}</td>
                                <td>{{$order->date}} / {{$order->time}}</td>
                                <td>{{$order->pizza->name}}</td>
                                <td>{{$order->small_pizza}}</td>
                                <td>{{$order->medium_pizza}}</td>
                                <td>{{$order->large_pizza}}</td>
                                <td>
                                {{
                                    ($order->pizza->small_pizza_price * $order->small_pizza )+
                                    ($order->pizza->medium_pizza_price * $order->medium_pizza)+
                                    ($order->pizza->large_pizza_price * $order->large_pizza)
                                }}
                                </td>
                                <td>{{$order->body}}</td>
                                <td class="text-bg-secondary">{{$order->status}}</td>
                                <form action="{{route('user.order.status',$order->id)}}"  method="post">@csrf
                                    <td><input name="status" type="submit" value="accepted" class="btn btn-primary"></td>
                                    <td><input name="status" type="submit" value="canceled" class="btn btn-danger"></td>
                                    <td><input name="status" type="submit" value="completed" class="btn btn-success"></td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection