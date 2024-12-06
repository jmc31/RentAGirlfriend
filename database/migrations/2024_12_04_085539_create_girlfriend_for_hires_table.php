<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('girlfriend_for_hires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->text('description')->nullable();
            $table->text('status');
            $table->decimal('rate_per_hour', 8, 2);
            $table->timestamps();
        });


        DB::table('girlfriend_for_hires')->insert([
            [
                'name' => 'Maris Racal',
                'age' => 23,
                'address' => 'Liloan Cebu City',
                'contact_no' => '31313133',
                'description' => 'Friendly and fun-loving.',
                'status' => 'Available',
                'rate_per_hour' => 1.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kathryn Bernardo',
                'age' => 27,
                'address' => 'Quezon City, Manila',
                'contact_no' => '987654321',
                'description' => 'Intelligent and caring.',
                'status' => 'Not Available',
                'rate_per_hour' => 2.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nadine Lustre',
                'age' => 30,
                'address' => 'Manila, Philippines',
                'contact_no' => '912345678',
                'description' => 'Loves to travel and explore.',
                'status' => 'Available',
                'rate_per_hour' => 2.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Liza Soberano',
                'age' => 25,
                'address' => 'Laguna, Philippines',
                'contact_no' => '923456789',
                'description' => 'A great conversationalist and listener.',
                'status' => 'Available',
                'rate_per_hour' => 3.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Geronimo',
                'age' => 35,
                'address' => 'Pasig City, Manila',
                'contact_no' => '934567890',
                'description' => 'Loves music and dancing.',
                'status' => 'Not Available',
                'rate_per_hour' => 4.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Angel Locsin',
                'age' => 38,
                'address' => 'Taguig City, Manila',
                'contact_no' => '945678901',
                'description' => 'Strong, independent, and compassionate.',
                'status' => 'Available',
                'rate_per_hour' => 5.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anne Curtis',
                'age' => 39,
                'address' => 'Quezon City, Manila',
                'contact_no' => '956789012',
                'description' => 'Spontaneous and energetic.',
                'status' => 'Not Available',
                'rate_per_hour' => 6.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maine Mendoza',
                'age' => 28,
                'address' => 'Davao City, Philippines',
                'contact_no' => '967890123',
                'description' => 'Funny, outgoing, and caring.',
                'status' => 'Available',
                'rate_per_hour' => 1.50,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('girlfriend_for_hires');
    }
};
