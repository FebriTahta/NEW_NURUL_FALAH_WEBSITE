@extends('new_layouts.form_master')

@section('tittle')
<title>{{$form->nama_form}}</title>

<!-- Favicons-->
<link rel="shortcut icon" href="{{$form->img_form}}" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="{{$form->img_form}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{$form->img_form}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{$form->img_form}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{$form->img_form}}">
@endsection

@section('style')
<style>

@media(min-width: 600px) {
    #img_form {
        max-width: 100% !important;
    }
}

@media(max-width: 599px) {
    #img_form {
        width: 300px !important;
        height: 300px !important;
    }
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
@endsection

@section('informasi_form')
<figure><img id="img_form" src="{{$form->img_form}}" alt="" class="img-fluid" width="300" height="300"></figure>
<h2 class="text-capitalize">{{$form->nama_form}}</h2>
<p class="text-capitalize" style="font-size: 18px">{{$form->jenis_form}}</p>
@endsection

@section('form_content')
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <div id="top-wizard">
            <span id="location"></span>
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form id="wrapped" method="post" enctype="multipart/form-data">
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                @foreach ($grouppertanyaan as $item_g)
                <div class="step text-capitalize">
                    <h2 class="section_title ">{{$item_g->nama_group}}</h2>
                    <h3 class="main_question">{{$form->nama_form}}</h3>
                    @foreach ($item_g->pertanyaan as $item_p)
                        @if ($item_p->jenis_pertanyaan == 'bebas')
                            <!-- /Start Isian Bebas ============================== -->
                            @if (substr($item_p->pertanyaan,0,6) == 'alamat')
                                <hr>
                                <div class="form-group add_top_30">
                                    <label for="alamat" class="text-capitalize">{{$item_p->pertanyaan}}</label>
                                    <textarea class="form-control" name="alamat" id="alamat" style="min-height: 100px" cols="30" rows="10"></textarea>
                                </div>
                            @else
                                <div class="form-group add_top_30">
                                    <label for="name" class="text-capitalize">{{$item_p->pertanyaan}}</label>
                                    <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                                </div>
                            @endif
                        @elseif($item_p->jenis_pertanyaan == 'choose2')
                        
                        @endif
                    @endforeach
                </div>
                @endforeach
                <!-- /step-->
               
                

               

                <!-- /Work Availability > Full-time ============================== -->
                <div class="branch" id="Full-time">
                    <div class="step" data-state="end">
                        <h2 class="section_title">Work Availability</h2>
                        <h3 class="main_question">Additional info about "Full Time" availability</h3>
                        <div class="form-group add_bottom_30">
                            <label>Minimum salary? (in USD)</label>
                            <label for="minimum_salary_full_time">Choose a range</label>
                            <div class="styled-select">
                                <select class="form-control required" id="minimum_salary_full_time" name="minimum_salary_full_time">
                                    <option value="">Choose a range</option>
                                    <option value="&lt;10k">&lt;10k</option>
                                    <option value="10-15k">10-15k</option>
                                    <option value="15-20k">15-20k</option>
                                    <option value="20-25k">20-25k</option>
                                    <option value="25-30k">25-30k</option>
                                    <option value="30-35k">30-35k</option>
                                    <option value="35-40k">35-40k</option>
                                    <option value="45-50k">45-50k</option>
                                    <option value="&gt;50k">&gt;50k</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group add_bottom_30">
                            <label>How soon would you be looking to start?</label>
                            <label for="start_availability_full_time">Choose your availability</label>
                            <div class="styled-select">
                                <select class="form-control required" id="start_availability_full_time" name="start_availability_full_time">
                                    <option value="">Choose your availability</option>
                                    <option value="I can start immediately">I can start immediately</option>
                                    <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
                                    <option value="I am passively browsing">I am passively browsing</option>
                                    <option value="I will be available in a couple months">I will be available in a couple months</option>
                                    <option value="I am not sure">I am not sure</option>
                                </select>
                            </div>
                        </div>
                        <label class="custom">Are you willing to work remotely?</label>
                        <div class="form-group radio_input">
                            <label class="container_radio mr-3">Yes
                                <input type="radio" name="remotely_full_time" value="Yes" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">No
                                <input type="radio" name="remotely_full_time" value="No" class="required">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <!-- /Work Availability > Part-time ============================== -->
                <div class="branch" id="Part-time">
                    <div class="step" data-state="end">
                        <h2 class="section_title">Work Availability</h2>
                        <h3 class="main_question">Additional info about "Part Time" availability</h3>
                        <div class="form-group add_bottom_30">
                            <label>Minimum salary? (in USD)</label>
                            <label for="minimum_salary_part_time">Choose a range</label>
                            <div class="styled-select clearfix">
                                <select class="form-control required" id="minimum_salary_part_time" name="minimum_salary_part_time">
                                    <option value="">Choose a range</option>
                                    <option value="&lt;2k">&lt;2k</option>
                                    <option value="3-5k">3-5k</option>
                                    <option value="5-7k">5-7k</option>
                                    <option value="7-10k">7-10k</option>
                                    <option value="&gt;10k">&gt;10k</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group add_bottom_30">
                            <label>How soon would you be looking to start?</label>
                             <label for="start_availability_part_time">Choose your availability</label>
                            <div class="styled-select clearfix">
                                <select class="form-control required" id="start_availability_part_time" name="start_availability_part_time">
                                    <option value="">Choose your availability</option>
                                    <option value="I can start immediately">I can start immediately</option>
                                    <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
                                    <option value="I am passively browsing">I am passively browsing</option>
                                    <option value="I will be available in a couple months">I will be available in a couple months</option>
                                    <option value="I am not sure">I am not sure</option>
                                </select>
                            </div>
                        </div>
                        <label class="custom">When you prefer to work?</label>
                        <div class="form-group radio_input">
                            <label class="container_radio mr-3">Morning
                                <input type="radio" name="day_preference_part_time" value="Morning" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio mr-3">Afternoon
                                <input type="radio" name="day_preference_part_time" value="Afternoon" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">No Preferences
                                <input type="radio" name="day_preference_part_time" value="No Preferences" class="required">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <!-- /Work Availability > Freelance-Contract ============================== -->
                <div class="branch" id="Freelance-Contract">
                    <div class="step" data-state="end">
                        <h2 class="section_title">Work Availability</h2>
                        <h3 class="main_question">Additional info about "Freelance/Contract" availability</h3>
                        <div class="form-group">
                            <label for="fixed_rate_contract">Minimum fixed rate? (in USD)</label>
                            <input type="text" name="fixed_rate_contract" id="fixed_rate_contract" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="hourly_rate_contract">Minimum hourly rate? (in USD)</label>
                            <input type="text" name="hourly_rate_contract" id="hourly_rate_contract" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="minimum_hours_conctract">Minimum hours for a contract?</label>
                            <input type="text" name="minimum_hours_conctract" id="minimum_hours_conctract" class="form-control required">
                        </div>
                        <label class="custom">Are you willing to work remotely?</label>
                        <div class="form-group radio_input">
                            <label class="container_radio mr-3">Yes
                                <input type="radio" name="remotely_contract" value="Yes" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">No
                                <input type="radio" name="remotely_contract" value="No" class="required">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <div class="submit step" id="end">
                    <div class="summary">
                        <div class="wrapper">
                            <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
                            <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
                        </div>
                        <div class="text-center">
                            <div class="form-group terms">
                                <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a> before Submit
                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /step last-->

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button type="submit" name="process" class="submit">Submit</button>
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
    <!-- /Wizard container -->
</div>
<!-- /content-right-->
</div>
<!-- /row-->
</div>
@endsection