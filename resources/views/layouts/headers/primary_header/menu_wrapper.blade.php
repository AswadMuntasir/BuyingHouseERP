<div class="d-flex">
    <!--begin::Logo-->
    <div class="app-header-logo d-flex flex-center gap-2 me-lg-15">
        <!--begin::Sidebar toggle-->
        <button class="btn btn-icon btn-sm btn-custom d-flex d-lg-none ms-n2" id="kt_app_header_menu_toggle">
            <i class="ki-outline ki-abstract-14 fs-2"></i> </button>
        <!--end::Sidebar toggle-->

        <!--begin::Logo image-->
        <a href="index-2.html">
            <img alt="Logo" src="{{ asset('assets/media/logos/demo60.svg') }}" class="mh-25px" />
        </a>
        <!--end::Logo image-->
    </div>
    <!--end::Logo-->
    <!--begin::Menu wrapper-->
    <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
        <!--begin::Menu holder-->
        <div
            class="app-header-menu app-header-mobile-drawer align-items-stretch"

            data-kt-drawer="true"
            data-kt-drawer-name="app-header-menu"
            data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'200px', '300px': '250px'}"
            data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_app_header_menu_toggle"

            data-kt-swapper="true"
            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
            <!--begin::Menu-->
            <div
                class="
                    menu 
                    menu-rounded 
                    menu-column 
                    menu-lg-row 
                    menu-active-bg 
                    menu-title-gray-700 
                    menu-state-gray-900 
                    menu-icon-gray-500
                    menu-arrow-gray-500 
                    menu-state-icon-primary
                    menu-state-bullet-primary
                    fw-semibold 
                    fs-6 
                    align-items-stretch 
                    my-5 
                    my-lg-0 
                    px-2 
                    px-lg-0
                "
                id="#kt_app_header_menu"
                data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span class="menu-link"><span class="menu-title">Dashboards</span><span class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-350px"><!--begin:Dashboards menu-->
                        <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                            <!--begin:Row-->
                            <div class="row">
                                <!--begin:Col-->
                                <div class="col-lg-12 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
                                    <!--begin:Row-->
                                    <div class="row">
                                        <!--begin:Col-->
                                        <div class="col-lg-12 mb-3">
                                            <!--begin:Menu item-->
                                            <div class="menu-item p-0 m-0">
                                                <!--begin:Menu link-->
                                                <a href="index-2.html" class="menu-link active">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                        <i class="ki-outline ki-element-11 text-primary fs-1"></i> </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fs-6 fw-bold text-gray-800">Default</span>
                                                        <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                                    </span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Col-->
                                    </div>
                                    <!--end:Row-->
                                </div>
                                <!--end:Col-->
                            </div>
                            <!--end:Row-->
                        </div>
                        <!--end:Dashboards menu-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu holder-->
    </div>
    <!--end::Menu wrapper-->
</div>