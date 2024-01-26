@extends('layouts.app')

@section('main')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">{{ $title ?? 'Unknown'}}</h3>
                        @if (isset($breadcrumbs))
                            <ul class="breadcrumb">
                                @foreach ($breadcrumbs as $item)
                                    @if (isset($item['is_active']) && $item['is_active'])
                                        <li class="breadcrumb-item active">{{ $item['title'] }}</li>
                                    @else
                                        <li class="breadcrumb-item">
                                            <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @yield('wrapper')

    </div>
</div>
@endsection
