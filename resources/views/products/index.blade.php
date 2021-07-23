@extends('layouts.app')



@section('content')

<div class="container " >
  
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8 ">
            <div class="card card-default">

                <div class="card-heading">
                  <h3 class="text-center my-2">Products</h3>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </thead>

                        <tbody>
                            @if($products->count() > 0)
                                @foreach($products as $product)
                                    <tr>

                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td><a class="btn btn-sm btn-info" href="{{ route('products.edit',['id'=>$product->id] )}}">Edit</a></td>
                                        <td>
                                            <form action="{{route('products.destroy',['id'=>$product->id ])}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}

                                                <button class="btn btn-danger btn-sm">Delete</button>

                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                @else
                                <tr>
                                    <th colspan="5" class="text-center">
                                        <h3>No post published yet</h3>
                                    </th>
                                </tr>
                                @endif
                           

                        </tbody>
                    </table>
                    <div class="text-center">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection