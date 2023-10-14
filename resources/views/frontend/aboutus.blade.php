@extends('frontend.layout.master')
@section('title','About Us')
@section('content')
<style>
    /* start faq section */


    .card {
        margin-bottom: 5px;
    }

    .title-bb {
        height: 4px;
        width: 177px;
        background-color: #000338;
        margin-bottom: 10px;
    }

    .prayer-box {
        margin-bottom: 30px;
    }
</style>
<section class="about-section">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="abouteus-txt py-3">
                    <h1>About Us</h1>

                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <div class="welcome-box">
                    <h1>Welcome to Rahima Aziz Foundation</h1>
                    <p>Rahima Aziz Foundation was founded at the beginning of 2021 as an extension of the Al Mansoor Cultural Center which was established in 2016. Both RA Foundation and Al Mansoor Cultural Center were founded by Mufti Muhammad Abdullah, Mufti Muhammad Hafiz Abdullah, Maulana Nayeemullah, Umme Yousuf, and their family members. Alhamdulillah, currently, Rahima Aziz Foundation is operating a full-fledged Masjid that provides many different programs and services. Among these are daily prayers, weekly Jumuah and Taraweeh prayers in the month of Ramadhan. It also has weekly Tafsir programs. For Islamic education, there is a Maktab and Madrasa where students of all ages are learning their Arabic letters, perfecting their Tajweed in reciting the beautiful ayahs of the Holy Book, and also a Hifz program where our students memorize the Qur’an by heart. Alhamdulillah we have qualified male and female teachers on our staff so as to provide a good Islamic environment for both male and female students. As a cultural center, it functions as a place for the community to gather for functions such as Eid and Aqiqah, and Marriage. </p>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Start FAQ section -->
<section class="faq-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="title">
                    <h2>About Our <Span style="color: #FF9822;">Services</Span></h2>
                    <div class="title-bb"></div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion">
                    <div class="card">
                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header faq-header" id="headingOne">
                                <h5 class="mb-0">Aims and Objectives/Goals</h5>
                                <span> <i class="fa fa-angle-down"></i> </span>
                            </div>
                        </a>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Rahima Aziz Foundation endeavors to be a stable source of authentic Islamic knowledge along with providing all the needs of a broader Muslim community. We would like to be a bridge that links the Muslim community with the people of all faiths. We have highly qualified Islamic scholars within our program, and are also connected to a huge network of Islamic scholars globally.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a data-toggle="collapse" data-target="#colTwo" aria-expanded="true" aria-controls="colTwo">
                            <div class="card-header faq-header" id="hTwo">
                                <h5 class="mb-0">Mission Statement</h5>
                                <span> <i class="fa fa-angle-down"></i> </span>
                            </div>
                        </a>
                        <div id="colTwo" class="collapse" aria-labelledby="hTwo" data-parent="#accordion">
                            <div class="card-body">
                                At Rahima Aziz Foundation, we are committed to enhancing the lives of members in the community through our wide range of activities and events.
                                Ever since opening our doors to the community in 2021, we have provided members the chance to get together and experience what we’re all about. Our mission has always been to provide a religious and educational experience for members of the Muslim community — and we’ve done everything we can to achieve this goal to this very day.

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion">
                    <div class="card">
                        <a data-toggle="collapse" data-target="#collThree" aria-expanded="true" aria-controls="collThree">
                            <div class="card-header faq-header" id="hThree">
                                <h5 class="mb-0">Future Plan</h5>
                                <span> <i class="fa fa-angle-down"></i> </span>
                            </div>
                        </a>

                        <div id="collThree" class="collapse" aria-labelledby="hThree" data-parent="#accordion">
                            <div class="card-body">
                                Our future goal is to have a community center to fulfill the needs of the Muslim families, a recreational and fitness center for our youth, and for the elderly, a place where they can interact and spend time.
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</section>


