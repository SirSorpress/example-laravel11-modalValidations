{{-- JS imports --}}

<script src="{{asset('js/Todo.js')}}"></script>
<script src="{{asset('js/toggleThemeMode.js')}}"></script>


{{-- Golbal vars --}}

<script>
    const $URL = '{{ env('APP_URL') }}';
    const $CSRF = '_token={{ csrf_token() }}';
</script>
