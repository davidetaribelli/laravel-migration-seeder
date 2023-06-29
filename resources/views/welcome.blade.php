@extends('layouts.app')

@section('content')
<div class="container my-3">    
    <div class="row g-4">
        <div class="col d-flex flex-wrap">
            @foreach ($trains as $train)
            <div class="card m-3" style="width: 20rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Azienda: {{$train->azienda}}</li>
                    <li class="list-group-item">Partenza: {{$train->stazione_di_partenza}}</li>
                    <li class="list-group-item">Arrivo: {{$train->stazione_di_arrivo}}</li>
                    <li class="list-group-item">Orario partenza: {{$train->orario_di_partenza}}</li>
                    <li class="list-group-item">Orario arrivo: {{$train->orario_di_arrivo}}</li>
                    <li class="list-group-item">Codice: {{$train->cod_treno}}</li>
                    <li class="list-group-item">Carrozze: {{$train->n_carrozze}}</li>
                    <li class="list-group-item">
                        @if ($train->in_orario == 1)
                            Il treno non è in orario
                        @else
                            Il treno è in orario   
                        @endif
                    </li>
                    <li class="list-group-item">
                        @if ($train->cancellato == 0)
                            Il treno non è stato cancellato
                        @else
                            Il treno è stato cancellato  
                        @endif
                    </li>
                </ul>
              </div>
            @endforeach
        </div>
    </div>

</div>
@endsection