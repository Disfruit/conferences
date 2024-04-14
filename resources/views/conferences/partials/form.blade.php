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
        <label for="city-input">City</label>
    </div>
    <div>
        <input id="city-input" type="text" name="city" value="{{old('city', optional($conference ?? null)->city)}}">
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
<br>


