<!-- blade-practice.blade.php -->

<h1>Blade Template</h1>

{{-- Blade handles expressions --}}
{{ 5 + 10 }}

<br><br>

{{-- Escaped HTML (shown as plain text) --}}
{{ "<h1>Hello World</h1>" }}

{{-- Unescaped HTML (renders as real HTML) --}}
{!! "<h1>Hello World</h1>" !!}
{!! "<script>alert('Welcome')</script>" !!}

{{-- Blade Comment --}}
{{-- This is a comment --}}

@php
    $user = "Admin";
    $names = ["Ali", "Raza", "Usman", "Ayesha"];
@endphp

<p>User: {{ $user }}</p>

{{-- Display names with basic loop --}}
<ul>
    @foreach ($names as $n)
        <li>{{ $n }}</li>
    @endforeach
</ul>

{{-- Escaping Blade's @ character --}}
<p>@@{{ $user }}</p>
<p>@@if</p>

{{-- Display with loop index --}}
<ul>
    @foreach ($names as $n)
        <li>{{ $loop->index }}. {{ $n }}</li>
    @endforeach
</ul>

{{-- Loop control: first, last, etc. --}}
<ul>
    @foreach ($names as $n)
        @if ($loop->first)
            <li style="color: red">{{ $loop->index }}. {{ $n }}</li>
        @elseif ($loop->last)
            <li style="color: green">{{ $loop->index }}. {{ $n }}</li>
        @else
            <li>{{ $loop->index }}. {{ $n }}</li>
        @endif
    @endforeach
</ul>