<section class="faq-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="title">
                    <h2>Our <Span style="color: #FF9822;">Staff</Span></h2>
                    <div class="title-bb"></div>

                </div>
            </div>

        </div>
        @foreach($staffs as $row)
        <div class="row bg-light p-3 mb-3">
            <div class="col-md-4">
                <div class="staff-title-box">
                    <h3>{{$row->name}}</h3>
                    <p>{{$row->department}}</p>
                    <p>{{$row->email}}</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="staff-details">
                    <p>{!! $row->description !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>
<section class="faq-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="title">
                    <h2>Ar-Rahman <Span style="color: #FF9822;">Academy</Span></h2>
                    <div class="title-bb"></div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion">
                    <div class="card">
                        <a data-toggle="collapse" data-target="#collapseacadamyOne" aria-expanded="true" aria-controls="collapseacadamyOne">
                            <div class="card-header faq-header" id="headingacadamyOne">
                                <h5 class="mb-0">Full-Time Hifz</h5>
                                <span> <i class="fa fa-angle-down"></i> </span>
                            </div>
                        </a>

                        <div id="collapseacadamyOne" class="collapse" aria-labelledby="headingacadamyOne" data-parent="#accordion">
                            <div class="card-body">
                                Our Hifz program is a full-time program dedicated to memorizing the Holy Quran in its entirety. Our aim is not only for our students to memorize, but also to make sure our students retain what they have memorized. For this, our program emphasizes memorizing and retention equally. This is integrated with academic support in math, English, social studies, and science in accordance with NYS homeschooling guidelines.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a data-toggle="collapse" data-target="#collapseacadamyTwo" aria-expanded="true" aria-controls="collapseacadamyTwo">
                            <div class="card-header faq-header" id="hacadamyTwo">
                                <h5 class="mb-0">Weekend Maktab</h5>
                                <span> <i class="fa fa-angle-down"></i> </span>
                            </div>
                        </a>
                        <div id="collapseacadamyTwo" class="collapse" aria-labelledby="hacadamyTwo" data-parent="#accordion">
                            <div class="card-body">
                                Our Maktab programs provide a way for the children in our community to gain the knowledge of the basics of Islam. This program is dedicated to teaching our students how to read the Qur’an as well as the basic tenets and principles of Islam. Our Islamic Studies is based on the An-Nasihah Curriculum, which not only teaches students their religion, but teaches them to live harmoniously in society. Embedded in the curriculum are the virtues of tolerance and respect for others (whether Muslim or non-Muslim), playing an active role in the community and promoting values of model citizens such as individual liberty, mutual respect and tolerance of those with different faiths and beliefs. It incorporates vital areas that children of all ages need to learn in order to equip them with the necessary knowledge to be model citizens, who have a deep rooted sense of faith and belief, guided by the Quran and Sunnah.

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion">
                    <div class="card">
                        <a data-toggle="collapse" data-target="#collapseacadamyThree" aria-expanded="true" aria-controls="collapseacadamyThree">
                            <div class="card-header faq-header" id="hacadamyThree">
                                <h5 class="mb-0">Summer Camp</h5>
                                <span> <i class="fa fa-angle-down"></i> </span>
                            </div>
                        </a>

                        <div id="collapseacadamyThree" class="collapse" aria-labelledby="hacadamyThree" data-parent="#accordion">
                            <div class="card-body">
                                Learning about Deen,Quran and Sunnah is essential for every Muslim. For this, we have implemented a summer program which introduces and elevates their understanding of basic fiqh, sirah, akhlaq and adab and more! Students will also learn how to recite the Qur'an properly and spend time playing sports and connecting with other Muslim children of their age.
                                We hope for our Summer camp to be a source of inspiration for the younger generation to attain Islamic knowledge, become familiar with the Islamic environment and culture, and continue their Islamic education.

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</section>
<!-- end FAQ section -->

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="title">
                    <h2>Masjid <Span style="color: #FF9822;">Ar Rahman</Span></h2>
                    <div class="title-bb"></div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <h4>Daily Prayers</h4>
                <p>-Prayer Schedule</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Salah</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prayers as $row)
                    <tr>
                        <th>{{ $loop->iteration}}</th>
                        <td>{{ $row->name}}</td>
                        <td>{{ date('h:i a',strtotime($row->start_time))}}</td>
                        <td>{{ date('h:i a', strtotime($row->end_time))}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="">


            <div class="prayer-box">
                <div class="px-4">
                    <h4 class="m-0">Marriage/ Nikah</h4>
                    <div class="title-bb"></div>
                    <div>
                        <p>قالَ رَسُولُ اللهِ (صَلَّى اللهُ عَلَيهِ وَآلِهِ وَسَلّمَ): ما بُنِيَ بِناءَ فِي الإِسْلامِ أَحَبُّ إِلى اللهِ عَزَّ وَجَلّ مِنَ التَّزْوِيجِ.
                            The Messenger of Allah ﷺ has said, "There is no foundation that has been built in Islam more loved by Allah, (The Greatest and Noblest) than marriage."
                            This hadith shows us the great importance that Allah (SwT) and His Messenger ﷺ have placed on marriage, such that it is the most loved foundation or establishment upon which the Muslim man and woman can build their life upon. If such a foundation is built with love, honesty, sincerity and true faith in Allah (SwT) and all that He has commanded, then there is nothing that could destroy such a firm building.
                            It is a Sunnah of Rasul ﷺ that a marriage ceremony be conducted in a Masjid. The Messenger of Allah ﷺ, said, “Announce this marriage publicly, conduct it in the mosque, and strike the drums for it.” We conduct the marriage ceremony in accordance to Qu’ran and Sunnah.
                            The Wedding Ceremony (Nikaah)
                            Components
                            1 – Consent: ‘Aishah(R) asked Prophet Muhammadﷺ if women must be asked for their permission of marriage. Prophet Muhammadﷺ replied, “Yes.” She said, ‘The virgin is asked for her permission but she gets shy. Prophet Muhammadﷺ said, “Her silence is her permission.” (Bukhari and Muslim)
                            2 – The Wallee (Woman’s Guardian): Prophet Muhammadﷺ said, “There is no nikaah except with a wallee.” (Ahmad, Abu Dawood, Tirmidhi)
                            3 – Two Witnesses: Prophet Muhammadﷺ said, “There is no marriage except with a wallee and trustworthy witnesses.” (Sahih- Bayhaqee) Also, “There is no marriage except with a wallee and two witnesses.” (Sahih Al-Jaami’)
                            4 – The Mahr (Dowry): Allah says (what means): “And give to the women their dowry with a good heart, but if they out of their own good pleasure remit any part of it to you, take it and enjoy it without fear of any harm. ” (Al-Nisa4:4) The mahr can be of any amount, Prophet Muhammadﷺ said, “Look for one even if it was an iron ring.” (Bukhari and Muslim)
                            The woman is not obliged to give the man anything at the time of the wedding, as is done in some cultures.
                            Acts to be Avoided
                            We should be careful to not act as the disbelievers do regarding their mixing of men and women, wearing tuxedos and white wedding gowns, exchanging rings, kissing in public, etc. Prophet Muhammadﷺ said, “Whoever resembles a people is one of them.” (Abu Dawood)
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection