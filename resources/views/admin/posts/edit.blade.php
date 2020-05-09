@extends('admin.master')

@section('title','Admin table')

@section('content')


    <div id="content-wrapper">

        <div class="container-fluid">


            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h2 class="text-center text-primary">O'zgartirish</h2>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <form method="post" action="{{route('admin.posts.update',['id'=>$post->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">


                                <div class="col-md-8">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <p style="color:red"> * Avvalgi tili :{!! $post->lang->name !!}</p>
                                            <label for="lang"> * Tilni o'zgartirish</label>
                                            <select class="form-control" name="lang_id" id="cat">
                                                @foreach(\App\Lang::all() as $lang)
                                                    <option value="{{$lang->id}}">{{$lang->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-8 col-sm-12">

                                    <div class="col-md-12 col-sm-12" >
                                        <div class="form-group">
                                            <label for="lang"> * Post sarlavhasini o'zgartirish</label>
                                            <textarea class="form-control" name="title"  id="title"  >
                                                {!! $post->title !!}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-sm-12" >
                                        <div class="form-group">
                                            <label for="lang"> * Postni o'zgartirish</label>
                                            <textarea class="form-control" name="body"  id="body"  >
                                                {!! $post->body !!}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-sm-12" >
                                        <img src="{{asset('storage/images/'.$post->image)}}" style="width: 20%;" alt="">

                                        <div class="form-group">
                                            <label for="lang"> * Rasmni o'zgartirish</label>
                                            <input type="file" class="form-control" name="image" id="image" >

                                        </div>

                                    </div>


                                </div>


                            </div>

                            <button type="submit" class="btn btn-primary">O'zgartirish</button>
                        </form>



                        <script>
                            CKEDITOR.replace( 'title' );
                        </script>

                        <script>
                            CKEDITOR.replace( 'body' );
                        </script>


                        <br>
                    </div>
                </div>


                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

            <p class="small text-center text-muted my-5">
                <em>More table examples coming soon...</em>
            </p>

        </div>

        @endsection
        @section('scripts')

            <script>
                $(document).ready(function(){
                    $('#lang').on('change',function () {
                        var lang_id = $('select').val();

                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                        $.ajax({
                            /* the route pointing to the post function */
                            url: '/lang',
                            type: 'POST',
                            /* send the csrf-token and the input to the controller */
                            data: {_token: CSRF_TOKEN,lang:lang_id},
                            dataType: 'JSON',
                            success: function (data) {
                                $.each( data, function( key, value ) {
                                    $('#cat').append($('<option value='+ value.id+'>' + value.name + '</option>'));
                                });
                            }
                        });
                    });
                });
            </script>

@endsection
