<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post' => 'required|max:1000',
            'user_id' => 'required',
            'note_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'メモのタイトルを入力してください',
            'title.max' => 'メモのタイトルは:max文字以内で入力してください',
            'post.required' => 'メモの内容を入力してください',
            'post.max' => 'メモの内容は:max文字以内で入力してください',
            'user_id.required' => 'ユーザー情報が正しく送信されていません',
        ];
    }
}
