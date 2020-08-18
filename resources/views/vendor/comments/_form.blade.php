@if($errors->has('commentable_type'))
    <div class="alert alert-danger" role="alert">
        {{ $errors->first('commentable_type') }}
    </div>
@endif
@if($errors->has('commentable_id'))
    <div class="alert alert-danger" role="alert">
        {{ $errors->first('commentable_id') }}
    </div>
@endif
<form method="POST" action="{{ route('comments.store') }}">
    @csrf
    @honeypot
    <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
    <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

    {{-- Guest commenting --}}
    @if(isset($guest_commenting) and $guest_commenting == true)
        <div class="form-group">
            <label for="message">Enter your name here:</label>
            <input type="text" class="form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name" />
            @error('guest_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">Enter your email here:</label>
            <input type="email" class="form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email" />
            @error('guest_email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    @endif
    
    <div class="form-group">
        <div class="row">
            <div class="col-lg-1">
                <div class="profile-comment"
                    style="background-image: url({{ url('frontend/images/mart7.jpeg') }});">
                </div>
            </div>
            <div class="col-lg-9">
                <!-- COMMENT TEXTAREA -->
                <textarea type="text-area" class="form-control smallerfont p-2"
                    placeholder="ADD COMMENT" rows="2" @if($errors->has('message')) is-invalid @endif" name="message"></textarea>
                    <div class="invalid-feedback">
                        Your message is required.
                    </div>
                <!-- COMMENT TEXTAREA END -->
            </div>
            <div class="col-lg-2 text-right">
                <button type="submit"
                    class=" text-center d-inline hbtn hb-fill-right bg-color1 pl-4 pr-4 smallerfont">SUBMIT</button>
            </div>
            <div class="ml-3 mt-2">
                <small class="form-text text-muted"><a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a> cheatsheet.</small>
            </div>
        </div>                
    </div>
</form>
<hr />