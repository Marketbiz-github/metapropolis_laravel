@extends('admin.layouts.master')

@section('title')
Tentang Kami
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
        @if(session()->has('massage'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session('massage')}}
          </div>
        @endif
        <div class="col-lg-6">
            <img src="{{('storage/gambar_tentang_kami/'. $data_tentang_kami->gambar_tentang_kami)}}" width="100%" height="auto" alt="">
            
        </div>
        <div class="col-lg-6">
            <div class="table-responsive rounded mb-3">
            <table class="table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        {{-- <th>Judul</th> --}}
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    <tr>
                        <td>{{$data_tentang_kami->visi}}</td>
                        <td>{{$data_tentang_kami->misi}}</td>
                        <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                    href="{{route('tentang_kami_admin.edit', $data_tentang_kami->id)}}"><i class="ri-pencil-line mr-0"></i></a>
                                {{-- <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a> --}}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>


@endsection