"use strict";
function makeUserUpdateRequest(id) {
	const t = document.getElementById("kt_modal_edit_users");
	const form = new FormData(t.querySelector('#kt_modal_edit_users_form'));
    form.append('_method', 'PUT');
	return $.ajax({
		type:"post",
        data:form,
		url:"users/" + id,
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		cache: false,
		processData: false,
		contentType: false,
		dataType:"json"	
		});
}
var KTModalEditUsers=function(){
    const t=document.getElementById("kt_modal_edit_users"),
    e=t.querySelector("#kt_modal_edit_users_form"),
    n=new bootstrap.Modal(t);
    return{
        init:function(){
            !function(){
                var o=FormValidation.formValidation(e,{
                    fields:{
                        format:{
                            validators:{
                                notEmpty:{
                                    message:"File format is required"
                                }
                            }
                        }
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
                const i=t.querySelector('[data-kt-users-modal-action="submit"]');
                i.addEventListener("click",(function(t){
                    t.preventDefault(),o&&o.validate().then((function(t){
                        console.log("validated!"),
                        "Valid"==t?(i.setAttribute("data-kt-indicator","on"),
                        i.disabled=!0,
                        setTimeout((function(){
                            i.removeAttribute("data-kt-indicator"),
                            i.disabled=!1,
                            $.when(makeUserUpdateRequest($("#submit_user_update").attr('value')).then(function successHandler(response) {
                                if (response.message == null) {
                                    let ul = document.createElement('ul');
                                    ul.setAttribute('class', 'alert alert-danger mx-5 mx-xl-15 my-7');
                                    $.each(response.errors, function(key, err_values){
                                        let li = document.createElement('li');
                                        li.innerHTML = err_values;
                                        ul.appendChild(li);
                                    });
                                    document.getElementById('user_update_validation_errors').appendChild(ul);
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
                                        window.location.replace("users");
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
                ),
                t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click",(function(t){
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
                        t.value?(e.reset(),n.hide()):"cancel"===t.dismiss&&Swal.fire({
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
                t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click",(function(t){
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
                        t.value?(e.reset(),n.hide()):"cancel"===t.dismiss&&Swal.fire({
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
            }()
        }
    }
}();
KTUtil.onDOMContentLoaded((function(){
    KTModalEditUsers.init()
})
);

function getUserEditData(element) {
    $(document).ready(function(){
        let id = element.id;
        $.ajax({
            type:"get",
            url:"users/" + id + "/edit",
            cache:false,
            dataType:false,
            processData:false,
            success:function(response){
                let imageUrl = "";
                if(response.user.image != null){
                   let imageUrl = "background-image: url(http://127.0.0.1:8000/storage/user_uploaded_images/" + response.user.image + ");";
                   document.getElementById('usr_img').setAttribute('style', imageUrl);
                }
                else{
                    let imageUrl = "background-image: url(http://127.0.0.1:8000/style/media/avatars/blank.png);";   
                    document.getElementById('usr_img').setAttribute('style', imageUrl);
                }
                document.getElementById('u_name').setAttribute('value', response.user.name);
                document.getElementById('u_email').setAttribute('value', response.user.email);
                document.getElementById('submit_user_update').setAttribute('value', response.user.id);
                document.getElementById(response.role[0]).checked = true;
                },
            error:function(){
                alert('something went wrong');
            }
        });
    });
}