@extends('admin.layouts.master')

@section('title')
Create Manfaat
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Create Blog</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <form action="{{route('perlu_anda_tahu.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="form-label" for="gambar_ikon">Ikon</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input type="file" required class="form-control" name="gambar_ikon" id="gambar_ikon" 
                onchange="previewImage()" />
            </div>
            <div class="form-group">
                <label class="form-label" for="gambar_perlu">Gambar</label>
                <img class="img-preview2 img-fluid mb-3 col-sm-5">
                <input type="file" required class="form-control" name="gambar_perlu" id="gambar_perlu" 
                onchange="previewImage2()" />
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" required name="nama_perlu" id="nama_perlu" placeholder="Nama perlu" value="{{old('nama_manfaat')}}" />
            </div>
            {{-- <div class="form-group">
                <b>Isi Blog</b>
                <textarea class="form-control" required name="isi" id="isi" placeholder="Isi Blog"></textarea>
            </div> --}}

            <div class="form-group">
                <label for="pengertian">Pengertian</label>
                @error('pengertian')
                <p class="text-danger">Pengertian Harus diisi</p>
                    
                @enderror
                <input id="pengertian" required type="hidden" name="pengertian">
                <trix-editor aria-required="pengertian" input="pengertian"></trix-editor>
            </div>
            <input type="submit" value="Upload" class="btn btn-primary">
        </form>
    </div>
    <br>
    <!-- Page end  -->
</div>



<script>

    function previewImage() {
    const image = document.querySelector('#gambar_ikon');
    const imgPreview = document.querySelector('.img-preview')
    
    imgPreview.style.display ='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

    }

    function previewImage2() {
    const image = document.querySelector('#gambar_perlu');
    const imgPreview = document.querySelector('.img-preview2')
    
    imgPreview.style.display ='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

    }
</script>




@endsection