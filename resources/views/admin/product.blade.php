<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        .title {
            padding-top: 25px;
            font-size: 25px;

        }

        label {
            display: inline-block;
            width: 200px;
            color: white;
        }


    </style>
</head>
<body>
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        <h1 class="title">Add Product</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data" style="color: black;">
            @csrf
        <div class="mt-3">
            <label>Product title</label>
            <input type="text" name="title" placeholder="Give a product title" required="" style="color: black;">
        </div>
        <div class="mt-3">
            <label>Price</label>
            <input type="number" name="price" placeholder="Give a price title " required="" style="color: black;">
        </div>
        <div class="mt-3">
            <label>Description</label>
            <input type="text" name="des" placeholder="Give a product description" required="" style="color: black;">
        </div>
        <div class="mt-3">
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="Product Quantity" required="" style="color: black;">
        </div>
        <div class="mt-3">
            <input type="file" name="file" style="color: white;">
        </div>
        <div class="mt-3">
            <input type="submit" class="btn btn-primary">
        </div>
        </form>
    </div>

</div>
<!-- partial -->
@include('admin.script')
</body>
</html>
