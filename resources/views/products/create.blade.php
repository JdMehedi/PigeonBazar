@extends('layouts.app')


@section('content')



<div class="container" >
 
    <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8 col-md-offset-2">
            @if(count($errors) > 0 )
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                    @endforeach
            </ul>
            @endif

            <div class="card card-default">
                <div class="card-heading text-center">
                    <h3 class="my-2">Dashboard</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Name</label>
                             <input type="text" name="name" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="text" name="price" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="name"> Image</label>
                             <input type="file" name="image" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success form-control "  type="submit">
                                Store Products
                            </button>

                        </div> 
        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection