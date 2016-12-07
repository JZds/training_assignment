@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session('alert-' . $msg))
        <div class="alert alert-{{ $msg }} fade">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session('alert-' . $msg) }}</strong>
        </div>
    @endif
@endforeach