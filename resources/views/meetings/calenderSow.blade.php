
<h2>Toplantı Bilgileri</h2>
<p>Başlık: {{ $meeting['title'] }}</p>
<p>Açıklama: {{ $meeting['description'] }}</p>
<p>Tarih: {{ $meeting['date'] }}</p>

<h2>Uygun Zamanlar</h2>
<p>{{ $username }} için uygun zamanlar:</p>
<ul>
    @foreach ($availability as $time)
        <li>{{ $time }}</li>
    @endforeach
</ul>