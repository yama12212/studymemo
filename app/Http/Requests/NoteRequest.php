<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
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
            'title' => 'required|max:50',
            'user_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'ノートのタイトルを入力してください',
            'title.max' => 'ノートのタイトルは50文字以内で入力してください',
            'user_id.required' => 'ユーザー情報が正しく送信されていません',
        ];
    }
}
