<div>
    <label for="name">Curriculum Name</label>
    <input type="text" name="name" id="name" @if(isset($curriculum)) value="{{ $curriculum->name }}" @endif>
</div>