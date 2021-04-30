@extends('layouts.Admin.Dashboard.Home')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
            <br>
            <a href="/category"><button class="btn btn-info">Back</button></a>
            <br>
        </div>

         <!-- Basic Examples -->
         <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Upload Video
                        </h2>
                    </div>
                    <div class="body">
                        
                        <form action="{{ route('watch.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Video:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="Video">
                                    </div>
                                </div>
                                <input type="hidden" value="{{ $category->id }}" name="category_id">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

         <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{ $category->name}}
                        </h2>
                    </div>
                    <div class="body">
                        
                        <a href="{{ route('watch.create') }}"><button class="btn btn-success">ADD VIDEO</button></a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>TITLE</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   @foreach ($videos as $video)
                                        @if ($video->category_id == $category->id)
                                            <tr>
                                                <td>{{ $video->name }}</td>
                                                <td>
                                                    <iframe src="/image/{{ $video->image }}" frameborder="0" width="300px" height="300px"></iframe>
                                                </td>
                                                <td>
                                                   <p>comming soon</p>
                                                </td>
                                            </tr>
                                        @endif
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