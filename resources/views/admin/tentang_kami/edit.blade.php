@extends('admin.layouts.master')

@section('title')
Edit Tentang Kami
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
        
            <form action="{{route('tentang_kami_admin.update', $datas->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="form-label" for="gambar_tentang_kami">Gambar Pengertian Lama</label>
                    <input type="hidden" name="gambar_lama" value="{{$datas->gambar_tentang_kami}}">
                    <img src="{{asset('storage/gambar_tentang_kami/'.$datas->gambar_tentang_kami)}}" class="mb-3 col-sm-5 d-block"  alt="">
                    <label class="form-label" for="gambar_tentang_kami">Gambar Pengertian Baru</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control" name="gambar_tentang_kami" id="gambar_tentang_kami" 
                    onchange="previewImage()" />
                </div>
    
                {{-- <div class="form-group">
                    <label>Visi</label>
                    <input class="form-control" required name="visi" id="visi" placeholder="Visi" value="{{$datas->judul}}" />
                </div> --}}
                <div class="form-group">
                    <label for="visi">Visi</label>
                    @error('visi')
                    <p class="text-danger">Visi Harus diisi</p>
                        
                    @enderror
                    <input id="visi" required type="hidden" name="visi" value="{{old('visi', $datas->visi)}}">
                    <trix-editor aria-required="visi" input="visi"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    @error('misi')
                    <p class="text-danger">Misi Harus diisi</p>
                        
                    @enderror
                    <input id="misi" required type="hidden" name="misi" value="{{old('misi', $datas->misi)}}">
                    <trix-editor aria-required="misi" input="misi"></trix-editor>
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
           <br>
        </div>
    </div>
    <!-- Page end  -->
</div>

<script>

    function previewImage() {
    const image = document.querySelector('#gambar_tentang_kami');
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