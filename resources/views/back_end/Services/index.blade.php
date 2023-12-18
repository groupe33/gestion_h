@extends('back_end.partials.header')
@section('contenu')
<div class="row">

    <div class="bgnc-10 br-sm p-sm-30 p-10">
        <span class="heading-five mb-sm-30 mb-3">La liste des Services</span>
        <form action="{{ route('rechercheService') }}" method="get">
         @csrf
        <div class="form-group ">
            <label for="rechercheService" class="mb-2 ">Rechercher un service par nom :</label>
            <input type="text" id="rechercheService" name="rechercheService" class="form-control">
        </div>
        </form>
        <table class="table table-hover table-striped table-bordered" id="serviceL">
            <thead class="bg-info">
                <th class="text-center">No</th>
                <th class="text-center">Nom Service</th>
                <th class="text-center">Description</th>
                <th class="text-center">Actions</th>

            </thead>
            <tbody>
            @foreach($services as $key=> $service)
            <tr>
                <td class="text-center">{{$key+1}}</td>
                <td>{{$service->nom}}</td>
                <td>{{$service->description}}</td>
                <td class="p-10">
                    <span class="d-center gap-3">
                        <i class="act-icon tpc-2 fa-regular fa-eye icon-bg"></i>
                        <a href="{{ route('editService', ['service_id' => $service->service_id]) }}"> <i class="edit-icon text-info tpc-2 fa-solid fa-pen-to-square icon-bg" data-toggle="modal" data-target="#modifierServiceModal" data-service-id="{{ $service->id }}" data-service-nom="{{ $service->nom }}" data-service-description="{{ $service->description }}"></i></a>
                        <i class="delete-icon text-danger tpc-2 fa-solid fa-trash-can icon-bg"></i>
                    </span>
                </td>

            </tr>
            @endforeach
            </tbody>

        </table>

        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item {{ ($services->onFirstPage()) ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $services->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                </li>

                @foreach($services->getUrlRange(1, $services->lastPage()) as $page => $url)
                    <li class="page-item {{ ($services->currentPage() == $page) ? 'active' : '' }}" aria-current="page">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <li class="page-item {{ ($services->currentPage() == $services->lastPage()) ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $services->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>

    </div>

</div>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        var searchInput = document.getElementById('rechercheService');

        searchInput.addEventListener('input', function () {
            // Effectuer une requête AJAX avec fetch
            fetch(`/rechercheService?rechercheService=${this.value}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    // Mettre à jour la liste des services
                    updateServiceList(data);
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des services', error);
                });
        });

        // Fonction pour mettre à jour dynamiquement la liste des services
        function updateServiceList(services) {
            var serviceList = document.getElementById('serviceL');
            serviceList.innerHTML = '';

            if (services.length === 0) {
                serviceList.innerHTML = '<p>Aucun service trouvé.</p>';
            } else {
                services.forEach(service => {
                    // ... Créez la ligne du tableau avec les données du service ...
                    var row = `<tr>
                        <td>${service.service_id}</td>
                        <td>${service.nom}</td>
                        <td>${service.description}</td>
                        <td class="p-10">
                            <span class="d-center gap-3">
                                <i class="act-icon tpc-2 fa-regular fa-eye icon-bg"></i>
                                <a href="{{ route('editService', ['service_id' => $service->service_id]) }}" class="btn btn-warning" data-toggle="modal" data-target="#modifierServiceModal" data-service-id="{{ $service->id }}" data-service-nom="{{ $service->nom }}" data-service-description="{{ $service->description }}"> <i class="edit-icon text-info tpc-2 fa-solid fa-pen-to-square icon-bg"></i></a>
                                <i class="delete-icon text-danger tpc-2 fa-solid fa-trash-can icon-bg"></i>
                            </span>
                        </td>
                    </tr>`;
                    serviceList.innerHTML += row;
                });
            }
        }
    });



    </script> --}}

<script>
    $(document).ready(function() {
        $('#modifierServiceModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var serviceId = button.data('service-id');
            var serviceNom = button.data('service-nom');
            var serviceDescription = button.data('service-description');

            var modal = $(this);
            modal.find('#serviceId').val(serviceId);
            modal.find('#serviceNom').val(serviceNom);
            modal.find('#serviceDescription').val(serviceDescription);
        });
    });
</script>





@endsection
