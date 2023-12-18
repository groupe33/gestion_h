@extends('back_end.partials.header')
@section('contenu')

<div class="row">
        @if(Session::has('success'))
        <div class="alert alert-success " style="height: 50px;margin-bottom:15px">
        {{Session::get('success')}}
        </div>
        @elseif(Session::has('error'))
        <div class="alert alert-danger " style="height: 50px;margin-bottom:15px">
        {{Session::get('error')}}
        </div>
        @endif
      <div class="col-sm-9">
        <div class="bgnc-10 br-sm p-sm-30 p-10">
            <span class="heading-five mb-sm-30 mb-3">Ajouter un service</span>
            <form action="{{route('back_end.services.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row gy-20">


                        <div class="mb-20 form-group col-sm-6 mb-2">
                            <label class="mb-10 fw-semibold">Nom <span class="tsc-1">*</span></label>
                            <div class="form-input-box">
                                <i class="fa-solid fa-user-nurse form-icon"></i>
                                <input type="text" name="nom" placeholder="entrer le nom du service"  value="{{old('nom')}}"  class="form-control " required>
                                @error('nom')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
                            </div>
                        </div>

                        <div class="mb-20 form-group col-sm-6 mb-2">
                            <label class="mb-10 fw-semibold">Description <span class="tsc-1">*</span></label>
                            <div class="form-input-box">
                                <i class="fa-solid fa-user-nurse form-icon"></i>
                                <input type="text"  name="description"  placeholder="decrire le service"  value="{{old('description')}}"  class="form-control " required>
                                @error('description')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
                            </div>
                        </div>


                        <div class="mb-20 form-group col-sm-12 mb-2">
                            <button type="submit" class="btn btn-success form-control text-center " name="submit">Enregistrer</button>
                        </div>
                </div>

            </form>

        </div>
    </div>

        <div class=" card col-sm-3">
            <table class=" card-header table table-hover  table-striped table-bordered">
                <thead class="bg-info">
                    <th>la liste des services</th>
                </thead>
                <tbody class="card-body">
                @foreach($services as $key=> $service)
                <tr>
                    <td>{{$service->nom}}</td>
                </tr>
                @endforeach
                </tbody>

            </table>



        </div>



</div>




@endsection


