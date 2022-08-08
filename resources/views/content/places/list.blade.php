@extends('layouts.app')
@section('title', ' - Place List')
@section('content')
    <div class="container-fluid mb100">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('application.place.place_list') }}
                        <a class="btn btn-sm btn-primary pull-right"
                            href="{{ route('places.create') }}">{{ __('application.place.create_new') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="placeDataTable" class="table table-borderd table-condenced w-100">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/custom/settings/place.js') }}"></script>
@endpush
