@extends('backend.students.layout.master')
@section('title', 'Dashboard Panel')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <a target="_balnk" href="{{ route('home') }}"
                        class="btn btn-light-warning font-weight-bolder btn-sm">Website</a>
                    <!--end::Actions-->
                </div>
            </div>
        </div>
        <!--end::Subheader-->
        <!--end::Entry-->

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-12 col-xxl-4">
                            <!--begin::Mixed Widget 1-->
                            <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                                <!--begin::Header-->

                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body p-0 position-relative overflow-hidden">
                                    <!--begin::Chart-->
                                    <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom" style="height: 90px">
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Stats-->
                                    <div class="card-spacer mt-n25">
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                                height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                                rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-warning font-weight-bold font-size-h6">Subject</a>
                                            </div>
                                            <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7 mr-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                                height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                                rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-primary font-weight-bold font-size-h6 mt-2">Notice</a>
                                            </div>
                                            <div class="col bg-light-warning px-6 py-8 rounded-xl mb-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                width="3" height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3"
                                                                height="11" rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3"
                                                                height="9" rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3"
                                                                height="7" rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-warning font-weight-bold font-size-h6">Attendance In Current Month</a>
                                            </div>

                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7 mr-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                                height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                                rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-primary font-weight-bold font-size-h6 mt-2">Teacher</a>
                                            </div>
                                            <div class="col bg-light-warning px-6 py-8 rounded-xl mb-7 mr-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                width="3" height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3"
                                                                height="11" rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3"
                                                                height="9" rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3"
                                                                height="7" rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-warning font-weight-bold font-size-h6">Homework</a>
                                            </div>
                                            <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                                height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                                rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-primary font-weight-bold font-size-h6 mt-2">Behaviour Point</a>
                                            </div>

                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                                height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                                rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-warning font-weight-bold font-size-h6">Class Routine</a>
                                            </div>
                                            <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7 mr-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                                height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                                rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                                rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-primary font-weight-bold font-size-h6 mt-2">Exam Routine</a>
                                            </div>
                                            <div class="col bg-light-warning px-6 py-8 rounded-xl mb-7">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                width="3" height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3"
                                                                height="11" rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3"
                                                                height="9" rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3"
                                                                height="7" rx="1.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href=""
                                                    class="text-warning font-weight-bold font-size-h6">Result</a>
                                            </div>

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Mixed Widget 1-->
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->

                    <!--end::Row-->
                    <!--end::Dashboard-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
