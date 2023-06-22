@extends('layouts.app')
@section('title')
Website Development Cyprus | CyprusWeb.eu - Your Web Solutions Provider
@endsection
@section('description')
CyprusWeb.eu offers professional website development services in Cyprus. We provide custom web solutions tailored to your business needs. Contact us today!
@endsection

@section('content')
    <x-home.hero/>

    <x-home.portfolio/>

    <x-home.services/>

    <x-home.prices/>

    <x-home.contact/>


    {{-- <x-home.awesome/>
    <x-home.about/>
    <x-home.prices-old/>
    <x-home.process/>
    <x-home.services_-old/>
    <x-home.team/>
    <x-home.works/> --}}

@endsection

