@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<h1>bbbbbm</h1>
<img src="{{asset('assets/imgs/logo/log.png')}}" alt="logo" class="logo" >
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
