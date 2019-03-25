@extends('layouts.app')


@section('content')

<div class="steeldoor-page-wrapper">

      <div class="steeldoor-first-row-wrapper">

            <div class="steepdoor-page-first-wrapper">

                  <img style="width:100%;height:auto;" src="https://dummyimage.com/1920x980/" />

            </div>

      </div>

        <div class="steeldoor-second-row-wrapper">
          <div class="container-fluid">

                <div class="row">

                      <div class="col-md-6">

                            <div class="steeldoor-second-img-wrapper">
                                  <img style="width:100%;height:auto;" src="https://dummyimage.com/850x980/" />
                            </div>

                      </div>
                      <div class="col-md-6">

                              <div class="steepdoor-second-text-wrapper d-md-flex align-items-center">

                                  <p class="lead">
                                    @lang('steeldoor.text')
                                  </p>


                              </div>

                      </div>

                </div>

          </div>



        </div>

</div>

@endsection
