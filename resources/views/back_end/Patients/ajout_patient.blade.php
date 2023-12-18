@extends('back_end.dashbord')
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
 <div class="col-md-9">
    <div class="card">
        <div class="card-header bg-info">
            Ajouter un Patient
        </div>
        <div class="card-body">
        <form action="{{route('back_end.patients.store')}}" enctype="multipart/form-data" method="post">
         @csrf

        <div id="step1" class="step">
          <div class="row">
            <div class="form-group col-sm-6 mb-2">
                <label for="">Nom </label>
                <input type="text" name="nom" value="{{old('nom')}}"  class="form-control ">
                 @error('nom')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-sm-6 mb-2">
                <label for="">Prenom </label>
                <input type="text" name="prenom" value="{{old('prenom')}}"  class="form-control ">
                 @error('prenom')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-sm-6 mb-2">
                <label for="genre">Genre</label>
                <select name="genre" class="form-control">
                    <option value="homme" {{ old('genre') == 'homme' ? 'selected' : '' }}>Homme</option>
                    <option value="femme" {{ old('genre') == 'femme' ? 'selected' : '' }}>Femme</option>
                </select>
                @error('genre')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-sm-6 mb-2">
                <label for="">Ville</label>
                <input type="text" name="ville" value="{{old('ville')}}"  class="form-control ">
                 @error('ville')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-sm-6 mb-2">
                <label for="">Adresse</label>
                <input type="text" name="adresse" value="{{old('adresse')}}"  class="form-control ">
                 @error('adresse')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-sm-6 mb-2">
                <label for="">Date de Naissance </label>
                <input type="date" name="date_naiss" value="{{old('date_naiss')}}"  class="form-control ">
                 @error('date_naiss')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-sm-6 mb-2">
                <label for="">Telephone </label>
                <input type="text" name="telephone" value="{{old('telephone')}}"  class="form-control ">
                 @error('telephone')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
            </div>

            <div class="form-group col-sm-6 mb-2">
                <label for="">Action</label>
                <button type="button" onclick="nextStep()" class="btn btn-outline-success form-control">Suivant --></button>
            </div>
          </div>
       </div>


            <div id="step2"  class="step" style="display: none;">
                <div class="form-group col-sm-12 mb-2">
                    <label for=""> choisir un avatar</label>
                    <input type="file" name="avatar" value="{{old('avatar')}}"  class="form-control ">
                     @error('avatar')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group col-sm-12 mb-2">
                    <label for="">Email </label>
                    <input type="mail" name="email" value="{{old('email')}}"  class="form-control ">
                     @error('email')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group col-sm-12 mb-2">
                    <label for="password">Mot de Passe</label>
                    <div class="input-group">
                        <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
                        <div class="input-group-append">
                            <button type="button" id="togglePassword" class="btn btn-outline-secondary" onclick="togglePassword()">Afficher</button>
                        </div>
                    </div>
                    @error('password')<span class="badge badge-danger bg-danger">{{$message}}</span>@enderror
                </div>


                <div class="form-group col-sm-12 mb-2">
                    <label for="">Action</label>
                    <button type="button" class="btn btn-outline-success mb-2 form-control" onclick="prevStep()"><-- Précédent</button>
                    <button type="submit" class="btn btn-outline-success form-control" name="submit">Enregistrer</button>
                </div>
            </div>

         </div>

        </form>

        {{-- <table class="table table-hover  table-striped table-bordered">
        <thead class="bg-info">
            <th>No</th>
            <th>Nom Complet</th>
            <th>adresse</th>
            <th>date_naiss</th>
            <th>telephone</th>
            <th>email</th>
            <th>avatar</th>
            <th>modifier</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        @foreach($patients as $key=> $patient)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$patient->nom." ".$patient->prenom}}</td>
            <td>{{$patient->adresse}}</td>
            <td>{{$patient->date_naiss}}</td>
            <td>{{$patient->telephone}}</td>
            <td>{{$patient->email}}</td>
            <td><img class="h-16 w-100 " src="{{asset('avatars/'.$patient->avatar)}}" alt=""></td>
            <td>
                <a href="{{route('patientEdit',['id' => $patient->id])}}">
                    <button class="btn btn-primary"> <i class="fas fa-edit"></i> modifier</a></button>
            </td>
            <td>
                <form action="{{route('patientDelete',['id' => $patient->id])}}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce patient?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash-alt">
                        supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table> --}}

    </div>
</div>

 <div class="col-md-3">
    <div class="card">
        <div class="card-header bg-info">
            liste des patients
        </div>
        <div class="card-body">

        </div>
   </div>
 </div>

</div>


<script>
    function nextStep() {
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
    }

    function prevStep() {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step1').style.display = 'block';
    }

</script>

<script>

    function togglePassword() {
        var passwordInput = document.getElementById('password');
        var toggleButton = document.getElementById('togglePassword');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = 'Cacher';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = 'Afficher';
        }
    }
</script>
@endsection
