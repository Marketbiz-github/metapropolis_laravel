@extends('admin.layouts.master')

@section('title')
Edit Jurnal
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Edit Jurnal</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
        <form action="{{route('jurnal_admin.update', $datas->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="form-label" for="gambar_jurnal">Gambar Jurnal Lama</label>
                <input type="hidden" name="gambar_lama" value="{{$datas->gambar_jurnal}}">
                <img src="{{asset('storage/gambar_jurnal/'.$datas->gambar_jurnal)}}" class="mb-3 col-sm-5 d-block"  alt="">
                
                <label class="form-label" for="gambar_jurnal">Gambar Jurnal Baru</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                <input type="file" class="form-control" name="gambar_jurnal" id="gambar_jurnal" 
                onchange="previewImage()" />
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" required name="judul" id="judul" placeholder="Judul" value="{{$datas->judul}}" />
            </div>
            {{-- <div class="form-group">
                <b>Isi Blog</b>
                <textarea class="form-control" required name="isi" id="isi" placeholder="Isi Blog">{{$datas->isi}}</textarea>
            </div> --}}
            <div class="form-group">
                <label for="isi">Isi Blog</label>
                @error('isi')
                <p class="text-danger">Isi Blog Harus diisi</p>
                    
                @enderror
                <input id="isi" required type="hidden" name="isi" value="{{old('isi', $datas->isi)}}">
                <trix-editor aria-required="isi" input="isi"></trix-editor>
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
       <br>
    </div>
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