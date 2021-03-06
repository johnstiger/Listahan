@extends('layouts.main')
@section('title')
    Admin Profile
@endsection
@section('css')
<style>
    .card.card-cascade .view.gradient-card-header {
        padding: 1.1rem 1rem;
    }

    .card.card-cascade .view {
        box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
    }
</style>
@endsection
@section('main')
<main>
    <div class="container-fluid">

      <!-- Section: Edit Account -->
      <section class="section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-lg-4 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">{{ $customer->lastname }}'s Photo</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <img src="{{asset('assets/img/download.jpg')}}" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />
                <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                <div class="row flex-center">
                  <button class="btn btn-info btn-rounded btn-sm">Upload New Photo</button><br>
                  <button class="btn btn-danger btn-rounded btn-sm">Delete</button>
                </div>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-8 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Customer's Profile</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Edit Form -->
                <form>
                  <!-- First row -->

                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form1" class="form-control validate" value="{{ $customer->lastname.", ".$customer->firstname}}">
                        <label for="form1" data-error="wrong" data-success="right">Name</label>
                      </div>
                    </div>
                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form2" class="form-control validate" value="{{ $customer->middlename }}">
                        <label for="form2" data-error="wrong" data-success="right">Middlename</label>
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- First row -->
                  <div class="row">
                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form81" class="form-control validate" value="{{ $customer->age }}">
                        <label for="form81" data-error="wrong" data-success="right">Age</label>
                      </div>
                    </div>

                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form82" class="form-control validate" value="{{ $customer->gender }}">
                        <label for="form82" data-error="wrong" data-success="right">Gender</label>
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- Second row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form76" class="form-control validate" value="{{ $customer->address }}">
                        <label for="form76">Address</label>
                      </div>
                    </div>
                    <!-- Second column -->

                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form77" class="form-control validate" value="{{ $customer->contact_number }}">
                        <label for="form77" data-error="wrong" data-success="right">Contact Number</label>
                      </div>
                    </div>
                  </div>
                  <!-- Second row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form76" class="form-control validate" value="Paid">
                        <label for="form76">Status</label>
                      </div>
                    </div>
                    <!-- Second column -->

                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form77" class="form-control validate" value="Money Lending">
                        <label for="form77" data-error="wrong" data-success="right">Customer's Field</label>
                      </div>
                    </div>
                  </div>
                  <!-- Third row -->
                  <div class="row">

                  <!-- Third row -->

                  <!-- Fourth row -->
                  <div class="row">
                    <div class="col-md-12 text-center my-2">
                      <input type="submit" value="Edit Account" class="btn btn-info btn-rounded">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center my-2">
                        <a type="button" class="btn btn-info btn-rounded" href="{{route('customers')}}">Back</a>
                    </div>
                  </div>
                  <!-- Fourth row -->

                </form>
                <!-- Edit Form -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Edit Account -->
    </div>
  </main>
  @section('scripts')
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });
</script>
@endsection
  @endsection

