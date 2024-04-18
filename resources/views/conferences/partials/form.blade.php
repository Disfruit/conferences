<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
    }
    .content {
        text-align: center;
    }
    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <div class="content">
        <div>
            <label for="title-input">Title</label>
        </div>
        <div>
            <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->title )}}">
        </div>
        <div>
            <div>
                <label for="description-input">Description</label>
            </div>
            <div>
                <textarea id="description-input" name="description">{{old('description', optional($conference ?? null)->description)}}</textarea>
            </div>
        </div>
        <div>
            <div>
                <label for="date-input">Date</label>
            </div>
            <div>
                <input id="date-input" type="text" class="datepicker" name="date" value="{{old('date', optional($conference ?? null)->date)}}">
            </div>
        </div>
        <div>
            <div>
                <label for="author-input">Author</label>
            </div>
            <div>
                <input id="author-input" type="text" name="author" value="{{old('author', optional($conference ?? null)->author)}}">
            </div>
        </div>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
