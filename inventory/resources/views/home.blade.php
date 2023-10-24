@extends('layout.app')

@section('title')
INVENTORY
@endsection

@section('content')
<h1 class="text-center display-4">INVENTORY</h1>

<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="NAME">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="TYPE">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="SERIAL NO.">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="STOCK">
                </div>
                <div class="col d-flex justify-content-center">
                    <button type="button" class="btn btn-sm btn-success">ADD</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                
                <th scope="col">PRODUCT NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">PRICE</th>
                <th scope="col">QUANTITY STOCK</th>

            </tr>
        </thead>
        <tbody>
           
           
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantityinstock }}</td>
                    </tr>
                @endforeach
                <!-- <th scope="row">1</th>
                
                <td>HARDWARE</td>
                <td>1234</td>
                <td>22</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary">EDIT</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">DELETE</button>
                </td> -->
            
            
        </tbody>
    </table>
</div>
@endsection