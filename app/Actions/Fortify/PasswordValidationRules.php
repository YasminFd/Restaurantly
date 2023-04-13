<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        $pass= new Password;

        $pass->length(10)->requireSpecialCharacter()->requireNumeric()->requireUppercase();
        
        return ['required', 'string', $pass, 'confirmed'];
    }
}
