<!-- div.row -->
@if(Auth::check())
	{{ Form::open(array('url'=>'note', 'method'=>'post')) }}
	<div class="md-col-12">
		<div id="note-content-wrapper">
			<p id="action-intro" class="action-intro">Select part of the document to make an edit or comment.</p>
			<textarea name="note_content" id="note_content" class="hidden form-inline"></textarea>
			<input id="note-submit-btn" type="submit" class="btn btn-primary btn-xs btn-block hidden" value="Submit"/>
			<p id="participate-msg" class="hidden" style="color:white;padding:10px;"></p>
		</div>
	</div>
	<input id="parent_id" name="parent_id" type="hidden" value="0" />
	<input id="doc_id" name="doc_id" type="hidden" value="{{ $doc->id }}" />
	<input id="type" name="type" type="hidden" />
	<input id="section_id" name="section_id" type="hidden" />
	{{ Form::token() }}
	{{ Form::close() }}
@else
	<div class="md-col-12">
	<p style="padding-left:20px;" class="gray">Please {{ HTML::link('user/login', 'Login', array('class'=>'underlined')) }} to participate</p>
	</div>
@endif