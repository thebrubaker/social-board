@extends('main.layout')

@section('content')
<h1>Masonry - itemSelector</h1>

<div class="grid">
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2 grid-item--width2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>

</div>
<style>
.grid-item {
  width: 370px;
  height: 200px;
  float: left;
  background: #D26;
  margin: 5px;
}
.grid-item--width2 { width:  750px; }
.grid-item--height2 { height:  400px; }
</style>

@endsection