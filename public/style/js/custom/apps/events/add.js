"use strict";
function makecompanyRequest() {
    let t = document.querySelector('#kt_modal_add_company');
    let form = new FormData(t.querySelector('#kt_modal_add_company_form'));

    return $.ajax({
    type:"post",
    url:"events",
    data: form,
    Header:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    cache:false,
    processData:false,
    contentType:false,
    });   
}
var KTUsersAddcompany=function(){
    const t=document.getElementById("kt_modal_add_company"),
    e=t.querySelector("#kt_modal_add_company_form"),
    n=new bootstrap.Modal(t);
    return{
        init:function(){
            (
                ()=>{
                    var o=FormValidation.formValidation(e,{
                        fields:{
                            name:{
                                validators:{
                                    notEmpty:{
                                        message:"name is required"
                                    }
                                }
                            },
                            tetx:{
                                validators:{
                                    notEmpty:{
                                        message:"text is required"
                                    }
                                }
                            },
                        },
                        plugins:{
                            trigger:new FormValidation.plugins.Trigger,
                            bootstrap:new FormValidation.plugins.Bootstrap5({
                                rowSelector:".fv-row",
                                eleInvalidClass:"",
                                eleValidClass:""
                            })
                        }
                    });
                    const i=t.querySelector('[data-kt-companys-modal-add-action="submit"]');
                    i.addEventListener("click",(t=>{
                        t.preventDefault(),
                        o&&o.validate().then((function(t){
                            console.log("validated!"),
                            "Valid"==t?(i.setAttribute("data-kt-indicator","on"),
                            i.disabled=!0,
                            setTimeout((function(){
                                i.removeAttribute("data-kt-indicator"),
                                i.disabled=!1,
                                $.when(makecompanyRequest().then(function successHandler(response){
                                    console.log(response);
                                    if (response.message == null) {
                                        let ul = document.createElement('ul');
                                        ul.setAttribute('class', 'alert alert-danger mx-5 mx-xl-15 my-7');
                                        $.each(response.errors, function(key, err_values){
                                            let li = document.createElement('li');
                                            li.innerHTML = err_values;
                                            ul.appendChild(li);
                                        });
                                        document.getElementById('company_validation_errors').appendChild(ul);
                                    }
                                    else{
                                        Swal.fire({
                                            text:response.message,
                                            icon:"success",
                                            buttonsStyling:!1,
                                            confirmButtonText:"Ok, got it!",
                                            customClass:{confirmButton:"btn btn-primary"}
                                        }).then((function(t){
                                            t.isConfirmed&&n.hide();
                                            window.location.replace("events");
                                        })
                                        )
                                    }
                                })),
                                function errorHandler() {
                                    Swal.fire({
                                        text:"Permission created fail" ,
                                        icon:"error",
                                        buttonsStyling:!1,
                                        confirmButtonText:"Ok, got it!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    });
                                }
                            }),2e3)):Swal.fire({
                                text:"Sorry, looks like there are some errors detected, please try again.",
                                icon:"error",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, got it!",
                                customClass:{
                                    confirmButton:"btn btn-primary"
                                }
                            })
                        })
                        )
                    })
                    ),
                    t.querySelector('[data-kt-companys-modal-add-action="cancel"]').addEventListener("click",(t=>{
                        t.preventDefault(),
                        Swal.fire({
                            text:"Are you sure you would like to cancel?",
                            icon:"warning",
                            showCancelButton:!0,
                            buttonsStyling:!1,
                            confirmButtonText:"Yes, cancel it!",
                            cancelButtonText:"No, return",
                            customClass:{
                                confirmButton:"btn btn-primary",
                                cancelButton:"btn btn-active-light"
                            }
                        }).then((function(t){
                            t.value?(e.reset(),
                            n.hide()
                            ):"cancel"===t.dismiss&&Swal.fire({
                                text:"Your form has not been cancelled!.",
                                icon:"error",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, got it!",
                                customClass:{
                                    confirmButton:"btn btn-primary"
                                }
                            })
                        })
                        )
                    })
                    ),
                    t.querySelector('[data-kt-companys-modal-add-action="close"]').addEventListener("click",(t=>{
                        t.preventDefault(),
                        Swal.fire({
                            text:"Are you sure you would like to cancel?",
                            icon:"warning",
                            showCancelButton:!0,
                            buttonsStyling:!1,
                            confirmButtonText:"Yes, cancel it!",
                            cancelButtonText:"No, return",
                            customClass:{
                                confirmButton:"btn btn-primary",
                                cancelButton:"btn btn-active-light"
                            }
                        }).then((function(t){
                            t.value?(e.reset(),
                            n.hide()):"cancel"===t.dismiss&&Swal.fire({
                                text:"Your form has not been cancelled!.",
                                icon:"error",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, got it!",
                                customClass:{
                                    confirmButton:"btn btn-primary"
                                }
                            })
                        })
                        )
                    })
                    )
                })
                ()
            }
        }
    }
    ();
    KTUtil.onDOMContentLoaded((function(){
        KTUsersAddcompany.init()
    })
    );
