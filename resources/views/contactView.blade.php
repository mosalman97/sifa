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

    @foreach($data['contacts'] as $contact)

    @if($contact->id == $data['id'])

    <h2 class="headingContent"><span>Contact  </span>{{ $contact->name}} </h2>

    <div class="row">
      <div class="col-md-12">
        <div class="contact-form apply">
          <form name="contact-form" method="get" id="contact-form">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-content">
                  <div class="col-25">
                    {{Form::label('fname', 'First Name')}}

                  </div>
                  <div class="col-75">
                  {{ Form::text('firstname', $contact->firstname, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-content">
                  <div class="col-25">
                      {{Form::label('lname', 'Last Name')}}

                  </div>
                  <div class="col-75">
                      {{ Form::text('lastname', $contact->lastname, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 ">
                <div class="form-content">
                  <div class="col-25">
                      {{Form::label('country', 'State')}}

                  </div>
                  <div class="col-75">
                        {{Form::select('country', ['krl' => 'Kerla', 'tn' => 'Tamil Nadu','krn' => 'Karnataka'],$contact->country,array('required' => 'required', 'autofocus' => 'autofocus', 'disabled'))}}

                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-message">
                  <div class="col-25">
                      {{Form::label('subject', 'Subject')}}

                  </div>
                  <div class="col-75">
                    {{ Form::textarea('subject', $contact->subject, array('required' => 'required', 'autofocus' => 'autofocus', 'disabled')) }}

                  </div>

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
