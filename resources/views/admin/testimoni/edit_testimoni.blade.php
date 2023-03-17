@extends('admin.layouts.master')

@section('title')
Edit Testimoni Gambar
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Edit Testimoni Gambar</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
        <form action="{{route('testimoni_admin_gambar_update', $datas->id)}}" method="POST" enctype="multipart/form-data">
            {{-- @method('PUT') --}}
            @csrf
            <div class="form-group">
                <label class="form-label" for="gambar_testimoni">Gambar Testimoni Lama</label>
                <input type="hidden" name="gambar_lama" value="{{$datas->gambar_testimoni}}">
                <img src="{{asset('storage/gambar_testimoni/'.$datas->gambar_testimoni)}}" class="mb-3 col-sm-5 d-block"  alt="">
                <label class="form-label" for="gambar_testimoni">Ikon Baru</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                <input type="file" class="form-control" name="gambar_testimoni" id="gambar_testimoni" 
                onchange="previewImage()" />
            </div>
           
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
       <br>
    </div>
    <!-- Page end  -->
</div>

<script>
     function previewImage() {
    const image = document.querySelector('#gambar_testimoni');
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