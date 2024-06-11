"use strict";
function makecompanyUpdateRequest(id) {
	const t = document.getElementById("kt_modal_edit_company");
	const form = new FormData(t.querySelector('#kt_modal_edit_company_form'));
    form.append('_method', 'PUT');
	return $.ajax({
		type:"post",
        data:form,
		url:"about_us/" + id,
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		cache: false,
		processData: false,
		contentType: false,
		dataType:"json"	
		});
}
var KTModalEditcompanys=function(){
    const t=document.getElementById("kt_modal_edit_company"),
    e=t.querySelector("#kt_modal_edit_company_form"),
    n=new bootstrap.Modal(t);
    return{
        init:function(){
            !function(){
                var o=FormValidation.formValidation(e,{
                    fields:{
                        name:{
                            validators:{
                                notEmpty:{
                                    message:"Full name is required"
                                }
                            }
                        },
                        email:{
                            validators:{
                                notEmpty:{
                                    message:"Valid email address is required"
                                }
                            }
                        },
                        phone_no:{
                            validators:{
                                notEmpty:{
                                    message:"Phone no is required"
                                }
                            }
                        },
                        physical_address:{
                            validators:{
                                notEmpty:{
                                    message:"Physical address is required"
                                }
                            }
                        },
                        map_link:{
                            validators:{
                                notEmpty:{
                                    message:"Map link is required"
                                }
                            }
                        },
                        working_hours:{
                            validators:{
                                notEmpty:{
                                    message:"Working hours is required"
                                }
                            }
                        },
                        motivation:{
                            validators:{
                                notEmpty:{
                                    message:"motivation is required"
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
                const i=t.querySelector('[data-kt-companys-modal-action="submit"]');
                i.addEventListener("click",(function(t){
                    t.preventDefault(),o&&o.validate().then((function(t){
                        console.log("validated!"),
                        "Valid"==t?(i.setAttribute("data-kt-indicator","on"),
                        i.disabled=!0,
                        setTimeout((function(){
                            i.removeAttribute("data-kt-indicator"),
                            i.disabled=!1,
                            $.when(makecompanyUpdateRequest($("#submit_company_update").attr('value')).then(function successHandler(response) {
                                if (response.message == null) {
                                    let ul = document.createElement('ul');
                                    ul.setAttribute('class', 'alert alert-danger mx-5 mx-xl-15 my-7');
                                    $.each(response.errors, function(key, err_values){
                                        let li = document.createElement('li');
                                        li.innerHTML = err_values;
                                        ul.appendChild(li);
                                    });
                                    document.getElementById('company_update_validation_errors').appendChild(ul);
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
                                        window.location.replace("about_us");
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
                t.querySelector('[data-kt-companys-modal-action="cancel"]').addEventListener("click",(function(t){
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
                t.querySelector('[data-kt-companys-modal-action="close"]').addEventListener("click",(function(t){
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
    KTModalEditcompanys.init()
})
);

function getcompanyEditData(element) {
    $(document).ready(function(){
        let id = element.id;
        $.ajax({
            type:"get",
            url:"company/" + id + "/edit",
            cache:false,
            dataType:false,
            processData:false,
            success:function(response){
                document.getElementById('edit_about').value = response.company.about_company;
                document.getElementById('edit_mission').value = response.company.mission;
                document.getElementById('edit_vision').value = response.company.vision;
                document.getElementById('edit_core_value').value = response.company.core_value;
                document.getElementById('edit_connection').value = response.company.connection;
                document.getElementById('edit_commitment').value = response.company.commitment;
                document.getElementById('edit_creactivity').value = response.company.creativity;
                let imageUrl1 = "background-image: url(http://127.0.0.1:8000/assets/img/hero/" + response.company.slide1 + ");";
                let imageUrl2 = "background-image: url(http://127.0.0.1:8000/assets/img/hero/" + response.company.slide2 + ");";
                let imageUrl3 = "background-image: url(http://127.0.0.1:8000/assets/img/hero/" + response.company.slide3 + ");";
                document.getElementById('slide1').setAttribute('style', imageUrl1);
                document.getElementById('slide2').setAttribute('style', imageUrl2);
                document.getElementById('slide3').setAttribute('style', imageUrl3);

                document.getElementById('submit_company_update').setAttribute('value', response.company.id);
                },
            error:function(){
                alert('something went wrong');
            }
        });
    });
}

$(document).ready(function(){
        
    $(document).on('change','#region',function(){
       
    var regionId = $(this).val();
    $.ajax({
        type: 'GET',
        url: "district/" + regionId,
        success: function(data){
            console.log(data);
            $("#district").html(data);
            $(".district").html(data);
        }
    });
    });
    //get ward
    $(document).on('change','#district',function(){
        
    var districtId = $(this).val();
    console.log(districtId);
    $.ajax({
        type: 'GET',
        url: "ward/" + districtId,
        success: function(data){
            $("#ward").html(data);
            $(".ward").html(data);
        }
    });
    });
    
});