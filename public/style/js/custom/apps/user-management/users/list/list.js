"use strict";
function makeUserDeleteRequest(id) {
    console.log(id);
	return $.ajax({
		type:"DELETE",
		url:"users/" + id,
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		cache: false,
		processData: false,
		contentType: false,
		dataType:"json"	
		});
}
var KTUsersList=function(){
    var t,
    e;
    return{
        init:function(){
            (e=document.querySelector("#kt_table_users"))&&(e.querySelectorAll("tbody tr").forEach((t=>{
                const e=t.querySelectorAll("td"),
                n=moment(e[2].innerHTML,"DD MMM YYYY, LT").format();
                e[2].setAttribute("data-order",n)
            })
            ),
            t=$(e).DataTable({
                info:!1,
                order:[],
                columnDefs:[{
                    orderable:!1,
                    targets:1
                },
                {
                    orderable:!1,
                    targets:3
                }]
            }),
            document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup",(function(e){
                t.search(e.target.value).draw()
            })
            ),
            e.querySelectorAll('[data-kt-user-table-filter="delete_row"]').forEach((e=>{
                e.addEventListener("click",(function(e){
                    e.preventDefault();
                    const n=e.target.closest("tr"),
                    o=n.querySelectorAll("td")[0].innerText;
                    const id = n.querySelectorAll("td")[0].innerText;
                    Swal.fire({
                        text:"Are you sure you want to delete "+o+"?",
                        icon:"warning",
                        showCancelButton:!0,
                        buttonsStyling:!1,
                        confirmButtonText:"Yes, delete!",
                        cancelButtonText:"No, cancel",
                        customClass:{
                            confirmButton:"btn fw-bold btn-danger",
                            cancelButton:"btn fw-bold btn-active-light-primary"
                        }
                    }).then((function(e){
                        e.value?$.when(makeUserDeleteRequest(id).then(function successHandler(response) {
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
            )
        }
    }
}
();
KTUtil.onDOMContentLoaded((function(){
    KTUsersList.init()
})
);


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

$(document).ready(function(){
        
    $(document).on('click','#region_edit',function(){
       
    var regionId = $(this).val();
    $.ajax({
        type: 'GET',
        url: "district/" + regionId,
        success: function(data){
            console.log(data);
            $("#district_edit").html(data);
            $(".district_edit").html(data);
        }
    });
    });
    //get ward
    $(document).on('click','#district_edit',function(){
        
    var districtId = $(this).val();
    console.log(districtId);
    $.ajax({
        type: 'GET',
        url: "ward/" + districtId,
        success: function(data){
            $("#ward_edit").html(data);
            $(".ward_edit").html(data);
        }
    });
    });
    
});