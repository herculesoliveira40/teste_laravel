@extends('layouts.main')
@section('title','contato')

@section('content')
    <h1>Pagina Sobre Laravel</h1>



@php
 
 // Function to get the client IP address
 function get_client_ip() {
     $ipaddress = '';
     if (isset($_SERVER['HTTP_CLIENT_IP']))
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if(isset($_SERVER['HTTP_X_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if(isset($_SERVER['HTTP_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if(isset($_SERVER['REMOTE_ADDR']))
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';
     return $ipaddress;
 }
  
  
 echo "Your IP address is: " . get_client_ip();


@endphp


<hr>

<?php

$url = "https://g1.globo.com/";

$conteudo = file_get_contents(filename: $url);

preg_match_all('/<div class="_evt">(.*?)<\/div>/', $conteudo, $matches);

      print_r($matches);
  //  echo strip_tags($matches[0][0]);



?>


@endsection