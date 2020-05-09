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
                            <a href="{{route('admin.videos.create')}}" role="button" class="btn btn-primary">Video qo'shish</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="overflow: auto">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sarlavha tili</th>
                                    <th>Video sarlavhasi</th>
                                    <th>Video link</th>
                                    <th>Video Sozlamalar</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Sarlavha tili</th>
                                    <th>Video sarlavhasi</th>
                                    <th>Video link</th>
                                    <th>Video Sozlamalar</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($videos as $video)
                                    <tr>
                                        <td>#</td>
                                        <th>{{$video->lang->name}}</th>
                                        <td>{!! $video->title !!}</td>
                                        <td>
                                            <iframe width="100" height="100" src="{{$video->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </td>
                                        <td><div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sozlamalar
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item text-center"  href="{{route('admin.videos.edit',['id'=>$video->id])}}">O'zgartirish</a>
                                                    <form action="{{route('admin.videos.destroy',['id'=>$video->id])}}" method="post">
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
