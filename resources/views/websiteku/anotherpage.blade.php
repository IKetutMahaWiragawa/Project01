@extends('desain.index')
@section('JUDUL', $judul)
@section('menubar')
    <li><a href="index.html">Home</a></li>
    <li><a href="examples.html">Examples</a></li>
    <li><a href="page.html">A Page</a></li>
    <li class="selected"><a href="another_page.html">Another Page</a></li>
    <li><a href="contact.html">Contact Us</a></li>
@endsection
@section('KONTEN', $konten)