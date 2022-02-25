<div class="row justify-content-center">
    <div id="items-container" class="col-12">
        @foreach ($reinsurances as $array)
            <div class="row mx-2">
            @foreach ($array as $reinsurance)
                @if ($reinsurance->statut == 1)
                    <div class="vertical-align col-12 col-lg-3 my-2">
                        @if (!empty($reinsurance->lien))
                            <a class="item-link" href="{{ $reinsurance->lien }}" title="{{ $reinsurance->title_lien }}" @if ($reinsurance->new_tab == 1) target="_blank" @endif>
                        @endif
                        <div class="mx-1 text-center d-lg-flex align-items-center">
                            <img class="me-1" src="{{ asset($reinsurance->icone) }}" alt="{{ $reinsurance->alt }}" width="{{ $settings->largeur_icone }}" height="{{ $settings->hauteur_icone }}">
                            <div class="description">{!! $reinsurance->description !!}</div>
                        </div>
                        @if (!empty($reinsurance->lien))
                            </a>
                        @endif
                    </div>
                @endif
            @endforeach
            </div>
        @endforeach
    </div> 
</div>