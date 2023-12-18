@extends('back_end.Patients.partials.app')


@section('contenu_dasboard')
<main>
    <div class="container">
    <div class="page-title-container">
    <div class="row">
    <div class="col-auto mb-3 mb-md-0 me-auto">
    <div class="w-auto sw-md-30">
    <a href="Dashboards.Patient.html" class="muted-link pb-1 d-inline-block breadcrumb-back">
    <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
    <span class="text-small align-middle">Home</span>
    </a>
    <h1 class="mb-0 pb-0 display-4" id="title">Rendez-vous</h1>
    </div>
    </div>
    <div class="col-12 col-md-5 d-flex align-items-end justify-content-end">
    <a href="Appointments.New.html" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
    <i data-acorn-icon="calendar"></i>
    <span>Nouveau rendez-ous</span>
    </a>
    </div>
    </div>
    </div>
    <h2 class="small-title">Rendez-vous actif</h2>
    <div class="row g-2 mb-5">
    <div class="col-xl-6">
    <div class="card">
    <div class="card-body">
    <div class="row g-3">
    <div class="col-auto">
    <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
    <i data-acorn-icon="health" class="text-primary"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <div class="text-primary mb-0 mt-1">08.12.2021 - 10:40</div>
    <div class="text-alternate mb-2">Cardiology</div>
    <div class="text-muted">Carmelo Avril, M.B.B.S.</div>
    <div class="text-muted">The Royal Melbourne Hospital City</div>
    <div class="text-muted">Second Floor</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6">
    <div class="card">
    <div class="card-body">
    <div class="row g-3">
    <div class="col-auto">
    <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
    <i data-acorn-icon="gynecology" class="text-primary"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <div class="text-primary mb-0 mt-1">08.12.2021 - 12:40</div>
    <div class="text-alternate mb-2">Gastroenterology</div>
    <div class="text-muted">Kathryn Mengel, M.D.</div>
    <div class="text-muted">Lismore Base Hospital</div>
    <div class="text-muted">Third Floor</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6">
    <div class="card">
    <div class="card-body">
    <div class="row g-3">
    <div class="col-auto">
    <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
    <i data-acorn-icon="xray" class="text-primary"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <div class="text-primary mb-0 mt-1">10.12.2021 - 09:00</div>
    <div class="text-alternate mb-2">Haematology</div>
    <div class="text-muted">Wiebe Rodolfo, M.D.</div>
    <div class="text-muted">Flinders Medical Centre</div>
    <div class="text-muted">Twelfth Floor</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6">
    <div class="card">
    <div class="card-body">
    <div class="row g-3">
    <div class="col-auto">
    <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary">
    <i data-acorn-icon="heart-line" class="text-primary"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <div class="text-primary mb-0 mt-1">26.03.2022 - 09:00</div>
    <div class="text-alternate mb-2">Haematology</div>
    <div class="text-muted">Wiebe Rodolfo, M.D.</div>
    <div class="text-muted">Gosford Hospital</div>
    <div class="text-muted">First Floor</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="mb-5">
    <h2 class="small-title">Quick Links</h2>
    <div class="row g-2 row-cols-1 row-cols-xl-3">
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <div class="text-center">
    <img src="img/illustration/icon-appointment.webp" class="theme-filter" alt="launch">
    <div class="d-flex flex-column sh-5">
    <a href="Appointments.New.html" class="heading stretched-link">New Appointment</a>
    </div>
    </div>
    <div class="text-muted text-center">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <div class="text-center">
    <img src="img/illustration/icon-support.webp" class="theme-filter" alt="performance">
    <div class="d-flex flex-column sh-5">
    <a href="Consult.html" class="heading stretched-link">Online Consultation</a>
    </div>
    </div>
    <div class="text-muted text-center">
    Cheesecake chocolate carrot macaroon sesame snaps candy cake pie lollipop lemon drops toffee lollipop.
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <div class="text-center">
    <img src="img/illustration/icon-review.webp" class="theme-filter" alt="configure">
    <div class="d-flex flex-column sh-5">
    <a href="#" class="heading stretched-link">Write a Review</a>
    </div>
    </div>
    <div class="text-muted text-center">
    Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </main>

@endsection
