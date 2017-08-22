@extends('layouts.app') @section('content')
<div class="main container">
    {{Form::open(array('url' => 'design_printing','files'=>'true','id'=>'design_printing'))}}
    <h3 >Design and Printing</h3>
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="usr"><div class="column_header">What do you need designed/printed?</div></label>
                   <textarea class="form-control" rows="5" name="details" placeholder="required">{{$service_type->details or ''}}</textarea>
                </div>
            </div>
        </div>
        <h3>For information on printing costs <a href="{{URL::to('/')}}/documents/2016_Price_List.pdf" target="_blank">click here.</a></h3>
            @include('partials.audience')

                        <!-- Text input-->
                        <h3>PAYMENT TYPE:</h3>

                        <div class="row">
                            <div class="col-sm-3">
                                <input type="radio" name="payment_type" value="Purchase Order" />Purchase Order*<br>
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" name="payment_type" value="Credit Card"  />Credit Card*<br>
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" name="payment_type" value="Transfer Funds"  />Transfer Funds**<br>
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" name="payment_type" value="Grant"  />Grant<br>
                            </div>
                        </div>
                        <h5>*Purchase Order or Credit Card required when using outside vendor</h5>  <h5>**Transfer Funds when all work is completed in-house.</h5>
                        <div id="transfer">
                            <h4>REQUIRED WHEN DOING A TRANSFER OF FUNDS</h4>
                <p>
                    <input  name="dept" type="text" minlength="7" maxlength="7" size="10" placeholder="Dept" class="fund">
                    <input  name="fund" type="text" minlength="5" maxlength="5" size="10" placeholder="Fund" class="fund">
                    <input  name="program" type="text" minlength="5" maxlength="5" size="10" placeholder="Program" class="fund">
                    <input  name="class" type="text" minlength="5"maxlength="5" size="10" placeholder="Class" class="fund">
                <p>
            </div>
            <div id="grant">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Text input-->

                        <h4>GRANT NUMBER IS REQUIRED</h4>
                    </div>
                    <div class="col-sm-5">
                        <input name="grant_number" type="text"  maxlength="20" placeholder="Grant Number (required)" class="form-control" id="grant_field" value="<? echo @$_POST['empName'] ?>" required>
                    </div>
                </div>

    </div>
<p>
    <div class="row">
        <div class="col-sm-8">
            <label for="usr"><div class="column_header">Job Description</div></label>
            <textarea class="form-control" rows="3" id="jobDesc" name="job_description" placeholder="required" ></textarea>
        </div>
    </div>
<p>
<div class="row">
    <div class="col-sm-5">
        <label for="usr"><div class="column_header">No. of Copies</div></label>
        <input  name="copies" type="text" size="10" >
    </div>
    <div class="col-sm-6">
        <label for="usr"><div class="column_header">Date Needed: </div></label> @include('partials.date_needed')<br>
    </div>
</div>
<br />

    <div class="column_header">Please check services needed:</div>
    <div class="row">
        <div class="col-xs-6">
            <input type="radio" name="services_needed" value="New Project"  />New Project<br>
            <input type="radio" name="services_needed" value="Reprint as is"  />Reprint as is<br>
            <input type="radio" name="services_needed" value="Reprint with changes"  />Reprint with changes<br>
        </div>
        <div class="col-xs-6">
            <input type="radio" name="color" value="Black and White"  />Black & White<br>
            <input type="radio" name="color" value="Color"  />Color<br>
        </div>

    </div>


<br>
<h3>Please attach all materials here.</h3>

        <div class="row">
            <div class="col-sm-8">
                If there is more than one image, cut and paste them into a single document.
            </div>
        </div>

<br>
<input type="file" name="image" id="fileToUpload"><br>

<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit" id="confirm" />


</div>
</form>


@endsection
