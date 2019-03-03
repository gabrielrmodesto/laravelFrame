@extends('site.templates.template1')
@section('content')
    <h1>Index da bagaca</h1>
    {{$var or 'Nao existe'}}
    {{ $xss }}

    @if($var == '1231')
        <p>Igual</p>
    @else
        <p>Not equal</p>
    @endif

    @unless($var == 121)
        <p>Unless entrou</p>
    @endunless
    @for($i = 0; $i < 10; $i++)
        <p>{{$i}} </p>
    @endfor

    @foreach($arrayData as $array)
        <p>Valor: {{$array}}</p>
    @endforeach

    @forelse($arrayData as $array)
        <p>Forelse: {{$array}}</p>
        @empty
        <p>Not exists</p>
    @endforelse

    @include('site.includes.sidebar')
@endsection