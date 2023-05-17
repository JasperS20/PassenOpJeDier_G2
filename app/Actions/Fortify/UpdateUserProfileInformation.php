<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'address' => ['required', 'string', 'max:255'],
            'streetname' => ['required', 'string', 'max:255'],
            'housenumber' => ['required', 'integer', 'max:1000'],
            'phonenumber' => ['required', 'string', 'max:15'],
            'age' => ['required', 'integer', 'max:99'],
            'surname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'profile_picture' => ['required', 'image'],
        ])->validate();

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'address' => $input['address'],
                'streetname' => $input['streetname'],
                'housenumber' => $input['housenumber'],
                'phonenumber' => $input['phonenumber'],
                'age' => $input['age'],
                'surname' => $input['surname'],
                'lastname' => $input['lastname'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'streetname' => $input['streetname'],
            'housenumber' => $input['housenumber'],
            'phonenumber' => $input['phonenumber'],
            'age' => $input['age'],
            'surname' => $input['surname'],
            'lastname' => $input['lastname'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
