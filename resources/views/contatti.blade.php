@extends ('template.main')
@section ('header')
  <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title"></h2>
                        <p></p>
                    </div>
                </div>
            </div>
          </div>
  </section>
@endsection
@section ('body')
<section class="padding">
       <div class="container order-page">
           <div class="row">
               <div class="col-md-8 col-sm-8">
                   <h2 class="heading">Inviaci un Messaggio</h2>
                   <hr class="heading_space">
@include ('partials.contatti')
@include ('partials.map')
@endsection
