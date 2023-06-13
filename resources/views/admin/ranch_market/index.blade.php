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
                            <td><a href="#" class="btn btn-info btn-sm" onclick="event.preventDefault(); openMap({{ $ranchMarket->id }})">show</a></td>
                            <td>{{$ranchMarket->name}}</td>
                            <td>{{ $ranchMarket->regency->province->name }}</td>
                            <td>{{ $ranchMarket->regency->name }}</td>
                            <td>{{ $ranchMarket->telp }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a href="#" onclick="event.preventDefault();editRanchMarket({{ $ranchMarket->id }})"
                                        class="badge bg-success" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit"><i class="ri-pencil-line mr-0"></i></a>&nbsp;
                                    <form action="{{route('ranch_market.destroy', $ranchMarket->id)}}" method="POST">
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
<!-- Modal -->
<div class="modal fade" id="addRanchMarket" tabindex="-1" role="dialog" aria-labelledby="addRanchMarketLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('ranch_market.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addRanchMarketLabel">Add Ranch Market</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Province</label>
                                <select class="form-control" onchange="addSelectProvince(this)">
                                    @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Regency</label>
                                <select id="add_regency" name="regency_id" class="form-control">
                                    @foreach ($regencies as $regency)
                                    <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Post Code</label>
                                <input type="text" name="post_code" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Telp</label>
                                <input type="text" name="telp" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" cols="30" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Map Embed</label>
                                <textarea name="embed" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editRanchMarket" tabindex="-1" role="dialog" aria-labelledby="editRanchMarketLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editRanchMarketLabel">Edit Ranch Market</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Province</label>
                                <select class="form-control" id="editProvince" onchange="editSelectProvince(this)">
                                    @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Regency</label>
                                <select id="edit_regency" name="regency_id" class="form-control">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Post Code</label>
                                <input type="text" name="post_code" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Telp</label>
                                <input type="text" name="telp" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" cols="30" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Map Embed</label>
                                <textarea name="embed" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapModalLabel">Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="map-responsive">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function addSelectProvince(element) {
        let url = "{{ route('get-regencies', ':id') }}";
        url = url.replace(':id', element.value);

        $('#add_regency').find('option').remove();
        $.get(url, function (data, status) {
            for (const key in data) {
                $('#add_regency').append(`
                <option value="${data[key].id}">${data[key].name}</option>
                `)
            }
        })
    }

    function editRanchMarket(id) {
        let url = "{{ route('ranch_market.edit', ':id') }}";
        url = url.replace(':id', id);

        $.ajax({
            type: 'GET',
            url: url,
            success: function (data) {
                console.log(data);
                $('#editProvince').val(data.regency.province_id);
                $('#edit_regency').append(`
                <option value="${data.regency.id}">${data.regency.name}</option>
                `);
                $('#editRanchMarket').find('input[name="name"]').val(data.name);
                $('#editRanchMarket').find('input[name="post_code"]').val(data.post_code);
                $('#editRanchMarket').find('input[name="telp"]').val(data.telp);
                $('#editRanchMarket').find('textarea[name="address"]').val(data.address);
                $('#editRanchMarket').find('textarea[name="embed"]').val(data.embed);
            }
        });

        $('#editRanchMarket').modal('show');
    }

    function editSelectProvince(element) {
        let url = "{{ route('get-regencies', ':id') }}";
        url = url.replace(':id', element.value);

        $('#edit_regency').find('option').remove();
        $.get(url, function (data, status) {
            for (const key in data) {
                $('#edit_regency').append(`
                <option value="${data[key].id}">${data[key].name}</option>
                `)
            }
        })
    }

    function openMap(id)
    {
        let url = "{{ route('ranch_market.edit', ':id') }}";
        url = url.replace(':id', id);

        $.ajax({
            type: 'GET',
            url: url,
            success: function (data) {
                console.log(data);
                $('#mapModal').find('.map-responsive').html(data.embed);
            }
        });

        $('#mapModal').modal('show');
    }
</script>
@endpush