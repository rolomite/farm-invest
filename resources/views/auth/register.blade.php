<x-guest-layout>
    <x-slot:title>Register</x-slot:title>
    <div class="contact-form-wrapper mb-50 wow fadeInRight mx-auto" style="max-width: 50rem">
        <ul class="list-group text-danger mb-4 text-sm">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form class="contact-form" action="{{ route('register') }}" method="post">
            @csrf
            <div class="form_group">
                <label><i class="far fa-user"></i></label>
                <input type="text" class="form_control" placeholder="Full Name" name="name" required>
            </div>
            <div class="form_group">
                <label><i class="far fa-envelope"></i></label>
                <input type="email" class="form_control" placeholder="Email Address" name="email" required>
            </div>
            <div class="form_group">
                <label><i class="far fa-user-lock"></i></label>
                <input type="password" class="form_control" placeholder="**********" name="password" required>
            </div>
            <div class="form_group">
                <label><i class="far fa-user-lock"></i></label>
                <input type="password" class="form_control" placeholder="**********" name="password_confirmation" required>
            </div>
            <div class="form_group">
                <button class="main-btn primary-btn">Submit</button>
            </div>
        </form>
        <p class="mt-4 text-right">Already have an account ? <a href="{{ route('login') }}">Login</a></p>
    </div>
</x-guest-layout>
