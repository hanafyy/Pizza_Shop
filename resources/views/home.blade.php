@extends('layouts.app')

@section('content')
<div class="container">
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
                    </ul>
                </div>   
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza list</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
