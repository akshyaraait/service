<?php

namespace AkshyaraaIt\Service\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenseRequest extends FormRequest
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
        return [
            'access_code' => 'required',
            'akshyaraapay_email' => 'required|email'
        ];
    }

    /**
     * Translate fields with user friendly name.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'access_code'           => trans('service::install.access_code'),
            'akshyaraapay_email'          => trans('service::install.akshyaraapay_email')
        ];
    }
}
