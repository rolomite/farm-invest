<x-guest-layout>
    <x-slot:title>Login</x-slot:title>
    <div class="contact-form-wrapper mb-50 wow fadeInRight mx-auto" style="max-width: 50rem">
        <ul class="list-group text-danger mb-4 text-sm">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <x-auth-session-status :status="session('status')"/>
        <form class="contact-form" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form_group">
                <label><i class="far fa-envelope"></i></label>
                <input type="email" class="form_control" placeholder="Email Address" name="email" required>
            </div>
            <div class="form_group">
                <label><i class="far fa-user-lock"></i></label>
                <input type="password" class="form_control" placeholder="**********" name="password" required>
            </div>
            <div class="form_group">
                <button class="main-btn primary-btn">Login</button>
            </div>
            <p class="mt-4 text-right"><a href="{{ route('register') }}">Create new account</a></p>
        </form>
    </div>
</x-guest-layout>
