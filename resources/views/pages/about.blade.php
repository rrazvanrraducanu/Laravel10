<?php
/*
@extends('master')
@section('content')
    @if(($nume=='Popescu')&&($prenume=='Bogdan'))
        <h1>About <?php echo $nume." ".$prenume;?></h1>
    @else
        <h1>Bau bau!</h1>
    @endif
    <p>bla bla..........................</p>
@endsection
*/
?>
@extends('master')
@section('content')
    <h1>Authors of the site:</h1>
    @if(count($people))
        <ul>
            @foreach($people as $person)
                <li><?php echo $person;?></li>
            @endforeach
        </ul>
    @endif
@endsection
