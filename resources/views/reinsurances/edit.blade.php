@extends('master')

@section('title')
    {{ __('Réassurances') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/reinsurances.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/reinsurances.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{ __('Éditer un élément') }}</h4>
                </div>
                <form id="new-element-form" action="{{ route('reinsurances.update', $reinsurance->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-12">
                                <div class="mb-1">
                                    <label class="form-label bs" for="input1">{{ __('Libellé') }}</label>
                                    <input type="text" class="form-control" id="input1" name="libelle" maxlength="60" value="{{ $reinsurance->libelle }}" required>
                                </div>
                                <div class="mb-1">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">{{ __('Icône') }}</h4>
                                        <div class="d-flex flex-column flex-md-row">
                                            <img src="{{ asset($reinsurance->icone) }}" id="icon-render" class="rounded me-2 mb-1 mb-md-0" width="100" height="100">
                                            <div class="featured-info">
                                                <small class="text-muted">{{ __('Taille d\'icône conseillée < 1mb') }}</small>
                                                <div class="d-inline-block mt-1">
                                                    <input class="form-control" name="icone" type="file" accept=".png,.jpeg,.jpg" onchange="showImg(this)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-1">
                                            <label class="form-label bs" for="input2">{{ __('Description de l\'icône (alt)') }}</label>
                                            <input type="text" class="form-control" id="input2" name="alt" maxlength="100"  value="{{ $reinsurance->alt }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-12">
                                <div class="mb-1">
                                    <label class="form-label bs">Description</label>
                                    <textarea id="editor" name="description">{{ $reinsurance->description }}</textarea>
                                </div>
                                <div class="mb-1 row">
                                    <div class="col-sm-12">
                                        <p class="col-form-label bs"><b>{{ __('La position de l\'élément est directement modifiable depuis la liste des réassurances via glisser-déposer.') }}</b></p>
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="input4" class="col-sm-3 col-form-label bs">{{ __('Lien de redirection') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input4" name="lien" maxlength="250" value="{{ $reinsurance->lien }}">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label for="input5" class="col-sm-3 col-form-label bs">{{ __('Title du lien') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input5" name="title_lien" maxlength="100" value="{{ $reinsurance->title_lien }}">
                                    </div>
                                </div>
                                <div class="row custom-options-checkable g-1">
                                    <div class="col-md-6">
                                        <input class="custom-option-item-check" type="checkbox" name="new_tab" id="input6" @if ($reinsurance->new_tab == 1) checked @endif >
                                        <label class="custom-option-item text-center p-1" for="input6">
                                            <i data-feather='external-link'></i>
                                            <small>{{ __('Ouvrir le lien dans un nouvel onglet') }}</small>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="custom-option-item-check" type="checkbox" name="statut" id="input7" @if ($reinsurance->statut == 1) checked @endif>
                                        <label class="custom-option-item text-center p-1" for="input7">
                                            <i data-feather='check-circle'></i>
                                            <small>{{ __('Publier l\'élément') }}</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-1">
                            <button id="submit-button" class="btn btn-primary waves-effect waves-float waves-light me-1" onclick="submitForm(event)">{{ __('Enregister') }}</button>
                            <a class="btn btn-secondary" href="{{ route('reinsurances.index') }}">{{ __('Annuler') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="toast-container">
        <div id="limit-reached" class="toast basic-toast position-fixed top-0 end-0 m-2" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <p>
                    {{ __('Vous avez atteint la limite de 100 caractères autorisés pour ce champ.') }} <br/> {{ __('Nous avons pris le soin d\'annuler votre dernière action.') }}
                </p>
            </div>
        </div>
        <div id="not-null" class="toast basic-toast position-fixed top-0 end-0 m-2" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <p>
                    {{ __('La description ne peut pas être vide.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

