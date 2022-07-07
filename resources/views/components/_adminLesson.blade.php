<div>
    <input type="hidden" name="module_id" id="module_id" value="{{ $module->id }}">
    <label for="name">Lesson Name</label>
    <input type="text" name="name" id="name" @if(isset($lesson)) value="{{ $lesson->name }}" @endif>
    <label for="introduction">Introduction</label>
    <input type="text" name="introduction" id="introduction" @if(isset($lesson)) value="{{ $lesson->introduction }}" @endif>
</div>