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
                <button class="btn btn-primary" data-toggle="modal" data-target="#addRanchMarket"><i
                        class="las la-plus"></i> Add Ranch Market</button>
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
                            <th>Event</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach($participants as $participant)
                    <tbody class="ligth-body">
                        <tr>
                            <td>{{$participant->event->name}}</td>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->phone }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a href="#" onclick="event.preventDefault();"
                                        class="badge bg-success" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit"><i class="ri-pencil-line mr-0"></i></a>&nbsp;
                                    <form action="{{route('delete.participant', $participant->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-warning mb-1 border-0"
                                            onclick="return confirm('Hapus Data Ini ?')" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Delete">
                                            <i class="ri-delete-bin-line mr-0"></i>
                                        </button>
                                    </form>
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
@push('scripts')
<script>

</script>
@endpush