@extends('admin.layouts.master')

@section('title')
Edit Banner Landing
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">@yield('title')</h4>
                    {{-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> --}}
                </div>
                {{-- <a href="page-add-product.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Product</a> --}}
            </div>
        </div>
        <div class="col-lg-8">
        
            <form action="{{route('pengertian_metapropolis.update', $datas->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="form-label" for="gambar_pengertian">Gambar Pengertian Lama</label>
                    <input type="hidden" name="gambar_lama" value="{{$datas->gambar_pengertian}}">
                    <img src="{{asset('storage/gambar_pengertian/'.$datas->gambar_pengertian)}}" class="mb-3 col-sm-5 d-block"  alt="">
                    <label class="form-label" for="gambar_pengertian">Gambar Pengertian Baru</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control" name="gambar_pengertian" id="gambar_pengertian" 
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
                    <label for="pengertian">Isi Blog</label>
                    @error('pengertian')
                    <p class="text-danger">Isi Blog Harus diisi</p>
                        
                    @enderror
                    <input id="pengertian" required type="hidden" name="pengertian" value="{{old('pengertian', $datas->pengertian)}}">
                    <trix-editor aria-required="pengertian" input="pengertian"></trix-editor>
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
           
        </div>
    </div>
    <!-- Page end  -->
</div>

<script>

    function previewImage() {
    const image = document.querySelector('#gambar_pengertian');
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