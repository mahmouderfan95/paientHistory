<?php

namespace App\Http\Requests\BackEnd\patien;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'width' => 'required',
            'height'    => 'required',
            'blood'     => 'required',
            'agree_name'=> 'required|array|min:1',
            'allergi_name'=> 'array|min:1',
            'severity'    => 'array|min:1',
            'reaction'     => 'array|min:1',
            'surgery_name'  => 'array|min:1',
            'surgery_date'  => 'array|min:1',
            'medication_name'=> 'array|min:1',
            'colonscopy'    => '',
            'colonscopy_data'=>'',
            'mammogram'       => '',
            'mammogram_data'    => '',
            'prc'               => '',
            'prc_data'          => '',
            'alcohol'           => '',
            'alcoholtype'       => '',
            'cigarettes'        => '',
            'tobacco'           => '',
            'drug'              => '',
            'mother'            => 'array|min:1',
            'other_mother'      => '',
            'father'            => 'array|min:1',
            'other_father'      => '',
            'sister'            => 'array|min:1',
            'other_sister'      => '',
            'brother'           => 'array|min:1',
            'other_brother'     => '',


        ];
    }
}
