@extends('admin.layouts.master')

@section('title')
Edit Faq
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Edit Faq</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
        <form action="{{route('faq_admin.update', $datas->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Pertanyaan</label>
                <input class="form-control" required name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan" value="{{$datas->pertanyaan}}" />
            </div>
            <div class="form-group">
                <label>Jawaban</label>
                <input id="jawaban" required type="hidden" name="jawaban" value="{{old('jawaban', $datas->jawaban)}}">
                <trix-editor aria-required="jawaban" input="jawaban"></trix-editor>
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
       <br>
    </div>
    <!-- Page end  -->
</div>




@endsection