<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Autoriza todas as requisições
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([ // Use a classe importada
            'status' => false,
            'errors' => $validator->errors(),
        ], 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Recupera o id do usuário enviado na URL
        $userId = $this->route('user');

        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->route('user')->id,
            'password' => 'required|string|min:6',
        ];
    }

    // Retorna mensagens de erro para cada regra de validação
    public function messages(): array
    {
        // Mensagens de validação
        return [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O nome deve ter pelo menos :min caracteres!',
            'name.max' => 'O nome deve ter no máximo :max caracteres!',
            'email.required' => 'O email deve ser preenchido!',
            'email.email' => 'Deve preencher um email valido!',
            'email.unique' => 'Este email já está cadastrado!',
            'password.require' => 'A senha é obrigatória!',
            'password.min' => 'A senha precisa ter pelo menos :min caracteres!'
        ];
    }
}
