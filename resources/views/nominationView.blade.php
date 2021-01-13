@extends('layouts.app')
@section('content')


<section id="contact" class="contact-part-area section-padding">
  <div class="container">
    <div class="formPagination pageNavButtonLeft" >
      <a href="{{$data['previous'] }}">❮</a>
    </div>

    <div class="formPagination pageNavButtonRight" >
      <a href="{{$data['next'] }}">❯</a>
    </div>
    @foreach($data['nominations'] as $nomination)
    @if($nomination->id == $data['id'])


    <h2 class="headingContent"><span>Nomination  </span>{{ $nomination->name}} </h2>
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form apply">
          <form name="contact-form" method="get" id="contact-form">
                                    <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('Yname', 'Your Name *')}}

                  {{ Form::text('name', $nomination->name, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('nameOfDirector', 'Name of Director *')}}

                    {{ Form::text('nameofDirector', $nomination->nameofDirector, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('Yemail', 'Your Email *')}}

                   {{ Form::text('youremail', $nomination->youremail, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('dierectorEmail', 'Email Id of Director  *')}}

                   {{ Form::text('directoremail', $nomination->directoremail, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('yContactNo', 'Your Contact No *')}}

                    {{ Form::text('yourcontact', $nomination->yourcontact, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('directorCoNo', 'Contact No of Director *')}}

                    {{ Form::text('directorcontact', $nomination->directorcontact, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('designation', 'Designation *')}}

                    {{ Form::text('designation', $nomination->designation, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('companyUrl', 'Company Website URL ')}}

                    {{ Form::text('companyurl', $nomination->companyurl, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('organName', 'Organisation Name *')}}

                    {{ Form::text('organisationname', $nomination->organisationname, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('fbPage', 'Offical Facebook Page ')}}

                    {{ Form::text('officalfacebook', $nomination->officalfacebook, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-message">
                    {{Form::label('address', 'Address *')}}

                   {{ Form::text('address', $nomination->address, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-md-12">
                <div class="form-message">
                    {{Form::label('mainProd', 'Main Product(s) or Service(s)*')}}

                   {{ Form::text('mainproduct', $nomination->mainproduct, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('yearofestablishment', 'Year of Establishment *')}}

                    {{ Form::text('yearofestnt', $nomination->yearofestnt, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('keyuspofyour', 'Key USPs of your Product/Service')}}

                    {{ Form::text('keyuspofyour', $nomination->keyuspofyour, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('totalemployees', 'Total No. of Employees *')}}

                    {{ Form::text('totalemployees', $nomination->totalemployees, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-content">
                    {{Form::label('categoryappliedfor', 'Category Applied For')}}

                   {{ Form::text('categoryapplyfor', $nomination->categoryapplyfor, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    @endif


  @endforeach
  </div>
</section>
@endsection
