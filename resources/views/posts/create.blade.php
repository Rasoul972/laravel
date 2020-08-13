@extends("posts.layout")

@section("title")
    create post
@endsection

<style>
    * {
        direction: rtl;
        text-align: right;
        font-family: Tahoma
    }

    .row {
        float: right;
        width: 100%;
        margin-bottom: 25px;
        padding-right: 50px;
    }

    input {
        width: 250px;
        border: 1px solid #ccc;
        padding: 5px;
        color: #777
    }

    label {
        width: 120px;
        color: #555;
        display: inline-block;
        font-size: 11pt;
    }

    textarea {
        border: 1px solid #ccc
    }

    button {
        border: none;
        box-shadow: none;
        color: white;
        padding: 5px;
        width: 50px;
        text-align: center;
        border-radius: 4px;
        cursor: pointer;
    }

    .red_btn {
        background: red
    }

    .green_btn {
        background: green;
    }

</style>

@section("content")

    {{--@if(count($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route("posts.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <label>عنوان مطلب</label>
            <input name="aa" value="{{old("title")}}">
        </div>
        <div class="row">
            <label style="vertical-align: top">متن</label>
            <textarea name="body">{{old("body")}}</textarea>
        </div>
        <div class="row">
            <label>تصویر</label>
            <input type="file" name="file">
        </div>
        <div class="row">
            <button class="green_btn">ذخیره</button>
        </div>
    </form>--}}

    {{trans_choice("message.cars",8)}}
    <br>
    {{trans_choice("message.time",6,["value"=>50])}}

@endsection
