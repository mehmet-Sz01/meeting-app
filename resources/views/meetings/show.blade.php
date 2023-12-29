<!-- resources/views/meetings/show.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Toplantı Bilgileri</h1>
        @if(!empty($meeting) && is_array($meeting))
            <div class="list-group">
                @foreach($meeting as $item)
                    <div class="list-group-item">
                        <h5 class="mb-1">{{ $item['title'] }}</h5>

                        @if(isset($item['dates']))
                            <p class="mb-1">Toplantı Planlanabileceği Tarihler: {{ is_array($item['dates']) ? implode(', ', $item['dates']) : $item['dates'] }}</p>
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
                    </div>
                @endforeach
            </div>
        @else
            <p>Toplantı bilgileri bulunamadı.</p>
        @endif
    </div>
@endsection
