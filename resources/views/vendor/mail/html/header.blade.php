@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            <div>
                <img src="https://www.elhadidy.co/images/tasky.png"  class="logo" alt="Laravel Logo">
            </div>
            {{ $slot }}
        </a>
    </td>
</tr>
