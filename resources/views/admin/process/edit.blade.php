<div class="modal fade" id="kt_modal_edit_company" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Edit process Details</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-companys-modal-action="close">
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
        <div id="company_update_validation_errors"></div>
        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form id="kt_modal_edit_company_form" class="form" action="#" enctype="multipart/form-data" autocomplete="off">
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_company_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="d-block fw-bold fs-6 mb-5">Image</label>
                            <!--end::Label-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"  style="background-image: url({{ asset('style/media/avatars/blank.png') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" id="process_image" ></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="user_image_remove" />
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
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" id="edit_process_title" name="title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="first name"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">Text</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea name="text" id="edit_process_text" cols="4" rows="2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Text"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        
                    </div>
                    <!--end::Scroll-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="reset" class="btn btn-light me-3" data-kt-companys-modal-action="cancel">Discard</button>
                    <button type="submit" id="submit_company_update" class="btn btn-primary" data-kt-companys-modal-action="submit">
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