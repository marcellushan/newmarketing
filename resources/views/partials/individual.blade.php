<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Name</label>
            <input class= "form-control" type="text" name="quote_name_{{$number}}" @if($number==1) placeholder="Required" required @endif>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Email</label>
            <input class= "form-control" type="email" name="quote_email_{{$number}}" @if($number==1) placeholder="Required" required @endif>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label>Phone</label>
            <input class= "form-control" type='tel' name="quote_phone_{{$number}}" @if($number==1) placeholder="Required" required @endif>
        </div>
    </div>
</div>