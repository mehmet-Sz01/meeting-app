@extends('layout')
@section('content')
    <section class="content-header">
<h2>Toplantı Bilgileri</h2>
<p>Başlık: {{ $meeting['title'] }}</p>
<p>Açıklama: {{ $meeting['description'] }}</p>
<p>Tarih: {{ $meeting['date'] }}</p>

<h2>Uygun Zamanlar</h2>
<p>{{ $participants }} için uygun zamanlar:</p>
<ul>
    @foreach ($availability as $time)
        <li>{{ $time }}</li>
    @endforeach
</ul>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
