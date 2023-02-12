<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideogameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   
        $fechaActual = now();

        return [
            'nombre' => ['max:255'],
            'fecha_lanzamiento' => ['before:'.$fechaActual],
            'imagen_portada' => ['nullable','image']
        ];
    }
}
