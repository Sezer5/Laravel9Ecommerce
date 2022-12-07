<!-- resources/views/child.blade.php -->

@extends('layouts.frontbase')

@section('title', 'Title From Subfile')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
