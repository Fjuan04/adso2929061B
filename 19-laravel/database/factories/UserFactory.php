<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\HTTP;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        

            //
            $response = Http::timeout(10)->get('https://randomuser.me/api/');
            $user = $response->json()['results'][0];

            $doc = $this->faker->unique()->numberBetween(10000000, 1100000000);
            $gender = $user['gender'];
            $fullname = $user['name']['first'] . ' ' . $user['name']['last'];
            $email = $user['email']; //$this->faker()->email();
            $birthdate = $this->faker->dateTimeBetween('1976-01-01', '2006-01-01');
            $phone = $this->faker->numerify('3#########');
            $photoUrl = $user['picture']['medium'];

            // Generar nombre único
            $fileName = Str::random(10) . '.jpg';
            $destinationPath = public_path('images/' . $fileName);


            if (!file_exists(public_path('images'))) {
                mkdir(public_path('images'), 0755, true);
            }


            copy($photoUrl, $destinationPath);

        

        return [
            'document'  => $doc,
            'fullname'  => $fullname,
            'gender'    => $gender,
            'birthdate' => $birthdate,
            'photo'     => $fileName ? 'images/' . $fileName : null,
            'phone'     => $phone,
            'email'     => $email,
            'password'  => bcrypt('password123'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
