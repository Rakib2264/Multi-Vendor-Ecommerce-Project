@extends('admin.master')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Seo Settings</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-xl-9 mx-auto">
         <hr>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Category</h5>
                    </div>
                    <hr>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="{{route('store.seo')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Site Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="inputEnterYourName" placeholder="Enter Category Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Meta Tags(Keywords)</label>
                        <div class="col-sm-9">
                            <input type="text" name="keyword" class="form-control" id="inputEnterYourName" placeholder="Enter Category Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Meta Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" cols="15" rows="5"></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Author Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="author" class="form-control" id="inputEnterYourName" placeholder="Enter Category Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Febicon</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="inputPhoneNo2" name="feb">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Add Now</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

