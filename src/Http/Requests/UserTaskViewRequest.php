<?php

namespace TaskManagement\Http\Requests;

use Helper\Http\Requests\BaseRequest;
use TaskManagement\Rules\UserTaskExists;

/**
 * @property string $uuid
 **/
class UserTaskViewRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
        return [
            'uuid' => ['required', 'string', 'uuid', new UserTaskExists]
        ];
    }
}
