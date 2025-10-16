<?php

namespace App\Rules;

use App\Models\Issue;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class maxDepth implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (is_null($value)) {
            return;
        }

        // get the parent
        $parent = Issue::find($value);

        if ($parent && !is_null($parent->parent_id)) {
            $fail('');
        }
    }
}
