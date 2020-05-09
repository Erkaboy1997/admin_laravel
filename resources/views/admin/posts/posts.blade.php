@extends('admin.master')

@section('title','Admin table')

@section('content')


    <div id="content-wrapper">

        <div class="container-fluid">



            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <i class="fas fa-table"></i>
                           Video lavhalar
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <a href="{{route('admin.posts.create')}}" role="button" class="btn btn-primary">Post qo'shish</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="overflow: auto">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post tili</th>
                                    <th>Post sarlavhasi</th>
                                    <th>Post body</th>
                                    <th>Post rasmi</th>
                                    <th>Sozlamalar</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Post tili</th>
                                    <th>Post sarlavhasi</th>
                                    <th>Post body</th>
                                    <th>Post rasmi</th>
                                    <th>Sozlamalar</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>#</td>
                                        <th>{{$post->lang->name}}</th>
                                        <td>{!! $post->title !!}</td>
                                        <td>{!! $post->body !!}</td>
                                        <td style="width: 15%;text-align: center"><img src="{{asset('storage/images/'.$post->image)}}" style="width: 80%;" alt=""></td>
                                        <td><div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sozlamalar
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item text-center"  href="{{route('admin.posts.edit',['id'=>$post->id])}}">O'zgartirish</a>
                                                    <form action="{{route('admin.posts.destroy',['id'=>$post->id])}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <p class="text-center"><button class="dropdown-item btn btn-danger" type="submit" >O'chirish</button></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>







                            <script>
                                CKEDITOR.replace( 'title' );
                            </script>

                            </div>

                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>



            </div>

@endsection
