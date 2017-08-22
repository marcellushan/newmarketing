{{--{{Form::select('date_needed[]', ['01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08' => '08',--}}
                              {{--'09' => '09','10' => '10','11' => '11','12' => '12'], null, ['placeholder' => 'Month'])}}--}}
<select name="date_needed[]"required>
    <option value="">Month</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>
{{Form::select('date_needed[]', ['01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08' => '08',
                                    '09' => '09','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15'
                                     ,'16' => '17','18' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24'
                                     ,'25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31'], null, ['placeholder' => 'Day'])}}
{{Form::select('date_needed[]', ['2017' => '2017','2018' => '2018'], null, ['placeholder' => 'Year'])}}