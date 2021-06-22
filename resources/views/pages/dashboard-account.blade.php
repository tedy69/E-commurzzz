@extends('layouts.dashboard')

@section('title')
  Account Settings
@endsection

@section('content')
<!-- Section Content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">My Account</h2>
        <p class="dashboard-subtitle">
          Update your current profile
        </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="">
              <div class="card">
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          aria-describedby="emailHelp"
                          name="name"
                          value="Papel La Casa"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Your Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          aria-describedby="emailHelp"
                          name="email"
                          value="email@gmail.com"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="addressOne">Address 1</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressOne"
                          aria-describedby="emailHelp"
                          name="addressOne"
                          value="Setra Duta Cemara"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="addressTwo">Address 2</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressTwo"
                          aria-describedby="emailHelp"
                          name="addressTwo"
                          value="Blok B2 No. 34"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="province">Province</label>
                        <select
                          name="province"
                          id="province"
                          class="form-control"
                        >
                          <option value="West Java">West Java</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city">City</label>
                        <select
                          name="city"
                          id="city"
                          class="form-control"
                        >
                          <option value="Bandung">Bandung</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                          type="text"
                          class="form-control"
                          id="postalCode"
                          name="postalCode"
                          value="40512"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <input
                          type="text"
                          class="form-control"
                          id="country"
                          name="country"
                          value="Indonesia"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input
                          type="text"
                          class="form-control"
                          id="mobile"
                          name="mobile"
                          value="+628 2020 11111"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5"
                      >
                        Save Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


{{-- @push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
              .then(function (response) {
                  self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function (response) {
                  self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush --}}