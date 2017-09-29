@extends('layouts.main')





@section('content')





            <div class="col-sm-9 col-md-offset-1">
                <div class="panel panel-default">

                    @if(count($errors))

                        <ul class="alert alert-danger">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    @endif

                    <div class="panel-heading"><h1>create a new post</h1></div>


                    <div class="panel-body">



                        <form method="POST" action="/posts" enctype="multipart/form-data" >

                            {{ csrf_field() }}

                            <div class="form-group">

                                <label for="featured_photo">Featured photo:</label>

                                <input type="file" name="featured_photo">

                            </div>


                            <div class="form-group">

                                <label for="section_id">Choose a Section:</label>

                                <select name="section_id" id="section_id" class="form-control">

                                    <option value="">Choose one</option>

                                    @foreach (Allutomotive\Category::all() as $category)

                                        <option value="{!! $category->id !!}">{{ $category->name }}</option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="title">Title:</label>

                                <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ old('title') }}">

                            </div>

                            <div class="form-group">

                                <label for="description">Metadata:</label>

                                <input type="text" class="form-control" id="description" placeholder="metadata" name="description" value="{{ old('description') }}">

                            </div>

                            <div class="form-group">

                                <label for="keywords">Keywords:</label>

                                <input type="text" class="form-control" id="keywords" placeholder="keywords" name="keywords" value="{{ old('keywords') }}">

                            </div>


                            <div class="form-group">

                                <label for="importance">Importance:</label>

                                <input type="number" class="form-control number" id="importance" placeholder="importance" name="importance" value="{{ old('importance') }}">

                            </div>





                            <div class="form-group">

                                <label for="body">Body:</label>

                                <textarea name="body"  id="body" class="form-control" rows="18">{{ old('body') }}</textarea>

                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>



                        </form>



                    </div>

                </div>
            </div>


            <script src="{{ URL::to('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>

            <script>
                var editor_config = {
                    path_absolute : "/",
                    selector: "textarea",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor colorpicker textpattern"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                    relative_urls: false,
                    file_browser_callback : function(field_name, url, type, win) {
                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                        if (type === 'image') {
                            cmsURL = cmsURL + "&type=Images";
                        } else {
                            cmsURL = cmsURL + "&type=Files";
                        }

                        tinyMCE.activeEditor.windowManager.open({
                            file : cmsURL,
                            title : 'Filemanager',
                            width : x * 0.8,
                            height : y * 0.8,
                            resizable : "yes",
                            close_previous : "no"
                        });
                    }
                };

                tinymce.init(editor_config);
            </script>


@endsection
