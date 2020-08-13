<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            "title" => ["required", "max:10"],
            "body" => "required",
            "file"=>"required|max:1024|mimes:jpg,jpeg,png"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "عنوان مطلب را وارد کنید",
            "body.required" => "توضیحات مطلب را وارد کنید",
            "file.required"=>"تصویر پست انتخاب نشده است",
            "file.max"=>"حداکثر حجم فایل برابر یک مگابایت می باشد",
            "file.mimes"=>"فرمت فایل صحیح نیست"
        ];
    }
}
