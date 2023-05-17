<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'address' => ['required', 'string', 'max:255'],
            'streetname' => ['required', 'string', 'max:255'],
            'housenumber' => ['required', 'integer', 'max:1000'],
            'phonenumber' => ['required', 'string', 'max:15'],
            'age' => ['required', 'integer', 'max:99'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'address' => $input['address'],
            'streetname' => $input['streetname'],
            'housenumber' => $input['housenumber'],
            'phonenumber' => $input['phonenumber'],
            'age' => $input['age'],
        ]);
    }
}
