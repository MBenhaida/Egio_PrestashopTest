@extends('master')

@section('title')
    {{ __('Réglages du module') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/js/settings.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Réglages généraux') }}</h4>
                </div>
                @if(Session::has('AlertMessage'))
                    <p class="alert alert-{{ Session::get('AlertType') }} alert-message" role="alert">{{ __(Session::get('AlertMessage')) }}</p>
                @endif
                <form action="{{ route('updateSettings') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label bs" for="input1">{{ __('Nombre maximum d\'éléments') }}</label>
                                    <input type="number" class="form-control" id="input1" name="n_elements" placeholder="{{ $settings->nombre_elements }}" min="1" required>
                                </div>
                            </div>
                            <div class="col-xl-9 col-12 d-flex justify-content-between">
                                <div class="col-5-5">
                                    <div class="mb-1">
                                        <label class="form-label bs" for="input2">{{ __('Largeur de l\'icône') }}</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="input2" name="width" placeholder="{{ $settings->largeur_icone }}" min="40" max="100" onkeyup="linkedInputsWidth()" required>
                                            <span class="input-group-text">px</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-icon linked-btn" disabled="">
                                        <i data-feather='link'></i>
                                    </button>
                                </div>
                                <div class="col-5-5">
                                    <div class="mb-1">
                                        <label class="form-label bs" for="input3">{{ __('Hauteur de l\'icône') }}</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="input3" name="height" placeholder="{{ $settings->hauteur_icone }}" min="40" max="100" onkeyup="linkedInputsHeight()" required>
                                            <span class="input-group-text">px</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-1">
                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">{{ __('Enregister les modifications') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

