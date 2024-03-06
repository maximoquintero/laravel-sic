<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // aqui vamos a agregar todas las reglas de validacion
            // importante recuerden los names de sus campos
            'name_student'=> 'required|alpha',
            'lastname_student'=> 'required|alpha',
            'id_student'=> 'required|alpha',
            'birthday'=> 'required|date',
            'comments'=> 'required|string',
        ];
    }
}
