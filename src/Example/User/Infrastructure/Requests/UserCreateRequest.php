<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Src\Example\User\Domain\Exceptions\UserException;

final class UserCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_name'  => 'required|string',
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'password'   => 'required|string'
        ];
    }

    /**
	 * Handle a failed validation attempt.
	 *
	 * @param Validator $validator
	 * @return void
	 *
	 * @throws ValidationException
	 */
	public function failedValidation(Validator $validator)
	{
        throw new UserException('Invalid parameters', 422, data: $validator->errors()->toArray());
	}
}