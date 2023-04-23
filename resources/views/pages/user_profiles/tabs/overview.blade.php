<div class="row g-5 g-xxl-8">
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Feeds Widget 1-->
        <div class="card mb-5 mb-xxl-8">
            <!--begin::Body-->
            <div class="card-body pb-0">
                <!--begin::Header-->
                <form id="kt_modal_add_user_form" class="form" action="#">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
              
                        <div class="row">                            
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Date Of Birth</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="date" name="dob" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-DD" date-format='YYYY-MM-DD' value="" max='{{date("Y-m-d")}}' />
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="row">                            
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Mobile No.</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="mobile" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Mobile Number" value=""  max='12' />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="row">                            
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-8">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">City</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="city" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="City" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">State</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="state" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="State" value="" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="row">                            
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                 <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">PIN/ZIP Code</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="pincode" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="PIN/ZIP Code" value="" max='6' />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Country</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="country" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Country" value="" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="row">                            
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                 <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Language</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="language" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Language" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Time Zone</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="time_zone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Time Zone" value="" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Address</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            
                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" rows="4" name="application" placeholder=""></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->

                <!--end::Form-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Feeds Widget 1-->

    </div>
    <!--end::Col-->

</div>