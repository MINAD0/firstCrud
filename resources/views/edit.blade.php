@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">Stagiaire edit section</div>
    <div class="card-body">
      <form class="row g-2" action="{{route('update')}}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$stgs->id}}">
          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Cin</label>
              <input type="text" name="cin" class="form-control" value="{{$stgs->cin}}" id="inputEmail4">
          </div>
          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" value="{{$stgs->nom}}" id="inputEmail4">
          </div>

              <div class="col-md-6">
                  <label for="inputZip" class="form-label">Prenom</label>
                  <input type="text" name="prenom" class="form-control" value="{{$stgs->prenom}}" id="inputZip">
              </div>
              <div class="col-md-6">
                  <label for="inputZip" class="form-label">Age</label>
                  <input type="number" name="age" class="form-control" value="{{$stgs->age}}" id="inputZip">
              </div>
              <div class="col-md-6">
                  <label for="inputZip" class="form-label">Speciality</label>
                  <input type="text" name="speciality" class="form-control" value="{{$stgs->speciality}}" id="inputZip">
              </div>
          <!--group button-->
          <div class="btn-group-lg" role="group" aria-label="Basic checkbox toggle button group">
              <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
              <label class="btn btn-success" for="btncheck1">Edit </label>
          </div>
      </form>

    </div>
  </div>

@endsection
