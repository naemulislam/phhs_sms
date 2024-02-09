<header class="" data-wow-duration="1s">
    <div class="container">
        <nav class="navbar">
            <div class="menu-area">
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> হোম</a></li>
                    <li class="dd-btn1"><a href="#!">আমাদের সম্পর্কে <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu1">
                            <ul>
                                <li><a href="{{ route('history') }}"><i class="fa fa-long-arrow-right"></i> প্রতিষ্ঠানের
                                        ইতিহাস</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dd-btn1"><a href="#"> শিক্ষকদের তথ্য <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu1">
                            <ul>
                                <li><a href="{{ route('principleInfo') }}"><i class="fa fa-long-arrow-right"></i> প্রধান
                                        শিক্ষক</a></li>
                                <li><a href="{{ route('school.teachers') }}"><i class="fa fa-long-arrow-right"></i>
                                        শিক্ষকগণ </a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> প্রাক্তন শিক্ষকগণ</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dd-btn1"><a href="#">শিক্ষার্থীদের তথ্য <i class="fa fa-angle-down"></i></a>

                        <div class="dropdown-menu1">
                            <ul>
                                @php
                                    $groups = \App\Models\Group::where('is_active', true)->get();
                                @endphp

                                @foreach ($groups as $group)
                                    <li><a href="{{ route('school.students', $group->id) }}">
                                            <i class="fa fa-long-arrow-right"></i>{{ $group->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="dd-btn1"><a href="#">একাডেমিক তথ্য <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu1">
                            <ul>
                                <li><a href="{{ route('class.routin') }}"><i class="fa fa-long-arrow-right"></i> ক্লাস
                                        রুটিন</a></li>
                                <li><a href="{{ route('sylebus') }}"><i class="fa fa-long-arrow-right"></i> পাঠ্যক্রম
                                    </a></li>
                                <li><a href="{{ route('exam.routin') }}"><i class="fa fa-long-arrow-right"></i> পরীক্ষার
                                        রুটিন</a></li>
                                <li><a href="{{ route('result') }}"><i class="fa fa-long-arrow-right"></i> ফলাফল</a>
                                </li>
                                <li><a href="{{ route('academic.subject') }}"><i class="fa fa-long-arrow-right"></i>
                                        একাডেমিক বিষয় </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dd-btn1"><a href="#">গ্যালারি <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu1">
                            <ul>
                                <li><a href="{{ route('gallery.picture') }}"><i class="fa fa-long-arrow-right"></i> ফটো
                                        গ্যালারি</a></li>
                                <li><a href="{{ route('video.gallery') }}"><i class="fa fa-long-arrow-right"></i> ভিডিও
                                        গ্যালারি </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dd-btn1"><a href="#">আরো <i class="fa fa-angle-down"></i></a>

                        <div class="dropdown-menu1">
                            <ul>
                                <li class="dd-btn2"><a href="{{ route('contact') }}"><i
                                            class="fa fa-long-arrow-right"></i>যোগাযোগ</a></li>
                                <li class="dd-btn2"><a href="{{ route('school.staff') }}"><i
                                            class="fa fa-long-arrow-right"></i>স্টাফদের তথ্য</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> নতুন কমিটি</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> পুরাতন কমিটি</a></li>
                                <li><a target="_blank" href="{{ asset('frontend/assets/images/pdf/mpo_info.pdf') }}"><i
                                            class="fa fa-long-arrow-right"></i> এমপিও ও জাতীয়করনের তথ্য</a></li>
                                <li><a href="{{ route('annual.result') }}"><i class="fa fa-long-arrow-right"></i> ফলাফল
                                        পরিসংখ্যান</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dd-btn1"><a href="#">পোর্টাল <i class="fa fa-angle-down"></i></a>

                        <div class="dropdown-menu1">
                            <ul>
                                <li class="dd-btn2"><a href="{{ route('school.portal') }}"><i
                                            class="fa fa-long-arrow-right"></i> School Portal<i
                                            class="fa fa-angle-right float-right mt-1"></i></a></li>
                                <li class="dd-btn2"><a href="{{ route('student.portal') }}"><i
                                            class="fa fa-long-arrow-right"></i> Student Portal<i
                                            class="fa fa-angle-right float-right mt-1"></i></a></li>
                                <li class="dd-btn2"><a href="{{ route('user.login') }}"><i
                                            class="fa fa-long-arrow-right"></i> User Portal<i
                                            class="fa fa-angle-right float-right mt-1"></i></a></li>
                            </ul>
                        </div>

                    </li>
                </ul>
            </div>
            <i class="fa fa-bars menu-icon"></i>
        </nav>
    </div>
</header>
<!--end header-->
<!--start mobile menu-->
<div class="mobile-menu">
    <div class="mm-logo" style="background: #fff; padding: 11px 18px;">
        <a href="{{ route('home') }}">
            <img style="width: 55px;" src="{{ asset('frontend/assets/images/logo/main-logo.png') }}" alt="logo">
        </a>
        <div class="mm-cross-icon">
            <i class="fa fa-times mm-ci"></i>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion" id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{ route('home') }}"><i class="fa fa-home mr-2"></i> হোম</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingFour">
                    <a href="{{ route('history') }}" class="mmenu-btn" type="button" data-toggle="collapse"
                        data-target="#collapseFour"> প্রতিষ্ঠানের ইতিহাস</a>
                </div>

            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingTwo">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseTwo">শিক্ষকদের
                        তথ্য<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseTwo" class="collapse menu-body" aria-labelledby="headingTwo"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="{{ route('principleInfo') }}"><i class="fa fa-long-arrow-right"></i> প্রধান
                                    শিক্ষক</a></li>
                            <li><a href="{{ route('school.teachers') }}"><i class="fa fa-long-arrow-right"></i>
                                    শিক্ষকগণ</a>
                            </li>
                            <li><a href=""><i class="fa fa-long-arrow-right"></i> প্রাক্তন শিক্ষকগণ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingThree">
                    <a class="mmenu-btn" type="button" data-toggle="collapse"
                        data-target="#collapseThree">শিক্ষার্থীদের তথ্য<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseThree" class="collapse menu-body" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            @foreach ($groups as $group)
                                <li><a href="{{ route('school.students', $group->id) }}"><i
                                            class="fa fa-long-arrow-right"></i>{{ $group->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingFour">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseFour">একাডেমিক
                        তথ্য<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseFour" class="collapse menu-body" aria-labelledby="headingFour"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="{{ route('class.routin') }}"><i class="fa fa-long-arrow-right"></i> ক্লাস
                                    রুটিন</a></li>
                            <li><a href="{{ route('sylebus') }}"><i class="fa fa-long-arrow-right"></i> পাঠ্যক্রম
                                </a></li>
                            <li><a href="{{ route('exam.routin') }}"><i class="fa fa-long-arrow-right"></i> পরীক্ষার
                                    রুটিন</a></li>
                            <li><a href="{{ route('result') }}"><i class="fa fa-long-arrow-right"></i> ফলাফল</a></li>
                            <li><a href="{{ route('academic.subject') }}"><i class="fa fa-long-arrow-right"></i>
                                    একাডেমিক বিষয় </a></li>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingFive">
                    <a class="mmenu-btn" type="button" data-toggle="collapse"
                        data-target="#collapseFive">গ্যালারি<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseFive" class="collapse menu-body" aria-labelledby="headingFive"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="{{ route('gallery.picture') }}"><i class="fa fa-long-arrow-right"></i> ফটো
                                    গ্যালারি</a></li>
                            <li><a href="{{ route('video.gallery') }}"><i class="fa fa-long-arrow-right"></i> ভিডিও
                                    গ্যালারি </a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingSix">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseSix">আরো<i
                            class="fa fa-plus"></i></a>
                </div>
                <div id="collapseSix" class="collapse menu-body" aria-labelledby="headingSix"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="{{ route('contact') }}"><i class="fa fa-long-arrow-right"></i> যোগাযোগ</a>
                            </li>
                            <li><a href="{{ route('school.staff') }}"><i class="fa fa-long-arrow-right"></i> স্টাফদের
                                    তথ্য</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> নতুন কমিটি</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> পুরাতন কমিটি</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> এমপিও ও জাতীয়করনের তথ্য</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingSeven">
                    <a class="mmenu-btn" type="button" data-toggle="collapse"
                        data-target="#collapseSeven">পোর্টাল<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseSeven" class="collapse menu-body" aria-labelledby="headingSeven"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="{{ route('school.portal') }}"><i class="fa fa-long-arrow-right"></i> School
                                    Portal</a></li>
                            <li><a href="{{ route('student.portal') }}"><i class="fa fa-long-arrow-right"></i>
                                    Student Portal</a></li>
                            <li><a href="{{ route('user.login') }}"><i class="fa fa-long-arrow-right"></i> User
                                    Portal</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <style>
                .scroll-div-dist {
                    background: #ececec !important;
                }
            </style>
        </div>
    </div>
</div>
