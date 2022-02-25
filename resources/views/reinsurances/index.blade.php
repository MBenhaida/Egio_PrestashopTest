@extends('master')

@section('title')
    {{ __('Réassurances') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/reinsurances.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/vendors/js/extensions/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/reinsurances.js') }}"></script>
    <script>
        $(function () {
            dragula([document.querySelector("#drag-parent")], {
                moves: function (el, container, handle) {
                    return handle.classList.contains('handle');
                }
            }).on('drop', function (el) {
                let original_position = parseInt(el.children[4].innerText, 10);
                let new_position = 0;
                let position_logs = [];
                parent = document.getElementById('drag-parent');
                for (let i = 0; i < parent.children.length; i++) {
                    if (parent.children[i] == el) {
                        new_position = i + 1;
                        el.children[4].innerText = new_position;
                    }
                }
                for (let i = 0; i < parent.children.length; i++) {
                    element_position = parseInt(parent.children[i].children[4].innerText, 10);
                    if (original_position < new_position) {
                        if (element_position > original_position && element_position <= new_position && parent.children[i] != el) {
                            parent.children[i].children[4].innerText = i + 1;
                        }
                    } else {
                        if (element_position < original_position && element_position >= new_position && parent.children[i] != el) {
                            parent.children[i].children[4].innerText = i + 1;
                        }
                    }
                }
                for (let i = 0; i < parent.children.length; i++) {
                    position_logs.push([parseInt(parent.children[i].children[0].attributes[1].value, 10), parseInt(parent.children[i].children[4].innerText, 10)])
                }
                $.ajax({
                    type: "POST",
                    url: "{{ route('updatePositions') }}",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                        position_logs: position_logs,
                    },
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (response) {
                        alert("Une erreur est survenue");
                        console.log(response);
                    },
                });
            });
        })
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form id="new-element-form" action="{{ route('reinsurances.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="accordion" id="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-form" aria-expanded="false" aria-controls="accordion-form">
                                        {{ __('Créer un nouvel élément') }}
                                    </button>
                                </h2>
                                <div id="accordion-form" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-5 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label bs" for="input1">{{ __('Libellé') }}</label>
                                                    <input type="text" class="form-control" id="input1" name="libelle" maxlength="60" required>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">{{ __('Icône') }}</h4>
                                                        <div class="d-flex flex-column flex-md-row">
                                                            <img src="{{ asset('assets/images/no_img.png') }}" id="icon-render" class="rounded me-2 mb-1 mb-md-0" width="100" height="100">
                                                            <div class="featured-info">
                                                                <small class="text-muted">{{ __('Taille d\'icône conseillée < 1mb') }}</small>
                                                                <div class="d-inline-block mt-1">
                                                                    <input class="form-control" name="icone" type="file" accept=".png,.jpeg,.jpg" onchange="showImg(this)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1">
                                                            <label class="form-label bs" for="input2">{{ __('Description de l\'icône (alt)') }}</label>
                                                            <input type="text" class="form-control" id="input2" name="alt" maxlength="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label bs">Description</label>
                                                    <textarea id="editor" name="description"></textarea>
                                                </div>
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <p class="col-form-label bs"><b>{{ __('Une position sera automatiquement attribuée à l\'élément. Vous pourrez la changer après sa création.') }}</b></p>
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label for="input4" class="col-sm-3 col-form-label bs">{{ __('Lien de redirection') }}</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="input4" name="lien" maxlength="250">
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label for="input5" class="col-sm-3 col-form-label bs">{{ __('Title du lien') }}</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="input5" name="title_lien" maxlength="100">
                                                    </div>
                                                </div>
                                                <div class="row custom-options-checkable g-1">
                                                    <div class="col-md-6">
                                                        <input class="custom-option-item-check" type="checkbox" name="new_tab" id="input6">
                                                        <label class="custom-option-item text-center p-1" for="input6">
                                                            <i data-feather='external-link'></i>
                                                            <small>{{ __('Ouvrir le lien dans un nouvel onglet') }}</small>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="custom-option-item-check" type="checkbox" name="statut" id="input7" checked>
                                                        <label class="custom-option-item text-center p-1" for="input7">
                                                            <i data-feather='check-circle'></i>
                                                            <small>{{ __('Publier l\'élément') }}</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-1">
                                        @if ($settings->nombre_elements <= $reinsurances->count())
                                            <div data-bs-toggle="tooltip" data-bs-placement="left" title="{{ __('Vous avez atteint le nombre maximum de réassurances autorisées') }}">
                                                <button id="submit-button" type="submit" class="btn btn-primary waves-effect waves-float waves-light" disabled>{{ __('Ajouter') }}</button>
                                            </div>
                                        @else
                                            <button id="submit-button" class="btn btn-primary waves-effect waves-float waves-light" onclick="submitForm(event)">{{ __('Ajouter') }}</button>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(Session::has('AlertMessage'))
        <p class="alert alert-{{ Session::get('AlertType') }} alert-message" role="alert">{{ __(Session::get('AlertMessage')) }}</p>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{ __('Liste des réassurances') }}</h4>
                </div>
                <div class="card-datatable">
                    <div class="card-datatable table-responsive pt-0">
                        <table id="reinsurances-table" class="table">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 30px !important;"></th>
                                    <th>{{ __('Icône & alt') }}</th>
                                    <th class="text-center">{{ __('Libellé') }}</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Position</th>
                                    <th class="text-center">{{ __('Statut') }}</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="drag-parent">
                                @foreach ($reinsurances as $reinsurance)
                                    <tr class="drag-child">
                                        <td class="handle" data-target="{{ $reinsurance->id }}"></td>
                                        <td>
                                            <div class="d-flex justify-content-left align-items-center">
                                                <div class="me-1">
                                                    <img src="{{ asset($reinsurance->icone) }}" alt="{{ $reinsurance->alt }}" height="32" width="32">
                                                </div>
                                                <div>
                                                    <span class="fw-bolder">Alt : </span><small>{{ $reinsurance->alt }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-truncate align-middle">{{ $reinsurance->libelle }}</span>
                                        </td>
                                        <td class="text-center">
                                            <div id="description-div">{!! $reinsurance->description !!}</div> 
                                        </td>
                                        <td class="text-center">
                                            <span class="text-truncate align-middle">{{ $reinsurance->ordre }}</span>
                                        </td>
                                        <td class="text-center">
                                            @if ($reinsurance->statut == 1)
                                                <span class="badge rounded-pill badge-light-success">{{ __('Publié') }}</span>
                                            @else
                                                <span class="badge rounded-pill badge-light-warning">{{ __('Brouillon') }}</span>
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-center">
                                            <a class="me-1" href="{{ route('reinsurances.edit', $reinsurance->id) }}">
                                                <div class="avatar bg-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Éditer') }}">
                                                    <div class="avatar-content">
                                                        <i data-feather='edit'></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <form action="{{ route('reinsurances.destroy', $reinsurance->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="avatar bg-light-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Supprimer') }}" onclick="this.closest('form').submit()">
                                                    <div class="avatar-content">
                                                        <i data-feather='trash-2'></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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
        <div id="input-null" class="toast basic-toast position-fixed top-0 end-0 m-2" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <p>
                    {{ __('Le libellé ne peut pas être vide.') }}
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

