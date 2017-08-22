@extends('layouts.app') @section('content')
<div class="main container">
    <h3 >Press Release/Media Advisory</h3>
            {{Form::open(array('url' => 'press_release','files'=>'true', 'id' => 'press_release'))}}

            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Student Feature
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Student Feature">
                </div>
                <div class="col-xs-10 col-sm-4">
                    Departmental News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Departmental News">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Student News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Student News">
                </div>
                <div class="col-xs-10 col-sm-4">
                    College News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="College News">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Alumni Feature
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Alumni Feature">
                </div>
                <div class="col-xs-10 col-sm-4">
                   Research
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Research">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Alumni News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Alumni News">
                </div>
                <div class="col-xs-10 col-sm-4">
                    Recognition
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="media_type[]" value="Recognition">
                </div>
            </div>
                 <div class="row">
                     <div class="col-xs-10 col-sm-4">
                         Employee Feature
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="media_type[]" value="Employee Feature">
                     </div>
                     <div class="col-xs-10 col-sm-4">
                         Award
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="media_type[]" value="Award">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-10 col-sm-4">
                         Employee News
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="media_type[]" value="Employee News">
                     </div>
                     <div class="col-xs-10 col-sm-4">
                         Retirement (15-20 years plus)
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="media_type[]" value="Retirement">
                     </div>
                 </div>
                @include('partials.textbox', ['title' => 'Why is this of significant news value? Briefly describe any key points', 'name' => 'details'])
                @include('partials.textbox', ['title' => 'In addition to media, to what other professional and corporate publication should we submit this story?', 'name' => 'professional'])
                @include('partials.audience')
    <p></p>
                <div class="row">
                    <div class="col-sm-8">
                        Please provide the name, email and
                        phone number of the individual(s)
                        who should be quoted in this piece or
                        recommended to media for answering
                        related questions.
                    </div>
                </div>
    @include('partials.individual', ['number' => '1'])
    @include('partials.individual', ['number' => '2'])
    @include('partials.individual', ['number' => '3'])

    <div class="row">
        <div class="col-sm-8">
            Upload any supporting images/documents
            that are to be included.
        </div>
    </div>

    <div class="row">
                    <div class="col-sm-6">
                        <h4>{{Form::file('image')}}</h4>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-3">
                    <div class="form-group">
                       <input type="submit" class="btn-default btn-lg" id="confirm">
                    </div>
                </div>
            </div>

</form>
</div>
@endsection
