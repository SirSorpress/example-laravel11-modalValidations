{{-- JS imports --}}

<script defer src="{{asset('js/toggleThemeMode.js')}}"></script>
<script defer src="{{asset('js/Methods.js')}}"></script>
<script defer src="{{asset('js/Types.js')}}"></script>
<script defer src="{{asset('js/Status.js')}}"></script>
<script defer src="{{asset('js/CreateTodo.js')}}"></script>
<script defer src="{{asset('js/IndexTodo.js')}}"></script>


{{-- Golbal vars --}}

<script>
    const $URL = '{{ env('APP_URL') }}';
    const $CSRF = '_token={{ csrf_token() }}';
</script>
