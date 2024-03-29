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
                                <a href="{{route('edit.category',$category->id)}}"  class="btn btn-info btn-sm" type="submit">Edit</a>
                                <button  data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        {{-- delete model --}}
                        <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Confiramation</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Are You Sure You Want To Delete This Category ?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                  <a type="submit" href="{{route('delete.category',$category->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

@endsection


