@extends('admin.layouts.master')

@section('title')
Tutorial Meta Propolis
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">@yield('title')</h4>
                </div>
            </div>
        </div>
        @if(session()->has('massage'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session('massage')}}
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5>Video Tutorial</h5>
            <form action="#" id="edit_video" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $video->id }}">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $video->title }}">
                </div>
                <div class="form-group">
                    <label>Embed</label>
                    <textarea class="form-control" name="path" rows="5" onchange="embed(this)">
                        {{ $video->path }}
                    </textarea>
                </div>
                <div class="map-responsive">
                    {!! $video->path !!}
                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-3 float-right">Update</button>
            </form>
        </div>
        <div class="col-md-6">
            <h5>PDF Tutorial</h5>
            <form action="#" id="edit_pdf" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $pdf->id }}">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $pdf->title }}">
                </div>
                <label>File</label>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <a href="{{ asset($pdf->path) }}" target="_blank">{{ $pdf->path }}</a>
                <button type="submit" class="btn btn-primary mt-5 mb-3 float-right">Update</button>
            </form>
        </div>
    </div>
    <!-- Page end  -->
</div>
@endsection
@push('scripts')
    <script>
        function embed(element)
        {
            $('.map-responsive').html(element.value)
        }

        $('#inputGroupFile02').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
    </script>
@endpush