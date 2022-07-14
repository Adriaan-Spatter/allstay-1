<div>
    <input type="hidden" name="lesson_id" id="lesson_id" value="{{ $lesson->id }}">
    <label for="name">Question Text</label>
    <input type="text" name="text" id="text" @if(isset($question)) value="{{ $question->text }}" @endif>
    <label for="question_type_id">Question Type</label>
    <select name="question_type_id" id="question_type_id">
        <option value="1">MCQ</option>
    </select>
</div>