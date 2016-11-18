@extends('layouts.app')

@section('title')
  Dashboard
@endsection


@section('content')
<mdl-button>Button</mdl-button>

<mdl-checkbox >Checkbox</mdl-checkbox>

<form action="#">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
    <label class="mdl-textfield__label" for="sample2">Number...</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
</form>
@endsection
