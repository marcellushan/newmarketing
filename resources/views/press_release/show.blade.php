    <div class="row">
        <div class="title col-md-10">{{$service_name}}</div>
    </div>
        <div class="row">
            <div class="col-sm-3 category">News Type</div>
            <div class="col-sm-8 item">
                @if($service_type->student_feature) Student Feature @endif
                @if($service_type->departmental_news) Departmental News @endif
                @if($service_type->student_news) Student News @endif
                @if($service_type->college_news) College News @endif
                @if($service_type->alumni_feature) Alumni Feature @endif
                @if($service_type->research) Research @endif
                @if($service_type->alumni_news) Alumni News @endif
                @if($service_type->recognition) Recognition @endif
                @if($service_type->employee_feature) Employee Feature @endif
                @if($service_type->award) Award @endif
                @if($service_type->employee_news) Employee News @endif
                @if($service_type->retirement)Retirement @endif
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Details</div>
            <div class="col-sm-8 item">{{$service_type->details}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Professional and Corporate publication</div>
            <div class="col-sm-8 item">{{$service_type->professional}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Promotional materials</div>
            <div class="col-sm-8 item">{{$service_type->promotional}}</div>
        </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Target Audience</div>
        <div class="col-sm-8 item">{{$service_type->audience}}</div>
        </div>
    @if($service_type->quote_name_1)
        <div class="row">
            <h3 class="col-sm-10 category">Provide quote 1</h3>
        </div>
        <div class="row">
            <div class="col-sm-3 category">Names</div>
            <div class="col-sm-8 item">{{$service_type->quote_name_1}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Emails</div>
            <div class="col-sm-8 item">{{$service_type->quote_email_1}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Phone</div>
            <div class="col-sm-8 item">{{$service_type->quote_phone_1}}</div>
        </div>
    @endif
    @if($service_type->quote_name_2)
        <div class="row">
            <h3 class="col-sm-10 category">Provide quote 2</h3>
        </div>
        <div class="row">
            <div class="col-sm-3 category">Names</div>
            <div class="col-sm-8 item">{{$service_type->quote_name_2}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Emails</div>
            <div class="col-sm-8 item">{{$service_type->quote_email_2}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Phone</div>
            <div class="col-sm-8 item">{{$service_type->quote_phone_2}}</div>
        </div>
    @endif
    @if($service_type->quote_name_3)
        <div class="row">
            <h3 class="col-sm-10 category">Provide quote 3</h3>
        </div>
        <div class="row">
            <div class="col-sm-3 category">Names</div>
            <div class="col-sm-8 item">{{$service_type->quote_name_3}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Emails</div>
            <div class="col-sm-8 item">{{$service_type->quote_email_3}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Phone</div>
            <div class="col-sm-8 item">{{$service_type->quote_phone_3}}</div>
        </div>
    @endif
    <p></p>
    @if($service_type->image)
        <div class="row">
            <div class="col-sm-3 category">Documents</div>
            <div class="col-sm-7 item"><a href="{{$service_type->image}}">Link</a> </div>
        </div>
        @endif

</div>
</div>

