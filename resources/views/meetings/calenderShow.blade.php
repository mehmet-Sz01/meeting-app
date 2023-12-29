@extends('layout')
@section('content')
    <section class="content-header">
        <form action="{{route('meetings.show-Date')}}">
            <h2>Toplantı Bilgileri</h2>
            <p>Başlık: {{ $meeting['title'] }}</p>
            <p>Açıklama: {{ $meeting['description'] }}</p>
            <p>Tarih: {{ $meeting['dates'] }}</p>
        </form>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
