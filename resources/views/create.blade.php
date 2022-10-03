@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row row-cols-2">
        <div class="col-4">

            <form action="{{route('store')}}" method="POST">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <label class="form-label"  for="form6Example1">Cin</label>
                      <input type="text" name="cin" id="form6Example1" class="form-control" />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <label class="form-label"  for="form6Example2">Nom</label>
                      <input type="text" name="nom" id="form6Example2" class="form-control" />
                    </div>
                  </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                  <label class="form-label"   for="form6Example3">Prenom</label>
                  <input type="text" name="prenom" id="form6Example3" class="form-control" />
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                  <label class="form-label"   for="form6Example4">Age</label>
                  <input type="nimber" name="age" id="form6Example4" class="form-control" />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label"  for="form6Example5">speciality</label>
                  <input type="text" name="speciality" id="form6Example5" class="form-control" />
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Add Stagiaire</button>
              </form>
        </div>
        <div class="col-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">CIN</th>
                  <th scope="col">NOM</th>
                  <th scope="col">PRENOM</th>
                  <th scope="col">AGE</th>
                  <th scope="col">SPECIALITY</th>
                </tr>
              </thead>
              <tbody>
                  @php
                          $i = 0;
                  @endphp
                  @foreach($stgs as $stg)
                      <tr>
                          <td>{{++$i}}</td>
                          <td>{{$stg->cin}}</td>
                          <td>{{$stg->nom}}</td>
                          <td>{{$stg->prenom}}</td>
                          <td>{{$stg->age}}</td>
                          <td>{{$stg->speciality}}</td>
                          <td>
                              <div class="container">
                                  <div class="row row-cols-auto">
                                      <div class="col">
                                          <a class="btn btn-outline-success mb-2" href="{{route('edit',['id'=>$stg->id])}}">Edit </a>
                                          {{-- <a class="btn btn-outline-info mb-2" href="{{route('show',$stg->id)}}">Show</a> --}}
                                      </div>
                                      <div class="col">
                                          <form action="{{route('destroy')}}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <input type="hidden" name="id" value="{{$stg->id}}">
                                              <button type="submit" class="btn btn-outline-danger">Delete</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </div>
</div>

@endsection
