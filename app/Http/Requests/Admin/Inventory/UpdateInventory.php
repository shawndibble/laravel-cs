<?php

namespace App\Http\Requests\Admin\Inventory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateInventory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.inventory.edit', $this->inventory);
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
            'cost_cents' => ['sometimes', 'integer'],
            'height' => ['sometimes', 'integer'],
            'length' => ['sometimes', 'integer'],
            'note' => ['nullable', 'string'],
            'price_cents' => ['sometimes', 'integer'],
            'product_id' => ['sometimes', 'string'],
            'quantity' => ['sometimes', 'integer'],
            'sale_price_cents' => ['sometimes', 'integer'],
            'size' => ['nullable', 'string'],
            'sku' => ['nullable', 'string'],
            'weight' => ['sometimes', 'integer'],
            'width' => ['sometimes', 'integer'],
            
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
