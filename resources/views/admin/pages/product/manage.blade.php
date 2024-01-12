@extends('admin.master')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Product</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover table-bordered table-striped ">

                    <thead>
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Category Name</th>
                              <th scope="col">Sub Category</th>
                              <th scope="col">Brand</th>
                              <th scope="col">Product Name</th>
                              <th scope="col">Qty</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                        @php
                             $sl = 1;
                        @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td scope="col">{{$sl++}}</td>
                            <td scope="col">{{$product->cat->cat_name}}</td>
                            <td scope="col">{{$product->subcat->subcat_name}}</td>
                            <td scope="col">{{$product->brand->brand_name}}</td>
                            <td scope="col">{{$product->product_name}}</td>
                            <td scope="col">{{$product->quantity}}</td>
                            <td scope="col">
                            <img src="{{asset('uploads/product/'.$product->image)}}" height="100px" width="100px" alt="">
                            </td>
                            <td scope="col">
                                <a class="btn btn-success"><i class="fa-solid fa-pen-to-square fa-fade"></i></a>
                                <a class="btn btn-info"><i class="fa-solid fa-eye fa-fade"></i></a>
                                <a class="btn btn-danger"><i class="fa-solid fa-trash-can fa-fade"></i></a>
                            </td>
                        </tr>



                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

@endsection


