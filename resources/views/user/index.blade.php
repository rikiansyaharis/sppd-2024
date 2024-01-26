@extends('layouts.main')

@section('wrapper')

<div class="card">
    <div class="card-body">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">{{ $title }}</h3>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                    {{-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> --}}
                    <a href="{{ route('apps.users.create')}}" class="btn btn-danger"><i class="fas fa-plus fa-sm"></i> Tambah</a>
                </div>
            </div>
        </div>
        <table id="datatable" class="table nowrap table-borderless table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Tanggal Aktivasi</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

@push('scripts')
<script src="{{ asset('data/data_user.js')}}"></script>
@endpush

@endsection