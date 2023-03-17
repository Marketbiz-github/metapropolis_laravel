@extends('admin.layouts.master')

@section('title')
Banner Landing
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Banner</h4>
                    {{-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> --}}
                </div>
                {{-- <a href="page-add-product.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Product</a> --}}
            </div>
        </div>
        {{-- <form action="{{route('landing_banner.store')}}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Upload Gambar</strong>
                        <input type="file" name="gambar_banner" id="gambar_banner" class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
         </form> --}}
        <form action="{{route('landing_banner.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <b>File Gambar</b><br/>
                <input type="file" name="gambar_banner" id="gambar_banner">
            </div>

            {{-- <div class="form-group">
                <b>Keterangan</b>
                <textarea class="form-control" name="keterangan"></textarea>
            </div> --}}

            <input type="submit" value="Upload" class="btn btn-primary">
        </form>
        </div>
    </div>
    <!-- Page end  -->
</div>








@endsection