<?php

namespace App\Http\Requests\Admin\Inventory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreInventory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.inventory.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'color' => ['nullable', 'string'],
            'cost_cents' => ['required','integer'],
            'height' => ['nullable','integer'],
            'length' => ['nullable','integer'],
            'note' => ['nullable', 'string'],
            'product_name' => ['required','array'],
            'price_cents' => ['nullable','integer'],
            'quantity' => ['nullable','integer'],
            'sale_price_cents' => ['nullable','integer'],
            'size' => ['nullable', 'string'],
            'sku' => ['nullable', 'string'],
            'weight' => ['nullable','integer'],
            'width' => ['nullable','integer'],

        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
