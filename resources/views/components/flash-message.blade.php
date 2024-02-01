@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    class="fixed-top vw-100 d-flex justify-content-center align-items-center bg-transparent">
    <p>{{session('message')}}</p>
</div>
@endif
