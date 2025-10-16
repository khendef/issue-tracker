<?php

namespace App\Http\Requests\Issue;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\maxDepth;

class StoreIssueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'required|exists:projects,id',
            'priority' => 'sometimes|string|in:high,medium,low',
            'status' => 'sometimes|string|in:in_progress,completed',
            'due_date' => 'nullable|date|after_or_equal:today',
            'parent_id' => [ 'nullable', 'exists:tasks,id',  new maxDepth() ]
        ];
    }
}
