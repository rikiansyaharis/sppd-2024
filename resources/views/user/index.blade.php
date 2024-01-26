@extends('layouts.main')

@section('wrapper')

<div class="card">
    <div class="card-body">
        <table id="datatable" class="table nowrap table-hover" style="width:100%">
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
