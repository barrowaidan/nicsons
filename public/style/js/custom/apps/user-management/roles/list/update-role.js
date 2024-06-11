"use strict";
function makeRoleUpdateRequest(id) {
	const t = document.getElementById("kt_modal_update_role");
	const form = new FormData(t.querySelector('#kt_modal_update_role_form'));
    form.append('_method', 'PUT');
	return $.ajax({
		type:"post",
        data:form,
		url:"roles/" + id,
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		cache: false,
		processData: false,
		contentType: false,
		dataType:"json"	
		});
}
var KTUsersUpdateRoles=function(){
    const t=document.getElementById("kt_modal_update_role"),
    e=t.querySelector("#kt_modal_update_role_form"),
    n=new bootstrap.Modal(t);
    return{init:function(){
        (
            ()=>{
                var o=FormValidation.formValidation(e,{
                    fields:{
                        role_name:{
                            validators:{
                                notEmpty:{
                                    message:"Role name is required"
                                }
                            }
                        }
                    },
                    plugins:{
                        trigger:new FormValidation.plugins.Trigger,
                        bootstrap:new FormValidation.plugins.Bootstrap5({
                            rowSelector:".fv-row",
                            eleInvalidClass:"",eleValidClass:""
                        })
                    }
                });
                t.querySelector('[data-kt-roles-modal-action="close"]').addEventListener("click",(t=>{
                    t.preventDefault(),
                    Swal.fire({
                        text:"Are you sure you would like to close?",
                        icon:"warning",
                        showCancelButton:!0,
                        buttonsStyling:!1,
                        confirmButtonText:"Yes, close it!",
                        cancelButtonText:"No, return",
                        customClass:{
                            confirmButton:"btn btn-primary",
                            cancelButton:"btn btn-active-light"
                        }
                    }).then((function(t){
                        t.value?(e.reset(),
                        n.hide()):"cancel"===t.dismiss&&Swal.fire({
                            text:"Your form has not been closed!.",
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
                t.querySelector('[data-kt-roles-modal-action="cancel"]').addEventListener("click",(t=>{
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
                );
                const i=t.querySelector('[data-kt-roles-modal-action="submit"]');
                i.addEventListener("click",(function(t){
                    t.preventDefault(),
                    o&&o.validate().then((function(t){
                        console.log("validated!"),
                        "Valid"==t?(i.setAttribute("data-kt-indicator","on"),
                        i.disabled=!0,
                        setTimeout((function(){
                            i.removeAttribute("data-kt-indicator"),
                            i.disabled=!1,
                            $.when(makeRoleUpdateRequest($("#submit_role_update").attr('value')).then(function successHandler(response) {
                                if (response.message == null) {
                                    let ul = document.createElement('ul');
                                    ul.setAttribute('class', 'alert alert-danger');
                                    $.each(response.errors, function(key, err_values){
                                        let li = document.createElement('li');
                                        li.innerHTML = err_values;
                                        ul.appendChild(li);
                                    });
                                    document.getElementById('role_update_validation_errors').appendChild(ul);
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
                                        window.location.replace("roles");
                                    })
                                    )
                                }
                            })),
                            function errorHandler() {
                                Swal.fire({
                                    text:response.message,
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"Ok, got it!",
                                    customClass:{
                                        confirmButton:"btn btn-primary"
                                    }
                                }).then((function(t){
                                    t.isConfirmed&&n.hide()
                                })
                                )
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
                )
            })(),
            (()=>{
                    const t=e.querySelector("#kt_roles_select_all"),
                    n=e.querySelectorAll('[type="checkbox"]');
                    t.addEventListener("change",(t=>{
                        n.forEach(
                            (e=>{
                            e.checked=t.target.checked
                        })
                        )
                    })
                    )
                })()
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function(){KTUsersUpdateRoles.init()}));

    
    function getRoleEditData(element) {
        $(document).ready(function(){
            let id = element.value;
            $.ajax({
                type:"get",
                url:"roles/" + id + "/edit",
                cache:false,
                dataType:false,
                processData:false,
                success:function(response){
                    document.getElementById('r_name').setAttribute('value', response.role.name);
                    document.getElementById('submit_role_update').setAttribute('value', response.role.id);
                    $.each(response.role_permissions, function (key, value) {
                        document.getElementById(value).checked = true; 
                    });
                    },
                error:function(){
                    alert('something went wrong');
                }
            });
        });
    }

    function getRoleDeleteData(element) {
        const id = element.value;
        $(document).ready(function() {
            Swal.fire({text:"Are you sure you want to delete this role",
            icon:"warning",
            showCancelButton:!0,
            buttonsStyling:!1,
            confirmButtonText:"Yes, delete!",
            cancelButtonText:"No, cancel",
            customClass:{confirmButton:"btn fw-bold btn-danger",
            cancelButton:"btn fw-bold btn-active-light-primary"
            }}).then((function(t){t.value?
                Swal.fire({text:"You have deleted ",

                icon:"success",
                buttonsStyling:!1,
                confirmButtonText:"Ok, got it!",
                customClass:{confirmButton:"btn fw-bold btn-primary"
            }
            }).then((function(e)
            {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                type: 'DELETE',
                url: "roles/" + id,
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (response) {
                    console.log(response);
                    Swal.fire("Done!", response.message, "success");
                    location.reload();
                }
                });
            })
            ).then((function(a){a()})):"cancel"===t.dismiss&&Swal.fire({text:"not deleted.",
            icon:"error",buttonsStyling:!1,
            confirmButtonText:"Ok, got it!",
            customClass:{confirmButton:"btn fw-bold btn-primary"
            }})}))
        });
    }