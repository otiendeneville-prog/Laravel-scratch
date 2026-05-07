

<x-layout>
@if(count($tasks ??[]))
<p>Yes we have some task. How many?{{ count($tasks) }} task.in fact!</p>
@endif
</x-layout>


