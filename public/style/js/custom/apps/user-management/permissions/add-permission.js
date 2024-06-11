"use strict";
function makeAddRequest() {
	const t = document.getElementById("kt_modal_add_permission");
	const form = new FormData(t.querySelector('#kt_modal_add_permission_form'));
	return $.ajax({
		type:"post",
		url:"permissions",
		data:form,
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		cache: false,
		processData: false,
		contentType: false,
		dataType:"json"	
		});
}
var KTUsersAddPermission=function(){
         const t=document.getElementById("kt_modal_add_permission"),
         e=t.querySelector("#kt_modal_add_permission_form"),
         n=new bootstrap.Modal(t);
         return{
         	init:function(){
         		(()=>{var o=FormValidation.formValidation(e,{fields:{permission_name:{validators:{notEmpty:{message:"Permission name is required"}}}},
         			plugins:{
         				trigger:new FormValidation.plugins.Trigger,
         				bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})
         			}});
         		t.querySelector('[data-kt-permissions-modal-action="close"]').addEventListener("click",(t=>{
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
         				}}).then((function(t){t.value&&n.hide()}))})),
         		t.querySelector('[data-kt-permissions-modal-action="cancel"]').addEventListener("click",(t=>{
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
         				}}).then((function(t){
         					t.value?(e.reset(),
         						n.hide()):"cancel"===t.dismiss&&Swal.fire({
         							text:"Your form has not been cancelled!.",
         							icon:"error",
         							buttonsStyling:!1,
         							confirmButtonText:"Ok, got it!",
         							customClass:{confirmButton:"btn btn-primary"}
         						})
         					})
         				)
         			}));
         		const i=t.querySelector('[data-kt-permissions-modal-action="submit"]');
				$(document).ready(function(){
					
					i.addEventListener("click",(function(t){
						 t.preventDefault(),
						 o&&o.validate().then((function(t){
							 console.log("validated!"),
							 "Valid"==t?(i.setAttribute("data-kt-indicator","on"),
								 i.disabled=!0,
								 setTimeout(
									 (function(){
										i.removeAttribute("data-kt-indicator"),
										i.disabled=!1,
										$.when(makeAddRequest().then(function successHandler(response){
											console.log(response);
											if (response.message == null) {
												let ul = document.createElement('ul');
												ul.setAttribute('class', 'alert alert-danger');
												$.each(response.errors, function(key, err_values){
													let li = document.createElement('li');
													li.innerHTML = err_values;
													ul.appendChild(li);
												});
												document.getElementById('validation_errors').appendChild(ul);
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
													window.location.replace("permissions");
												})
												)
											}
										})),
										function errorHandler(){
											Swal.fire({
												text:"Permission created fail" ,
												icon:"error",
												buttonsStyling:!1,
												confirmButtonText:"Ok, got it!",
												customClass:{confirmButton:"btn btn-primary"}
											});
										}
								 }),
								 2e3)):
								Swal.fire({
									text:"Sorry, looks like there are some errors detected, please try again.",
									icon:"error",
									buttonsStyling:!1,
									confirmButtonText:"Ok, got it!",
									customClass:{confirmButton:"btn btn-primary"}
								})
						 })
						 )
					 })
					 )
				});
         		
         	}
         		)()
         	}}
         	}();
         	KTUtil.onDOMContentLoaded(
         		(function(){
         			KTUsersAddPermission.init()
         		})
         		);