@extends('layouts.admin')

@section('content')
    <h1>Crea Nuovo Progetto</h1>
   <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
         <label for="name" class="form-label">Nome</label>
         <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
      </div>
      <div class="mb-3">
         <label for="customer" class="form-label">Cliente</label>
         <input type="text" class="form-control" id="customer" name="customer" value="{{old('customer')}}">
      </div>
      <div class="mb-3">
         <label for="description">Descrizione</label>
         <textarea name="description" id="description" class="form-control">
            {{old('description')}}
         </textarea>
      </div>
      <div class="mb-3">
         <label for="cover_image" class="form-label">Immagine</label>
         <input type="file" class="form-control" id="cover_image" name="cover_image" value="{{old('cover_image')}}">
      </div>
      <div class="mb-3">
         @foreach ($technologies as $tech)    
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" id="{{$tech->name}}" name="technologies[]" value="{{$tech->id}}">
               <label class="form-check-label" for="{{$tech->name}}">{{$tech->name}}</label>
            </div>
         @endforeach
      </div>
      <button type="submit" class="btn btn-primary">Crea</button>
   </form>
@endsection