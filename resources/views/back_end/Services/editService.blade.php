@extends('back_end.partials.header')
@section('contenu')
<div class="modal fade" id="modifierServiceModal" tabindex="-1" role="dialog" aria-labelledby="modifierServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modifierServiceModalLabel">Modifier un service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('serviceUpdate', ['service_id' => '$service->service_id']) }}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="serviceId" name="serviceId" value="">
                    <!-- ... (rest of your form) ... -->

                    <div class="mb-20 form-group col-sm-6 mb-2">
                        <label class="mb-10 fw-semibold">Nom <span class="tsc-1">*</span></label>
                        <div class="form-input-box">
                            <i class="fa-solid fa-user-nurse form-icon"></i>
                            <input type="text" id="serviceNom" name="nom" placeholder="entrer le nom du service" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-20 form-group col-sm-6 mb-2">
                        <label class="mb-10 fw-semibold">Description <span class="tsc-1">*</span></label>
                        <div class="form-input-box">
                            <i class="fa-solid fa-user-nurse form-icon"></i>
                            <input type="text" id="serviceDescription" name="description" placeholder="decrire le service" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-20 form-group col-sm-12 mb-2">
                        <button type="submit" class="btn btn-success form-control text-center" name="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
