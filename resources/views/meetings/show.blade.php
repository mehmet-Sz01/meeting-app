<!-- resources/views/meetings/show.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Toplantı Bilgileri</h1>

        @if(!empty($jsonData) && is_array($jsonData))
            <div class="list-group">
                @foreach($jsonData as $item)
                    <div class="list-group-item">
                        <h5 class="mb-1">{{ $item['title'] }}</h5>

                        @if(isset($item['dates']))
                            <p class="mb-1">Toplantı Planlanabileceği Tarihler: {{ implode(', ', $item['dates']) }}</p>
                        @endif

                        <p class="mb-1">Açıklama: {{ $item['description'] }}</p>

                        @if(isset($item['participants']))
                            <h6 class="mb-1">Katılımcılar:</h6>
                            <ul class="list-unstyled">
                                @foreach($item['participants'] as $participant)
                                    <li>{{ $participant }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <p class="mb-1">Toplantı Kodu: {{ $item['code'] }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p>Toplantı bilgileri bulunamadı.</p>
        @endif
    </div>
@endsection
