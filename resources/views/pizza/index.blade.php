@extends('layouts.app')


@section('content')
<div class="container">
    @if (session('message'))
    <div class="alert alert-success" role="alert" id="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="row justify-content-center">

        <div class="col-2">
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">
                            add pizza
                        </a>
                        
                    
                
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">
                            view
                        </a>
                    </ul>
                </div>   
            </div>
        </div>

        <div class="col-md-10">
                
            <div class="card">
                <div class="card-header">Pizza list</div>

                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">...</th>
                            <th scope="col">name</th>
                            <th scope="col">description</th>
                            <th scope="col">S.price</th>
                            <th scope="col">M.price</th>
                            <th scope="col">L.price</th>
                            <th scope="col">category</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pizzas as $key => $pizza)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$pizza->name}}</td> 
                                <td>{{$pizza->description}}</td>
                                <td>{{$pizza->small_pizza_price}}</td>
                                <td>{{$pizza->medium_pizza_price}}</td>
                                <td>{{$pizza->large_pizza_price}}</td>
                                <td>{{$pizza->category}}</td>
                                <td><button class="btn btn-primary" type="">edit</button></td>
                                <td><button class="btn btn-danger" type="">delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(() => {
    const box = document.getElementById('alert');
    box.style.display = 'none';  
    }, 5000);
</script>
@endsection
