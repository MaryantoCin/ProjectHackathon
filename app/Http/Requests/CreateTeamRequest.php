<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "leaderName" => 'required',
            "leaderAddress" => 'required',
            "leaderBirth" => 'required',
            "leaderEmail" => 'required',
            "leaderNumber" => 'required',
            "leaderLine" => 'required',
            "leaderGithub" => 'required',
            "leaderCV" => 'nullable|file|max:4096',
            "leaderProject" => 'nullable|file|max:204800',
            "member1Name" => 'required',
            "member1Address" => 'required',
            "member1Birth" => 'required',
            "member1Email" => 'required',
            "member1Number" => 'required',
            "member1Line" => 'required',
            "member1Github" => 'required',
            "member1CV" => 'nullable|file|max:4096',
            "member1Project" => 'nullable|file|max:204800',
            "member2Name" => 'required',
            "member2Address" => 'required',
            "member2Birth" => 'required',
            "member2Email" => 'required',
            "member2Number" => 'required',
            "member2Line" => 'required',
            "member2Github" => 'required',
            "member2CV" => 'nullable|file|max:4096',
            "member2Project" => 'nullable|file|max:204800'
        ];
    }
}
