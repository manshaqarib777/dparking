@extends('layouts.app')
@section('title', ' - All Language')
@section('content')
    <div class="container-fluid mb100">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('application.language.all_language_list') }}
                        <a class="btn btn-sm btn-primary pull-right" href="{{ route('languages.create') }}">{{ __('application.language.add_language') }}</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderd table-condenced w-100" id="languageDataTable">
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/custom/languages.js') }}"></script>
@endpush
