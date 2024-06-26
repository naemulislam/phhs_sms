@php
    $routeName = request()->route()->getName();
@endphp
<li class="menu-item {{$routeName == 'school.dashboard'? 'menu-item-active': '' }}" aria-haspopup="true">
    <a href="{{ route('school.dashboard') }}" class="menu-link">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path
                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                        fill="#000000" fill-rule="nonzero" />
                    <path
                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Dashboard</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Custom</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

{{-- Academic section --}}
<li class="menu-item menu-item-submenu {{
$routeName == 'group.index' ||
$routeName == 'subject.index' ||
$routeName == 'class.routine.index' ||
$routeName == 'exam.routine.index' ||
$routeName == 'slybus.index' ||
$routeName == 'result.index'? 'menu-item-open':''
}}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Academic</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">Academic</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'group.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('group.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Calss</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'subject.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('subject.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Subject</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'class.routine.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('class.routine.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Class Routine</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'exam.routine.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('exam.routine.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Exam Routine</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'slybus.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('slybus.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Slybus</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'result.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('result.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Result</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Student management section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'student.index' ||
    $routeName == 'student.create' ||
    $routeName == 'student.info.search' ||
    $routeName == 'student.promote.index'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3"/>
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Student management</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">student</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'student.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('student.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Student List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'student.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('student.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Student admission</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'student.promote.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('student.promote.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Student promote</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
            <li class="menu-item menu-item-submenu {{$routeName == 'student.info.search'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('student.info.search')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Previous student info</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Teacher management section --}}
@if(Auth::user()->role == 'admin' || Auth::user()->role == 'teacher')
<li class="menu-item menu-item-submenu
{{
    $routeName == 'attendance.index' ||
    $routeName == 'attendance.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Student attendance</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">attendance</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'attendance.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('attendance.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Attendance List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>

            <li class="menu-item menu-item-submenu {{$routeName == 'attendance.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('attendance.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Attendance Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>

        </ul>
    </div>
</li>
@endif
{{-- End section --}}
{{-- Teacher management section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'teacher.index' ||
    $routeName == 'teacher.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Teacher management</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">teachers</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'teacher.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('teacher.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Teacher List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'teacher.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('teacher.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Teacher Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Teacher management section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'submission.result.list' ||
    $routeName == 'submission.result.edit' ||
    $routeName == 'submission.result.search' ||
    $routeName == 'submission.result.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Result management</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">result</span>
                </span>
            </li>
            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'teacher')
            <li class="menu-item menu-item-submenu {{$routeName == 'submission.result.list'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('submission.result.list')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Result List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>

            <li class="menu-item menu-item-submenu {{$routeName == 'submission.result.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('submission.result.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Result Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
            <li class="menu-item menu-item-submenu {{$routeName == 'submission.result.search'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('submission.result.search')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Result Search</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Staff management section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'staff.index' ||
    $routeName == 'staff.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Staff management</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">staff</span>
                </span>
            </li>


            <li class="menu-item menu-item-submenu {{$routeName == 'staff.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('staff.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Staff List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'staff.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('staff.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Staff Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Committee management section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'committee.index' ||
    $routeName == 'committee.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Committee management</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">committee</span>
                </span>
            </li>


            <li class="menu-item menu-item-submenu {{$routeName == 'committee.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('committee.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Committee List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'committee.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('committee.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Committee Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Notice management section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'notice.index' ||
    $routeName == 'notice.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Notice management</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">notice</span>
                </span>
            </li>


            <li class="menu-item menu-item-submenu {{$routeName == 'notice.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('notice.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Notice List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'notice.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('notice.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Notice Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Message section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'message.index'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        @php
            $msgCount = \App\Models\Contact::where('is_seen', 1)->count();
        @endphp
        <span class="menu-text">Message</span> <span class="badge badge-danger">{{$msgCount}}</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">message</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'message.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('message.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Message</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- News section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'news.index' ||
    $routeName == 'news.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">News and Events</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">news</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'news.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('news.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">News List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'news.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('news.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">News Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Our Achivment section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'achievement.index' ||
    $routeName == 'achievement.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Our Achivment</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">achiement</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'achievement.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('achievement.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Achievement List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'achievement.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('achievement.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Achievement Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Our Campas section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'campas.index' ||
    $routeName == 'campas.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3"/>
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Our Campas</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">capms</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'campas.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('campas.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Camps List</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'campas.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('campas.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Camps Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Gallery section --}}
<li class="menu-item menu-item-submenu
{{
    $routeName == 'gallery.index' ||
    $routeName == 'gallery.create'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3"/>
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Gallery</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">gallery</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'gallery.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('gallery.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Gallery</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
            <li class="menu-item menu-item-submenu {{$routeName == 'gallery.create'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('gallery.create')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Gallery Create</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            @endif
        </ul>
    </div>
</li>
{{-- End section --}}
{{-- Settings section --}}
@if(Auth::user()->role == 'admin')
<li class="menu-item menu-item-submenu
{{
    $routeName == 'slider.index' ||
    $routeName == 'settings.index' ||
    $routeName == 'institute.index' ||
    $routeName == 'computerLab.index'? 'menu-item-open':''
    }}
" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Settings</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">setting</span>
                </span>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'slider.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('slider.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Slider</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'settings.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('settings.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">General Setting</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'institute.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('institute.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">History of Institution</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item menu-item-submenu {{$routeName == 'computerLab.index'? 'menu-item-active': '' }}" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ route('computerLab.index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-line">
                        <span></span>
                    </i>
                    <span class="menu-text">Computer Lab</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
@endif
{{-- End section --}}
