@extends('admin.layouts.master')

@section('title')
Edit Testimoni
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Edit Testimoni</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
        <form action="{{route('testimoni_admin.update', $datas->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Fembed Youtube</label>
                <input class="form-control" required name="fembed_youtube" id="fembed_youtube" placeholder="Fembed" value="{{$datas->fembed_youtube}}" />
            </div>
            <div class="form-group">
                <label>Kutipan</label>
                <textarea class="form-control" required name="kutipan" id="kutipan" placeholder="Kutipan">{{$datas->kutipan}}</textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
       <br>
    </div>
    <!-- Page end  -->
</div>




@endsection