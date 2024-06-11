<x-app-layout>
    <!--begin::Toolbar-->
    <div class="toolbar py-2" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
            <!--begin::Page title-->
            <div class="flex-grow-1 flex-shrink-0 me-5">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Requests</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-3"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Requests</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Content List</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Page title-->
            
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-company-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-company-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-company-table-select="selected_count"></span>Selected</div>
                            <button type="button" class="btn btn-danger" data-kt-company-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                        
                        <!--begin::Modal - Add task-->
                        @include('admin.request.create')
                        
                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body scroll-x pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_company">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-50px" style="display:none;">Id</th>
                                <th class="w-10px pe-2">
                                    #
                                </th>
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Phone_no</th>
                                <th class="min-w-125px">Distance</th>
                                <th class="min-w-125px">Weight</th>
                                <th class="min-w-125px">Sercice</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        @php $i = 1; @endphp
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            @if(!is_null($requests))
                                <!--begin::Table row-->
                                @foreach ($requests as $request)
                                    <tr>
                                        <!--begin::Cell=-->
                                        <td style="display:none;">{{$request->id}}</td>
                                        <!--end::Cell=-->
                                        <!--begin::Checkbox-->
                                        <td>
                                            {{ $i++ }}
                                        </td>
                                        <!--end::Checkbox-->
                                        <!--begin::Role=-->
                                        <td>{{ $request->name }}</td>
                                        <!--end::Role=-->
                                        <!--begin::Last login=-->
                                        <td >
                                            {{ $request->email }}
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Last login=-->
                                        <td >
                                            {{ $request->phone_no }}
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Last login=-->
                                        <td >
                                            {{ $request->weight }}
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Last login=-->
                                        <td >
                                            {{ $request->distance }}
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Last login=-->
                                        <td >
                                            {{ $request->service_id }}
                                        </td>
                                        <!--end::Last login=-->
                                    </tr>
                                @endforeach
                                <!--end::Table row-->
                            @endif
                            
                           
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    <!--begin::Edit Modal-->
                    @include('admin.request.edit')
                    <!--end::Edit Modal-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</x-app-layout>
<script src="{{ asset('style/js/custom/apps/request/add.js')}}"></script>
<script src="{{ asset('style/js/custom/apps/request/edit.js')}}"></script>
<script src="{{ asset('style/js/custom/apps/request/table.js')}}"></script>