@extends('admin.layouts.master')

@section('title')
Create Jurnal
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Create Jurnal</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <form action="{{route('jurnal_admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="form-label" for="gambar_jurnal">Gambar Jurnal</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input type="file" required class="form-control" name="gambar_jurnal" id="gambar_jurnal" 
                onchange="previewImage()" />
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" required name="judul" id="judul" placeholder="Judul" value="{{old('judul')}}" />
            </div>
            <div class="form-group">
                <label class="form-label" for="file jurnal">File Jurnal PDF</label>
                <input type="file" required class="form-control" name="file_jurnal" id="file_jurnal"/>
            </div>
            <input type="submit" value="Upload" class="btn btn-primary">
        </form>
    </div>
    <br>
    <!-- Page end  -->
</div>



<script>

    function previewImage() {
    const image = document.querySelector('#gambar_jurnal');
    const imgPreview = document.querySelector('.img-preview')
    
    imgPreview.style.display ='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

    }
</script>




@endsection