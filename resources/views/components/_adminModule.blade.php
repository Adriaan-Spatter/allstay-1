<div>
    <label for="name">Module Name</label>
    <input type="text" name="name" id="name" @if(isset($module)) value="{{ $module->name }}" @endif>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" @if(isset($module)) value="{{ $module->description }}" @endif>
    <label for="notes">Module Notes</label>
    <input type="text" name="notes" id="notes" @if(isset($module)) value="{{ $module->notes }}" @endif>
    <label for="difficulty">Lesson Difficulty(Between 1-10)</label>
    <input type="number" id="difficulty" name="difficulty" step="0.5" min="1" max="10" @if(isset($module)) value="{{ $module->difficulty }}" @else value="1" @endif>
    <label for="duration">Lesson Duration</label>
    <input type="number" id="duration" name="duration" step="0.5" min="0.5" @if(isset($module)) value="{{ $module->duration }}" @else value="0.5" @endif>
</div>