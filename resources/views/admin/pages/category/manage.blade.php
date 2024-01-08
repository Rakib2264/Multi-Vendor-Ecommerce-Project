@extends('admin.master')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
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
                              <th scope="col">Category Slug</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                        @php
                             $sl = 1;
                        @endphp
                        @foreach ($categories as $category)
                        <tr>
                            <td scope="col">{{$sl++}}</td>
                            <td scope="col">{{$category->cat_name}}</td>
                            <td scope="col">{{$category->cat_slug}}</td>
                            <td scope="col">
                            <img src="{{asset('uploads/category/'.$category->cat_image)}}" alt="">
                            </td>
                            <td scope="col">
                                <button class="btn btn-info btn-sm" type="submit">Edit</button>
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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


