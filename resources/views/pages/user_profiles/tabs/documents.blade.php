<div class="row g-6 g-xl-9">
							<!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Feeds Widget 1-->
        <div class="card mb-5 mb-xxl-8">
            <!--begin::Body-->
            <div class="card-body pb-0">
                <!--begin::Header-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('message'))
                    @if(Session::has('status'))
                    <p class="alert alert-{{(Session::get('status') == true) ? 'success' : 'danger'}}">{{ Session::get('message') }}</p>
                    @else
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                @endif
                <form id="kt_modal_user_kyc_form" class="form"  method="POST" action="{{ route('profile.kyc') }}"  enctype="multipart/form-data" >
                @csrf
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                              
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Identity Proof</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true"  name="identity_proof"  value="{{old('identity_proof')}}">
                                    @foreach($identityProof as $ikey => $iValue )
                                    <option value='{{$ikey}}' selected="{{(old('identity_proof') === $ikey) ? 'selected' : ''}}" >{{$iValue}}</option>
                                    @endforeach
												</select>
                           
                                <input type="file" name="identity_proof_file" class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('identity_proof_file')}}"" placeholder=""  />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-6 fv-row mb-7">
                                @if(isset($kycFile['identity_proof']))
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="{{$kycFile['identity_proof']}}" alt="Identity Proof" />
                                        <!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div> -->
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Address Proof</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" name="address_proof">
                                    @if($addressProof)
                                    @foreach($addressProof as $akey => $aValue )
                                    <option value="{{ $akey}}"  selected="{{(old('address_proof') === $ikey) ? 'selected' : ''}}" >{{$aValue}}</option>
                                    @endforeach
                                    @endif
												</select>
                           
                                <input type="file" name="address_proof_file" class="form-control form-control-solid mb-3 mb-lg-0" value="{{old('address_proof_file')}}" placeholder=""  />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                @if(isset($kycFile['identity_proof']))
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="{{$kycFile['identity_proof']}}" alt="Identity Proof" />
                                        <!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div> -->
                                    </div>
                                @endif
                            </div>
                   
                        </div>
              
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <!-- <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button> -->
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>
<!--end::Row-->