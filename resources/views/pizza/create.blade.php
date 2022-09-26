@extends('layouts.app')

@section('content')
<div class="container-fluid ">

<div class="row justify-content-center">

    <div class="col-3">
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

                <a href="{{route('user.order')}}" class="list-group-item list-group-item-action">
                    user orders
                </a>
            </ul>
        </div>   
    </div>
    </div>

    <div class="col-7">
    <div class="card">
        <h5 class="card-header">add pizza form</h5>
        <div class="card-body">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error )
                    <p>{{$error}}</p>
                @endforeach
                </div>
            @endif
            <form action="{{route('pizza.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    

                <div class="form-group">
                    <label for="name" class="mb-1">name of the pizza:</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="description" class="mb-1">description of the pizza:</label>
                    <textarea name="description" id="description" cols="30" rows="10" for="description" class="form-control"></textarea>
                </div>

                <div class="form-inline ">
                    <label for="price" class="mb-1 ">prices of the pizza:</label>
                    <input type="number" name="small_pizza_price" class="form-control mb-1 " placeholder="price of the SM size pizza">
                    <input type="number" name="medium_pizza_price" class="form-control mb-1 " placeholder="price of the MD size pizza">
                    <input type="number" name="large_pizza_price" class="form-control " placeholder="price of the LG size pizza">
                </div>

                <div class="form-group ">
                    <label for="category" class="mb-1">category of the pizza:</label>
                    <select name="category" id="category" class="form-control">
                        <option value="vegetarian">vegetarian</option>
                        <option value="nonvegetarian">nonvegetarian</option>
                        <option value="traditional">traditional</option>
                    </select>
                </div>

                <div class="form-group ">
                    <label for="image" class="mb-1">image of the pizza:</label>
                    <input type="file" class="form-control" name="image" >      
                </div>

                <div class="form-group mt-1 text-center">
                    <button class="btn btn-primary" type="submit">submit</button>
                </div>
            </form>

        </div>   
    </div>
    </div>





</div>

</div>



@endsection