@extends('admin.layouts.master')

@section('title')
Perlu Anda Tahu
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
                <a href="{{route('perlu_anda_tahu.create')}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Perlu</a>
            </div>
        </div>
        @if(session()->has('massage'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session('massage')}}
          </div>
        @endif
        <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
            <table class="data-tables table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>Gambar Ikon</th>
                        <th>Nama</th>
                        {{-- <th>Isi</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($data_perlu_anda_tahu as $data)

                <tbody class="ligth-body">
                    <tr>
                        <td>
                            <img src="{{asset('storage/gambar_perlu_anda_tahu/ikon/'. $data->ikon_perlu)}}" width="175" height="auto" alt="">
                        </td>
                        <td>{{$data->nama_perlu}}</td>
                        {{-- <td>{{$data->isi}}</td> --}}
                        <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                    href="{{route('perlu_anda_tahu.edit', $data->id)}}"><i class="ri-pencil-line mr-0"></i></a>
                                 <form action="{{route('perlu_anda_tahu.destroy', $data->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="gambar_lama" value="{{$data->ikon_perlu}}">
                                    <input type="hidden" name="gambar_lama2" value="{{$data->gambar_perlu}}">
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
    <!-- Page end  -->
</div>




@endsection