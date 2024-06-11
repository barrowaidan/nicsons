"use strict";
function makecompanyDeleteRequest(id) {
    console.log(id);
	return $.ajax({
		type:"DELETE",
		url:"company/" + id,
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		cache: false,
		processData: false,
		contentType: false,
		dataType:"json"	
		});
}
var KTUserscompanyList=function(){
    var t,e,b,o,n,c=()=>{
        n.querySelectorAll('[data-kt-company-table-filter="delete_row"]').forEach((e=>{
            e.addEventListener("click",(function(e){
                e.preventDefault();
                const o=e.target.closest("tr"),
                n=o.querySelectorAll("td")[1].innerText;
                const id = o.querySelectorAll("td")[0].innerText;
                Swal.fire({
                    text:"Are you sure you want to delete "+n+"?",
                    icon:"warning",
                    showCancelButton:!0,
                    buttonsStyling:!1,
                    confirmButtonText:"Yes, delete!",
                    cancelButtonText:"No, cancel",
                    customClass:{
                        confirmButton:"btn fw-bold btn-danger",
                        cancelButton:"btn fw-bold btn-active-light-primary"
                    }
                }
                ).then((function(e){
                    e.value?$.when(makecompanyDeleteRequest(id).then(function successHandler(response) {
                        Swal.fire(
                            {
                            text: response.message,
                            icon:"success",
                            buttonsStyling:!1,
                            confirmButtonText:"Ok, got it!",
                            customClass:{
                                confirmButton:"btn fw-bold btn-primary"
                            }
                        },
                        ).then((function(){
                            t.row($(n)).remove().draw();
                            window.location.reload();
                        }))
                    })):"cancel"===e.dismiss&&Swal.fire({
                        text:" was not deleted.",
                        icon:"error",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, got it!",
                        customClass:{
                            confirmButton:"btn fw-bold btn-primary"
                        }
                    })
                })
                )
            })
            )
        })
        )
    }
    return{
            init:function(){
                (n=document.querySelector("#kt_table_company"))&&(n.querySelectorAll("tbody tr").forEach((t=>{
                    const e=t.querySelectorAll("td"),
                    o=moment(e[0].innerHTML,
                        "DD MMM YYYY, LT").format();
                        e[0].setAttribute("data-order",o)})),
                        (t=$(n).DataTable({
                            info:!1,
                            order:[],
                            columnDefs:[{
                                orderable:!1,
                                targets:0},
                                {orderable:!1,
                                    targets:4}]
                                })
                                ).on("draw",(function(){
                                    c()
                                })
                                ),
                                document.querySelector('[data-kt-company-table-filter="search"]').addEventListener("keyup",(function(e){
                                    t.search(e.target.value).draw()
                                })
                                ),
                                c()
                                )
                            }
                        }
                    }
                    ();
                    KTUtil.onDOMContentLoaded(
                        (function(){KTUserscompanyList.init()}
                        ));