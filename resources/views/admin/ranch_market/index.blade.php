@extends('admin.layouts.master')

@section('title')
Ranch Market
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Ranch Market</h4>
                    {{-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> --}}
                </div>
                <a href="{{route('blog.create')}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Ranch Market</a>
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
                        <th>Map</th>
                        <th>Nama</th>
                        <th>Provinsi</th>
                        <th>Kabupaten/Kota</th>
                        <th>Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                @foreach($ranchMarkets as $ranchMarket)
                <tbody class="ligth-body">
                    <tr>
                        <td>
                            tes
                        </td>
                        <td>{{$ranchMarket->name}}</td>
                        <td>{{ $ranchMarket->province->name }}</td>
                        <td>{{ $ranchMarket->regency->name }}</td>
                        <td>{{ $ranchMarket->telp }}</td>
                        <td>tes</td>
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