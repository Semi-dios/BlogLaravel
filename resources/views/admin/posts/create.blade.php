@extends('admin.layout')



@section('header')
    <h1>

        Form Create Post
    <small>Form </small>
  </h1>


  <ol class="breadcrumb">
      <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Administration</a> </li>
      <li><a href="{{route('admin.post.index')}}"><i class="fa fa-list"></i> Show Post</a></li>
      <li class="active">Posts</li>
  </ol>

@stop
@section('content')
<form action="{{ route('admin.post.store')}}" method="POST">
    {{csrf_field()}}
<div class="form-row">
    <div class="col-sm-12 form-group col-lg-8">
        <div class="box box-primary shadow">
            <div class="box-header">
                <h3 class="box-title">Create Post</h3>
            </div>
            <div class="box-body">
                    <div class="form-row">
                        <div class="form-group {{$errors->has('title') ? 'has-error' :  ''}}">
                           <label for="">Title Post</label>
                           <input type="text" name="title" class="form-control" value="{{old('title')}}" >
                           {!!$errors->first('title', '<span class="help-block">:message</span>')!!}
                        </div>

                        <div class="form-group {{$errors->has('editor') ? 'has-error' : ''}}">
                           <label for="">Content Post</label>

                           <textarea id="editor1" name="editor" rows="10" cols="80" >
                            {{old('editor')}}
                            </textarea>
                            {!! $errors->first('editor', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 form-group col-lg-4">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">

                </h3>
            </div>
            <div class="box-body">
                <div class="form-row">
                    <div class="form-group {{$errors->has('excerpt') ? 'has-error' : ''}}">
                        <label for="">Excerpt  Post</label>
                        <textarea type="text" name="excerpt" class="form-control" >    {{old('excerpt')}}</textarea>
                        {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
                     </div>
                    <div class="form-group {{$errors->has('categories') ? 'has-error' : ''}}">
                        <label for="">Category</label>
                        <select name="categories" id="" class="select form-control">
                            <option value="">Select Category</option>
                          @foreach ( $categories as $category )
                                <option value="{{$category->id }}"
                                    {{ old('categories')  == $category->id  ? 'selected' : '' }}>
                                    {{$category->name }}</option>
                          @endforeach
                        </select>
                        {!! $errors->first('categories', '<span class="help-block">:message</span>') !!}
                     </div>
                     <div class="form-group ">

                        <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" name="multiple[]" style="width: 100%;">
                        @foreach ( $tags as $tag )
                        <option value="{{$tag->id}}" {{collect(old('multiple'))->contains($tag->id) ? 'selected' : ''}}>{{ $tag->name}}</option>
                        @endforeach
                        </select>

                    </div>
                        <!-- /.form-group -->
                        <!-- Date -->
                    <div class="form-group">
                        <label>Date Published:</label>

                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                             <input type="text" class="form-control pull-right"  name="date" id="datepicker">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <button class="btn-primary btn btn-block">Save Post</button>
                     </div>
                </div>
        </div>
    </div>
</div>

</form>

@push('scripts')
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<!-- Select2 -->
<script src="/adminlte/plugins/select2/select2.full.min.js"></script>
<script>

    //Date picker
        $('#datepicker').datepicker({
        autoclose: true
        });
          // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor');
      //Initialize Select2 Elements
      $(".select2").select2();
</script>
@endpush
@endsection
