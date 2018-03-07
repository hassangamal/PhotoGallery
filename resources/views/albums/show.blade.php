@extends('layouts.app')

@section('content')
<h1>{{$album->name}}</h1>
<a class="button secondary" href="/">Go Back</a>
<a class="button" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
<hr>
@if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
        $i = 1;
    ?>
    <div id="photos">
      <div class="row" >
        @foreach($album->photos as $photo)
          @if($i == $colcount)
             <div class='col-4' style="display:inline-table">
               <a href="/photos/{{$photo->id}}">
                  <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
               <br>
               <h4>{{$photo->title}}</h4>
          @else
            <div class='col-4' style="display:inline-table">
              <a href="/photos/{{$photo->id}}">
                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
              </a>
              <br>
              <h4>{{$photo->title}}</h4>
          @endif
            @if($i % 3 == 0)
          </div></div><div class="row">
            @else
            </div>
          @endif
            <?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Photos To Display</p>
  @endif
@endsection