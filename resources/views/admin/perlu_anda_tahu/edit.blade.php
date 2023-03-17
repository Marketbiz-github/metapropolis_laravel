@extends('admin.layouts.master')

@section('title')
Edit Blog
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Edit Blog</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
        <form action="{{route('perlu_anda_tahu.update', $datas->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="form-label" for="gambar_ikon">Ikon Lama</label>
                <input type="hidden" name="gambar_lama" value="{{$datas->ikon_perlu}}">
                <img src="{{asset('storage/gambar_perlu_anda_tahu/ikon/'.$datas->ikon_perlu)}}" class="mb-3 col-sm-5 d-block"  alt="">
                <label class="form-label" for="gambar_ikon">Ikon Baru</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                <input type="file" class="form-control" name="gambar_ikon" id="gambar_ikon" 
                onchange="previewImage()" />
            </div>

            <div class="form-group">
                <label class="form-label" for="gambar_perlu">Gambar Lama</label>
                <input type="hidden" name="gambar_lama2" value="{{$datas->gambar_perlu}}">
                <img src="{{asset('storage/gambar_perlu_anda_tahu/'.$datas->gambar_perlu)}}" class="mb-3 col-sm-5 d-block"  alt="">
                <label class="form-label" for="gambar_perlu">Gambar Baru</label>
                    <img class="img-preview2 img-fluid mb-3 col-sm-5">
                <input type="file" class="form-control" name="gambar_perlu" id="gambar_perlu" 
                onchange="previewImage2()" />
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" required name="nama_perlu" id="nama_perlu" placeholder="Nama Perlu" value="{{$datas->nama_perlu}}" />
            </div>
            {{-- <div class="form-group">
                <b>Isi Blog</b>
                <textarea class="form-control" required name="isi" id="isi" placeholder="Isi Blog">{{$datas->isi}}</textarea>
            </div> --}}
            <div class="form-group">
                <label for="pengertian">Pengertian</label>
                @error('pengertian')
                <p class="text-danger">Pengertian Harus diisi</p>
                    
                @enderror
                <input id="pengertian" required type="hidden" name="pengertian" value="{{old('pengertian', $datas->pengertian)}}">
                <trix-editor aria-required="pengertian" input="pengertian"></trix-editor>
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
       <br>
    </div>
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