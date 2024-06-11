<div class="modal fade" id="kt_modal_add_company" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Add Company Details</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-companys-modal-add-action="close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div id="company_validation_errors"></div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_company_form" class="form" action="#" autocomplete="off">
                    @csrf
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_company_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_company_header" data-kt-scroll-wrappers="#kt_modal_add_company_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="d-block fw-bold fs-6 mb-5">Logo</label>
                            <!--end::Label-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('style/media/avatars/blank.png')}})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image:  url({{ asset('style/media/avatars/blank.png')}});"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="image_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Company name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="company name"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Phone number</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="phone_no" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="phone number"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@abletech.co.tz" autocomplete="off" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label for="password" class="required fw-bold fs-6 mb-2">Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="password" id="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@abletech.co.tz" autocomplete="off" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label for="password_confirmation" class="required fw-bold fs-6 mb-2">Confirm Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="password_confirmation" id="password_confirmation"name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@abletech.co.tz" autocomplete="off" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Physical address</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="physical_address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="middle name"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Postal address</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="postal_address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="postal address"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Map location</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea name="map_link" class="form-control form-control-lg form-control-solid" rows="2"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Working hours</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="working_hours" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="working hours" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Motivation</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea name="motivation" id="" cols="4" rows="2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="motivation"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        
                        <!--begin::Label-->
                        <label class="required fw-bold fs-6 mb-2">Social Media</label>
                        <!--end::Label-->

                        <!--start::Input group-->
                        <div class='row'>
                            <!--begin::column-->
                            <div class='col-1 mb-2'>
                                <!--begin::Wrapper-->
                                <div class="d-flex">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20 m-3">
                                        <input class="form-check-input" type="checkbox" value="facebook" name="facebookname" />
                                    </label>
                                    <!--end::Checkbox-->
                                    
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::column-->

                            <!--begin::column-->
                            <div class='col-11 mb-5'>
                                <!--begin::Input-->
                                <input type="text" name="facebooklink" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="facebook"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->
                        </div>
                        <!--start::Input group-->
                        <!--start::Input group-->
                        <div class='row'>
                            <!--begin::column-->
                            <div class='col-1 mb-2'>
                                <!--begin::Wrapper-->
                                <div class="d-flex">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20 m-3">
                                        <input class="form-check-input" type="checkbox" value="twitter" name="twittername" />
                                    </label>
                                    <!--end::Checkbox-->
                                    
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::column-->

                            <!--begin::column-->
                            <div class='col-11 mb-5'>
                                <!--begin::Input-->
                                <input type="text" name="twitterlink" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="twitter"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->
                        </div>
                        <!--start::Input group-->
                        <!--start::Input group-->
                        <div class='row'>
                            <!--begin::column-->
                            <div class='col-1 mb-2'>
                                <!--begin::Wrapper-->
                                <div class="d-flex">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20 m-3">
                                        <input class="form-check-input" type="checkbox" value="instagram" name="instagramname" />
                                    </label>
                                    <!--end::Checkbox-->
                                    
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::column-->

                            <!--begin::column-->
                            <div class='col-11 mb-5'>
                                <!--begin::Input-->
                                <input type="text" name="instagramlink" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="instagram"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->
                        </div>
                        <!--start::Input group-->
                        <!--start::Input group-->
                        <div class='row'>
                            <!--begin::column-->
                            <div class='col-1 mb-2'>
                                <!--begin::Wrapper-->
                                <div class="d-flex">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20 m-3">
                                        <input class="form-check-input" type="checkbox" value="youtube" name="youtubename" />
                                    </label>
                                    <!--end::Checkbox-->
                                    
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::column-->

                            <!--begin::column-->
                            <div class='col-11 mb-5'>
                                <!--begin::Input-->
                                <input type="text" name="youtubelink" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="youtube"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->
                        </div>
                        <!--start::Input group-->
                    </div>
                    <!--end::Scroll-->
                        
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-kt-companys-modal-add-action="cancel">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-companys-modal-add-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>



<div class="modal fade" id="add_social_media" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Add Social Media</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-media-modal-action="close">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div id="media_update_validation_errors"></div>
        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form id="kt_modal_add_media_form" class="form" action="#" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_company_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        
                        <!--start::Input group-->
                        <!--begin::Label-->
                        <label class="required fw-bold fs-6 mb-2">Social Media</label>
                        <!--end::Label-->

                        <!--start::Input group-->
                        <div class='row' style="display: none;">
                            <!--begin::column-->
                            <div class='col-12 mb-3'>
                                <!--begin::Input-->
                                <input type="text" name="id" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Media id"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->

                        </div>
                        <!--end::Input group-->
                        
                        <!--start::Input group-->
                        <div class='row' style="display: none;">
                            <!--begin::column-->
                            <div class='col-12 mb-3'>
                                <!--begin::Input-->
                                <input type="text" name="model_path" class="form-control form-control-solid mb-3 mb-lg-0" value="App\Models\CompanyDetails" placeholder="Media id"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->

                        </div>
                        <!--end::Input group-->
                        
                        <div class='row'>
                            <div class='col-12 mb-3'>
                                <!--begin::Select-->
                                <select name="media_name" data-control="selects" data-dropdown-parent="#kt_modal_add_counsillor" class="form-control form-control-solid w-200px ps-14">
                                    <option value="">Media..</option>
                                    <option value="facebook">facebook</option>
                                    <option value="twitter">twitter</option>
                                    <option value="instagram">instagram</option>
                                    <option value="youtube">youtube</option>
                                </select>
                                <!--end::Select-->
                            </div>
                        </div>

                        <!--start::Input group-->
                        <div class='row'>
                            <!--begin::column-->
                            <div class='col-12 mb-3'>
                                <!--begin::Input-->
                                <input type="text"  name="media_link" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Media name"/>
                                <!--end::Input-->
                            </div>
                            <!--end::column-->

                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="reset" class="btn btn-light me-3" data-kt-media-modal-action="cancel">Discard</button>
                    <button type="submit"  class="btn btn-primary" data-kt-media-modal-action="submit">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>