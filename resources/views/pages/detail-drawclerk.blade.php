@extends('layouts.main')
@section('content')
<!--main photo-->
    <div class="left-pad col-lg-6 col-xs-12 flex-center">
        <img class="img-responsive img-img img" src="http://i.imgur.com/O6hXaDQ.png" alt="DrawClerk App">
    </div>
    <div class="col-lg-6 col-xs-12 flex-right right-pad">
        <!-beginning of caption section-->
        <div class="sm-line text-right">
            <h1>
                DrawClerk
            </h1>
            <h2>
                iOS/Android Design
            </h2>
        </div>
    </div>
<!-beginning of description-->
<div class="top-pad col-lg-6 col-xs-12 left-pad">
    DrawClerk is a web and app application that allows bank loan officers to conduct inspections easily and
    quickly. One of the main features of the application is the way the inspector enters information.
    <br><br>
    <b>Problems to Solve: How would the user be able to easily and quickly enter in percentage data while
        conducting an inspection?</b>
    <br><br>
    Making the design accommodating for one finger data entry and confirmation was achived through the
    "percentage-ring." The user has a pre-defined list of things that require inspection. These list items appear
    individually when in inspection mode. The percentage increases or decreases in increments of 5% (a higher level of
    specificity was not necessary for the users needs).
    <br><br>
    The user confirms each entry which then prompts the application to move to the next item in the list of
    inspection items.
    <br><br>
    After the inspection is complete the user is free to review the inspection items and change data before final
    submission.
    <br><br>
</div>
<!--second section-->
<div class="row">
    <div class="col-lg-6 col-xs-12 flex-right right-pad">
        <!-beginning of caption section-->
        <div class="sm-line text-right">
            <h2>
                Logotyping & Branding
            </h2>
        </div>
    </div>
        <!-beginning of description-->
        <div class="col-lg-6 col-xs-12 top-pad left-pad">
            The logo created for DrawClerk is a stylized combination of the “D” and “C” from the name of the application.
            Because the brand is new, it is even more important for the client to establish brand recognition.
            <br><br>
            The final logotype and logo is the most balanced form in which the “D” and “C” are still recognisable in the symbol.
            <br><br>
            A full color and greyscale logo and logotype were provided to the client for print and web use.
        </div>
    <div class="col-lg-4 col-lg-offset-1 col-xs-12 flex-center">
        <img src="http://i.imgur.com/S22l7qs.png" class="img-responsive img-img img" alt="DrawClerk Logo">
    </div>
    </div>
<div class="col-lg-4 col-xs-12 pull-right text-right sm-text grey">
    <i>DrawClerk was designed while working for AppIt Ventures LLC</i>
</div>
@stop
