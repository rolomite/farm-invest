<div class="tw-absolute tw-top-40 tw-z-50 tw-right-0" style="max-width: 400px; margin-left: auto; margin-right: 8rem">
    @if($message = session('success'))
        <p class="alert alert-success alert-dismissible fade show" id="main-alert">
            {{$message}}
            <button class="close" data-dismiss="alert">x</button>
        </p>
    @endif

    @if($message = session('warning'))
        <p class="alert alert-warning alert-dismissible fade show" id="main-alert">
            {{$message}}
            <button class="close" data-dismiss="alert">x</button>
        </p>
    @endif

    @if($message = session('error'))
        <p class="alert alert-danger alert-dismissible fade show" id="main-alert">
            {{$message}}
            <button class="close" data-dismiss="alert">x</button>
        </p>
    @endif
</div>
