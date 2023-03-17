@extends('admin.layouts.master')

@section('title')
Testimoni
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Testimoni</h4>
                    {{-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> --}}
                </div>
                <a href="{{route('testimoni_admin.create')}}" class="btn btn-primary add-list"><i class="las la-plus"></i>Add Youtube Testimoni</a>
                <a href="{{route('testimoni_admin_gambar_view_create')}}" class="btn btn-primary add-list"><i class="las la-plus"></i>Add Gambar Testimoni</a>
            </div>
        </div>
        @if(session()->has('massage'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session('massage')}}
          </div>
        @endif

        <div class="row">

        <div class="col-lg-6">
            <div class="table-responsive rounded mb-3">
            <table class="data-tables table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>Youtube</th>
                        <th>Judul</th>
                        {{-- <th>Isi</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($datas as $data)

                <tbody class="ligth-body">
                    <tr>
                        <td>
                            <div class="col-md-3">

                                {!! $data->fembed_youtube !!}
                            </div>
                        </td>
                        <td>{{$data->kutipan}}</td>
                        {{-- <td>{{$data->isi}}</td> --}}
                        <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                    href="{{route('testimoni_admin.edit', $data->id)}}"><i class="ri-pencil-line mr-0"></i></a>
                                 <form action="{{route('testimoni_admin.destroy', $data->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-warning mb-1 border-0" onclick="return confirm('Hapus Data Ini ?')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="ri-delete-bin-line mr-0"></i>
                                    </button>
                                </form>
                                {{-- <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                    href="#"></a> --}}
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="table-responsive rounded mb-3">
            <table class="data-tables table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>Gambar Testimoni</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($datas2 as $data)

                <tbody class="ligth-body">
                    <tr>
                        <td>
                            @if($data->gambar_testimoni == null)
                            @else
                            <img src="{{asset('storage/gambar_testimoni/'. $data->gambar_testimoni)}}" width="175" height="auto" alt="">
                            @endif
                        </td>
                        {{-- <td>{{$data->isi}}</td> --}}
                        <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                    href="{{route('testimoni_admin_gambar_edit', $data->id)}}"><i class="ri-pencil-line mr-0"></i></a>
                                 <form action="{{route('testimoni_admin_gambar_delete', $data->id)}}" method="POST">
                                    {{-- @method('delete') --}}
                                    @csrf
                                    <input type="hidden" name="gambar_lama" value="{{$data->gambar_testimoni}}">
                                    <button class="badge bg-warning mb-1 border-0" onclick="return confirm('Hapus Data Ini ?')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="ri-delete-bin-line mr-0"></i>
                                    </button>
                                </form>
                                {{-- <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                    href="#"></a> --}}
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>
        </div>


    </div>



    </div>
    <!-- Page end  -->
</div>




@endsection