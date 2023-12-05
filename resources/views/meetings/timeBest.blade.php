<h2>Toplantı Bilgileri</h2>
<p>Başlık: {{ $meeting['title'] }}</p>
<p>Açıklama: {{ $meeting['description'] }}</p>
<p>Tarih: {{ $meeting['date'] }}</p>

<h2>En Uygun Zaman</h2>
@if ($bestTime)
    <p>Toplantı için en uygun zamanlar:</p>
    <ul>
        @foreach ($bestTime as $time)
            <li>{{ $time }}</li>
        @endforeach
    </ul>
@else
    <p>Maalesef ortak uygun bir zaman bulunamadı.</p>
@endif