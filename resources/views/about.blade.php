@extends('layouts.app')
@section('content')
<section id="contact" class="contact-part-area section-padding">
  <div class="container">
    {!! Form::open(['url' => 'nominations/submit']) !!}
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <h1>File Your <span>Nominations</span></h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form apply">
          <form name="contact-form" method="post" id="contact-form">
                                    <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('Yname', 'Your Name *')}}
                  <!-- <label>Your Name *</label> -->
                  {{Form::text('name','',['class' => 'form-control','placeholder' =>'Your Name']) }}
                  <!-- <input name="name" value="" placeholder="Your Name" type="text" pattern="[a-z A-Z]+" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('nameOfDirector', 'Name of Director *')}}
                  <!-- <label>Name of Director *</label> -->
                    {{Form::text('nameofDirector','',['class' => 'form-control','placeholder' =>'Name of Director'])  }}
                  <!-- <input name="nameofdirector" value="" placeholder="Name of Director" type="text" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('Yemail', 'Your Email *')}}
                 <!-- <label>Your Email *</label> -->
                   {{Form::email('youremail','',['class' => 'form-control','placeholder' =>'Your Email'])  }}
                  <!-- <input name="youremail" value="" placeholder="Your Email" type="email" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('dierectorEmail', 'Email Id of Director  *')}}
                 <!-- <label>Email Id of Director  *</label> -->
                   {{Form::email('directoremail','',['class' => 'form-control','placeholder' => 'Email Id of Director']) }}
                  <!-- <input name="directoremail" value="" placeholder="Email Id of Director" type="email" required=""> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('yContactNo', 'Your Contact No *')}}
                  <!-- <label>Your Contact No *</label> -->
                    {{Form::tel('yourcontact', '',['class' => 'form-control','placeholder' =>'Your Contact No']) }}
                  <!-- <input name="yourcontact" id="yourcontact" value="" placeholder="Your Contact No" type="tel" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('directorCoNo', 'Contact No of Director *')}}
                  <!-- <label>Contact No of Director *</label> -->
                    {{Form::tel('directorcontact','',['class' => 'form-control','placeholder' =>'Contact No of Director'])  }}
                  <!-- <input name="directorcontact" value="" id="directorcontact" placeholder="Contact No of Director" type="tel" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('designation', 'Designation *')}}
                  <!-- <label>Designation *</label> -->
                    {{Form::text('designation','',['class' => 'form-control','placeholder' =>'Designation'])  }}
                  <!-- <input name="designation" value="" placeholder="Designation" type="text" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('companyUrl', 'Company Website URL ')}}
                  <!-- <label>Company Website URL </label> -->
                    {{Form::url('companyurl','',['class' => 'form-control','placeholder' => 'http://www.']) }}
                  <!-- <input name="companyurl" value="" placeholder="http://www." type="url"> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('organName', 'Organisation Name *')}}
                  <!-- <label>Organisation Name *</label> -->
                    {{Form::text('organisationname','',['class' => 'form-control','placeholder' =>'Organisation Name'])  }}
                  <!-- <input name="organisationname" value="" placeholder="Organisation Name" type="text" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('fbPage', 'Offical Facebook Page ')}}
                  <!-- <label>Offical Facebook Page </label> -->
                    {{Form::text('officalfacebook','',['class' => 'form-control','placeholder' =>'http://www.'])  }}
                  <!-- <input name="officalfacebook" value="" placeholder="http://www." type="text"> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-message">
                    {{Form::label('address', 'Address *')}}
                 <!-- <label>Address *</label> -->
                   {{Form::textarea('address','',['class' => 'form-control','placeholder' =>'Address'])  }}
                  <!-- <textarea class="field-element " data-gramm="true" spellcheck="false" data-gramm_editor="true" name="address" placeholder="Address" required=""></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-message">
                    {{Form::label('mainProd', 'Main Product(s) or Service(s)*')}}
                 <!-- <label>Main Product(s) or Service(s)*</label> -->
                   {{Form::textarea('mainproduct','',['class' => 'form-control','placeholder' =>'Main Product(s) or Service(s)'])  }}
                  <!-- <textarea class="field-element" name="mainproduct" placeholder="Main Product(s) or Service(s)" required=""></textarea> -->
                </div>
              </div>
              <!--<div class="col-md-12">
                                        <div class="form-message">
                                            <textarea class="field-element " data-gramm="true" spellcheck="false" data-gramm_editor="true" name="yourmessage" placeholder="Your Messege..." required></textarea>
                                        </div>

                                    </div>-->
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('yearofestablishment', 'Year of Establishment *')}}
                  <label>Year of Establishment *</label>
                    {{Form::text('yearofestnt','',['class' => 'form-control','placeholder' =>'Year of Establishment'])  }}
                  <!-- <input name="yearofestablishment" value="" placeholder="Year of Establishment" type="text" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('keyuspofyour', 'Key USPs of your Product/Service')}}
                  <!-- <label>Key USPs of your Product/Service</label> -->
                    {{Form::text('keyuspofyour','',['class' => 'form-control','placeholder' =>'Key USPs of your Product/Service'])  }}
                  <!-- <input name="keyuspofyour" value="" placeholder="Key USPs of your Product/Service" type="text"> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('totalemployees', 'Total No. of Employees *')}}
                  <!-- <label>Total No. of Employees *</label> -->
                    {{Form::text('totalemployees','',['class' => 'form-control','placeholder' =>'Total No. of Employees *'])  }}
                  <!-- <input name="totalemployees" value="" placeholder="Total No. of Employees *" type="text" required=""> -->
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('categoryappliedfor', 'Category Applied For')}}
                 <!-- <label>Category Applied For</label> -->
                   {{Form::text('categoryapplyfor','',['class' => 'form-control','placeholder' =>'Category Applied For'])  }}
                  <!-- <input name="categoryappliedfor" value="" placeholder="Category Applied For" type="text"> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-message">
                    {{Form::label('anyawards', 'Any Awards Won')}}
                  <!-- <label>Any Awards Won</label> -->
                    {{Form::textarea('anyawards','',['class' => 'form-control','placeholder' => 'Any Awards Won']) }}
                  <!-- <textarea class="field-element " data-gramm="true" spellcheck="false" data-gramm_editor="true" name="anyawards" placeholder="Any Awards Won"></textarea> -->
                </div>
                <div class="g-recaptcha" data-sitekey="6LeBxcoUAAAAAFO1FzhBUKXej_mFhB6-RXIn79aw" style="transform:scale(0.80);-webkit-transform:scale(0.70);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                <!-- <button type="submit" class="sent-button hvr-shutter-out-vertical pull-left">SEND</button>-->
                {{Form::submit('File Your Nomination',['class' => 'sent-button hvr-shutter-out-vertical pull-left'])}}
                <!-- <input type="submit" class="sent-button hvr-shutter-out-vertical pull-left" name="submit3" value="File Your Nomination" id="contact-submit" data-submit="...Sending"> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</section>
@endsection
