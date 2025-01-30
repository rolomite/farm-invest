<?php

use App\Models\PaymentMethod;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('instruction')->nullable();
            $table->json('details');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        PaymentMethod::create([
            'name' => 'crypto',
            'instruction' => 'Send BTC to the address below and upload transaction screenshot to verify',
            'details' => [
                'Wallet Name' => 'Bitcoin',
                'Wallet Address' => '0x000000000',
            ],
        ]);

        PaymentMethod::create([
            'name' => 'bank',
            'instruction' => 'Pay using the account details below',
            'details' => [
                'Bank Name' => 'Bitcoin',
                'Account Number' => '0x000000000',
                'Account Name' => config('app.name'),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
