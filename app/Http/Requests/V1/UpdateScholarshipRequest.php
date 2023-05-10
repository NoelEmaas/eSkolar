<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateScholarshipRequest extends FormRequest
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
        $method = $this->method;

        if ($method == 'PUT') {
            return [
                'authorId' => ['required' , 'integer'],
                'benefactor' => ['required'],
                'program' => ['required'],
                'description' => ['required'],
                'amountMin' => ['required', 'numeric'],
                'amountMax' => ['required', 'numeric'],
            ];
        } else {
            return [
                'authorId' => ['sometimes', 'required', 'integer'],
                'benefactor' => ['sometimes', 'required'],
                'program' => ['sometimes', 'required'],
                'description' => ['sometimes', 'required'],
                'amountMin' => ['sometimes', 'required', 'numeric'],
                'amountMax' => ['sometimes', 'required', 'numeric'],
            ];
        }
    }

    protected function prepareForValidation() {
        $this->merge([
            'user_id' => $this->authorId,
            'amount_min' => $this->amountMin,
            'amount_max' => $this->amountMax
        ]);
    }
}
