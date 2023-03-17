@extends('admin.layouts.master')

@section('title')
Create Faq
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Create Faq</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <form action="{{route('faq_admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Pertanyaan</label>
                <input class="form-control" required name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan" value="{{old('petranyaan')}}" />
            </div>
            <div class="form-group">
                <label>Jawaban</label>
                <textarea class="form-control" required name="jawaban" id="jawaban" placeholder="Jawaban"></textarea>
            </div>
            <input type="submit" value="Upload" class="btn btn-primary">
        </form>
    </div>
    <br>
    <!-- Page end  -->
</div>





@endsection