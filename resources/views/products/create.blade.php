@extends('layouts.app')


@section('content')


<form method="POST" action="/users">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3>Add Product</h3>
                <div class="form-group">
                    <select name="type"  class="form-control type" >
                        <option disabled selected>Type</option>
                        <option value="client" class="capitalize">client</option>
                        {{--  <option value="support" class="capitalize">support</option>  --}}
                        <option value="admin" class="capitalize">admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="project_id"  class="form-control project" >
                        <option disabled selected>Project</option>
                        {{--  @foreach ($projects as $project)
                        <option value="{{ $project->id }}" class="capitalize">{{ $project->name }}</option>
                        @endforeach  --}}
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" id="image" class="form-control" data-toggle="modal" data-target="#image-modal">
                    <input type="hidden" name="image" id="image-data">
                    <div class="modal" id="image-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div id="upload-demo"></div>
                                            <button class="btn btn-primary btn-block upload-image">Upload Image</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;margin:0 auto"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-success">Add</button>
                    <a href="/users" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</form>



@endsection
