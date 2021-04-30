@extends('layouts.Admin.Dashboard.Home')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
            <br>
            <a href="/category/create"><button class="btn btn-success">ADD NEW CATEGORY</button></a>
            <br>
        </div>
        @if ($message = Session::get('success'))

            <div class="alert alert-success">

                <p>{{ $message }}</p>

            </div>
        @elseif($message = Session::get('warning'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @elseif($message = Session::get('danger'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CATEGORY
                        </h2>
                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>CATEGORY NAME</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    @foreach ($categorys as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td><img src="/image/{{ $category->image }}" width="100px"></td>
                                        <td>
                                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">

                                                <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>

                                                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
        
    </div>
</section>
@endsection