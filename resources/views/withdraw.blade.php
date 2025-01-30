<x-guest-layout>
    <x-slot:title>Withdraw</x-slot:title>
    <div class="contact-form-wrapper mb-50 wow fadeInRight mx-auto" style="max-width: 50rem">
        <ul class="list-group text-danger mb-4 text-sm">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <x-auth-session-status :status="session('status')"/>
        <form class="contact-form" action="{{ route('withdraw') }}" method="post">
            @csrf
            <div class="form_group">
                <label><i class="far fa-wallet"></i></label>
                <input type="number" class="form_control" placeholder="0.00" name="amount" required>
            </div>
            <div class="form_group">
                <label><i class="fab fa-bitcoin"></i></label>
                <input type="text" class="form_control" placeholder="Enter Wallet Address" name="wallet_address" required>
            </div>
            <div class="form_group">
                <button class="main-btn primary-btn">Proceed</button>
            </div>
        </form>
    </div>
</x-guest-layout>
