@extends('layouts.app')

@section('title')
  Project View
@endsection


@section('content')

  {{-- {{dd($data['project'])}} --}}

  {{-- {{dd($data['project']->oldDatabase)}} --}}
  {{-- {{dd($data['project']->oldDatabase->name)}} --}}
  {{-- {{dd($data['project']->oldDatabase->tables)}} --}}
  {{-- {{dd($data['project']->oldDatabase->tables->get(1)->fields)}} --}}


  {{-- <div class="columns has-text-centered">
    <div class="column is-5">
      <i class="material-icons" style="font-size:2em">view_day</i><br>
      {{ $data['project']->oldDatabase->name }}
    </div>
    <div class="column is-2">
      <i class="material-icons" style="font-size:2em">navigate_next</i><br>
    </div>
    <div class="column is-5">
      <i class="material-icons" style="font-size:2em">view_day</i><br>
      {{ $data['project']->newDatabase->name }}
    </div>
  </div> --}}


  <associate-old-new-tables :project="{{$data['project']}}"></associate-old-new-tables>




@endsection
