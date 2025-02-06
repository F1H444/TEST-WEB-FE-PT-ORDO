<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST WEB FE ORDO</title>

    <!--icon website-->
    <link rel="icon" href="{{ asset('images/logo2.png') }}">

    <!--font start-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--font end-->
    @vite(['resources/css/app.css', 'resources/scss/global.scss', 'resources/scss/nav.scss', 'resources/scss/header.scss', 'resources/scss/perusahaan.scss', 'resources/scss/about.scss', 'resources/scss/event.scss', 'resources/scss/sponsors.scss', 'resources/scss/support.scss', 'resources/js/app.js'])

</head>

<body>
    <!--navigasi start-->
    <nav>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="165px" height="50px">
        </div>
        <div class="navbar">
            <a href="about">About Green Haven</a>
            <a href="details">Event Details</a>
            <a href="sponsors">Our Sponsors</a>
            <a href="leaderboard">Leaderboard</a>
        </div>
        <div class="extra">
            <button id="plant">Plant a Mangrove</button>
        </div>
    </nav>

    <!--navigasi start-->

    <!--header start-->
    <header>
        <div class="left-column-2">
            <div class="left-column">
                <button class="gh-project">Green Haven Project - Mangrove</button>
                <h1 class="heading-text">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
                <div class="mega-card">

                    <div class="card">
                        <div class="logo-card">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo" width="40px">
                        </div>
                        <div class="pohon">
                            <h1 class="total">5,690<span class="small-pohon">/ 10,000 Pohon</span></h1>
                        </div>
                        <div class="support">
                            <button class="button-support">Support Our Mission</button>
                            <img src="{{ asset('images/arrow-right.png') }}" alt="arrow" width="18px"
                                class="arrow-header">
                        </div>

                    </div>
                    <div class="persentase-bar">
                        <div class="progress"></div>
                    </div>
                </div>
            </div>
            <div class="mangrove">
                <img src="{{ asset('images/mangrove.png') }}" alt="mangrove" width="720px" class="mangrove-img">
            </div>
        </div>



        <div class="right-column">
            <div class="style-column">

                <h1 class="leaderboard">
                    Leaderboard
                </h1>
                <p class="donation">Most Donation</p>
                <p class="recent">Most Recent</p>
                <br>
                <br>
                <div class="data">
                    <div class="nomor unik">
                        <p>01</p>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('images/img-sumbang.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="detail">
                        <p class="detail-1">Mangrove Maven</p>
                        <p class="detail-2">Budi Hartanto</p>
                    </div>
                    <div class="pohon-detail">

                        <div class="logo-icon">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="total-pohon">
                            <h1>350 <span class="pohon-small">Pohon</span></h1>
                        </div>
                    </div>

                </div>
                <div class="data">
                    <div class="nomor">
                        <p>02</p>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('images/img-sumbang.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="detail">
                        <p class="detail-1">Mangrove Maven</p>
                        <p class="detail-2">Dewi Sartika</p>
                    </div>
                    <div class="pohon-detail">

                        <div class="logo-icon">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="total-pohon">
                            <h1>330 <span class="pohon-small">Pohon</span></h1>
                        </div>
                    </div>

                </div>
                <div class="data">
                    <div class="nomor">
                        <p>03</p>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('images/img-sumbang.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="detail">
                        <p class="detail-1">Mangrove Maven</p>
                        <p class="detail-2">Eko Wahyudi</p>
                    </div>
                    <div class="pohon-detail">

                        <div class="logo-icon">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="total-pohon">
                            <h1>200 <span class="pohon-small">Pohon</span></h1>
                        </div>
                    </div>

                </div>
                <div class="data">
                    <div class="nomor empat">
                        <p>04</p>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('images/logo7.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="detail">
                        <p class="detail-1">Guardian of the Grove</p>
                        <p class="detail-2">Rina Kartika</p>
                    </div>
                    <div class="pohon-detail">

                        <div class="logo-icon">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="total-pohon">
                            <h1>190 <span class="pohon-small">Pohon</span></h1>
                        </div>
                    </div>

                </div>
                <div class="data">
                    <div class="nomor lima">
                        <p>05</p>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('images/logo7.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="detail">
                        <p class="detail-1">Guardian of the Grove</p>
                        <p class="detail-2">Agus Prasetyo</p>
                    </div>
                    <div class="pohon-detail">

                        <div class="logo-icon">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="total-pohon">
                            <h1>140 <span class="pohon-small">Pohon</span></h1>
                        </div>
                    </div>

                </div>
                <div class="data">
                    <div class="nomor enam">
                        <p>06</p>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('images/logo6.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="detail">
                        <p class="detail-1">Mangrove Master</p>
                        <p class="detail-2">Irfan Setiawan</p>
                    </div>
                    <div class="pohon-detail">

                        <div class="logo-icon">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="total-pohon">
                            <h1>80 <span class="pohon-small">Pohon</span></h1>
                        </div>
                    </div>

                </div>


            </div>
    </header>
    <!--header end-->

    <!--perusahaan start-->
    <div class="perusahaan">
        <img src="{{ asset('images/jala.png') }}" alt="jala" class="img-perusahaan">
        <img src="{{ asset('images/efishery.png') }}" alt="efishery" class="img-perusahaan">
        <img src="{{ asset('images/azarine.png') }}" alt="azarine" class="img-perusahaan">
        <img src="{{ asset('images/kompas.png') }}" alt="kompas" class="img-perusahaan">
        <img src="{{ asset('images/tribun.png') }}" alt="tribunnews" class="img-perusahaan">
        <img src="{{ asset('images/jawapos.png') }}" alt="jawapos" class="img-perusahaan">
    </div>
    <br>
    <br>
    <!--perusahaan end-->

    <!--about start-->
    <div class="about">
        <div class="image-about">
            <img src="{{ asset('images/jci.png') }}" alt="jci" width="120px">
            <img src="{{ asset('images/ghp.png') }}" alt="ghp" width="120px">
        </div>
        <div class="about-heading">
            About Green Haven Project
        </div>
        <div class="detail-about">
            <p class="text-detail">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise
                awareness by planting mangroves and educating participants about the importance of these areas. This
                six-hour event will involve JCI members, local farmers, and students, focusing on combating beach
                erosion and promoting ESG values.</p>
        </div>
        <br>
        <br>

        <div class="before-after">
            <div class="before">
                <div class="before-text">
                    <img src="{{ asset('images/before.png') }}" alt="before-img" width="500px">
                    <br>
                    <p>Before mangroves were planted</p>
                </div>
            </div>
            <div class="after">
                <div class="after-text">
                    <img src="{{ asset('images/after.png') }}" alt="after-img" width="500px">
                    <br>
                    <p>After mangroves were planted</p>
                </div>
            </div>
            <div class="transformation">
                <img src="{{ asset('images/arrow.png') }}" alt="arrow">
                <p class="transformation-text">TRANSFORMATION</p>
            </div>
        </div>
    </div>
    <!--about end-->

    <!--summary start-->
    <div class="event-summary">

        <div class="event">
            <div class="event-heading">
                Event Summary
            </div>
            <div class="event-text">
                <p>We give you a brief overview of the event to give you a glimpse of what we're doing </p>
                <p>in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
            </div>
            <br>
            <br>
        </div>
        <div class="card-event">
            <div class="left-event">
                <div class="jadwal">
                    <h1 class="tanggal">26/04/2024</h1>
                    <h1 class="jam">08:00 - 11:00 WIB</h1>
                </div>
                <p class="detail-event">Join the impactful journey of planting mangroves,
                    where you'll learn, collaborate with locals, earn recognition,
                    and share your story through media coverage</p>
                <br>
                <div class="view-detail-btn">
                    <img src="{{ asset('icon1.png') }}" alt="icon-btn">
                    <p class="btn-txt">View Event Details</p>
                </div>
            </div>
            <div class="right-event">
                <div class="image-container">
                    <img src="{{ asset('images/img-event.png') }}" alt="img-event">
                    <div class="arrow">
                        <p class="arrow-left">
                            <img src="{{ asset('images/arrow-left.png') }}" alt="arrow-left">
                        </p>
                        <p class="arrow-right"><img src="{{ asset('images/arrow-right.png') }}" alt="arrow-right"
                                width="27px"></p>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="mega-step">

            <div class="step">
                <div class="line"></div>
                <p class="step-nomor">01</p>
                <p class="step-detail">Introducing the beauty <br> of mangroves on a journey to the planting site.</p>
            </div>
            <div class="step">
                <div class="line gray"></div>
                <p class="step-nomor">02</p>
                <p class="step-detail">Working together with <br>local farmers while <br> planting each mangrove</p>
            </div>
            <div class="step">
                <div class="line gray"></div>
                <p class="step-nomor">03</p>
                <p class="step-detail">Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
            </div>
            <div class="step">
                <div class="line gray"></div>
                <p class="step-nomor">04</p>
                <p class="step-detail">Receive a plaque & badge, a mark of honor for every tree you plant.</p>
            </div>
            <div class="step">
                <div class="line gray"></div>
                <p class="step-nomor">05</p>
                <p class="step-detail">Coverage & documentation by news media, share your story of change!</p>
            </div>
        </div>
    </div>
    <!--summary end-->

    <!--sponsors start-->
    <div class="sponsors">

        <div class="sponsors-heading">
            Sponsorship Packages
        </div>
        <div class="sponsors-text">
            <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal
                for enhancing company presence and community engagement.</p>
        </div>
        <br>
        <br>
        <div class="personal-sponsorship">
            <p>Personal Sponsorship Package</p>
        </div>
        <br>
        <div class="table1">
            <table class="table-sponsor">

                <tr>
                    <th class="membership">Membership Tier</th>
                    <th>Min. Seeds</th>
                    <th>Min. Buy</th>
                    <th>Benefits</th>
                    <th>Donors</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td class="column-table">
                        <img src="{{ asset('images/logo3.png') }}" alt="icon" width="27px">
                        <p class="member">Seedling Scout</p>
                    </td>
                    <td>
                        5 Seeds
                    </td>
                    <td>
                        IDR 75K
                    </td>
                    <td>
                        Badge
                    </td>
                    <td>
                        4,900 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="column-table">
                        <img src="{{ asset('images/logo4.png') }}" alt="icon" width="27px">
                        <p class="member">Sapling Savior</p>
                    </td>
                    <td>
                        10 Seeds
                    </td>
                    <td>
                        IDR 150K
                    </td>
                    <td>
                        Badge + Pin
                    </td>
                    <td>
                        4,300 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="column-table">
                        <img src="{{ asset('images/logo5.png') }}" alt="icon" width="27px">
                        <p class="member">Tree Titan</p>
                    </td>
                    <td>
                        20 Seeds
                    </td>
                    <td>
                        IDR 300K
                    </td>
                    <td>
                        Badge + Pin
                    </td>
                    <td>
                        15,000 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="column-table">
                        <img src="{{ asset('images/logo6.png') }}" alt="icon" width="27px">
                        <p class="member">Mangrove Master</p>
                    </td>
                    <td>
                        50 Seeds
                    </td>
                    <td>
                        IDR 750K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        5,000 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="column-table">
                        <img src="{{ asset('images/logo7.png') }}" alt="icon" width="27px">
                        <p class="member">Guardian of the Grove</p>
                    </td>
                    <td>
                        100 Seeds
                    </td>
                    <td>
                        IDR 1,500K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        300 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <div>
                    <tr>
                        <td class="column-table">
                            <img src="{{ asset('images/logo8.png') }}" alt="icon" width="27px">
                            <p class="member">Mangrove Maven</p>
                        </td>
                        <td>
                            200 Seeds
                        </td>
                        <td>
                            IDR 3,000K
                        </td>
                        <td>
                            Badge + Pin + Bag
                        </td>
                        <td>
                            10 Donors
                        </td>
                        <td>
                            <button class="btn-action">Support Our Mission <img
                                    src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                        </td>
                    </tr>
                </div>
        </div>
        </table>
    </div>
    <br>
    <br>
    <div class="garis"></div>
    <br>
    <br>

    <div class="corporate">
        <div class="corporate-sponsorship">
            <p>Corporate Sponsorship Package</p>
        </div>
    </div>
    <br>
    <div class="table2">
        <table class="table-sponsor2">
            <tr>
                <th>Benefits</th>
                <th>Eco Trailblazers</th>
                <th>Green Innovators</th>
                <th>Eco Vanguard</th>
            </tr>
            <tr>
                <td class="column-table">
                    <p class="benefits">Price</p>
                </td>
                <td>
                    15 Million IDR
                </td>
                <td>
                    30 Million IDR
                </td>
                <td>
                    45 Million IDR
                </td>
            </tr>
            <tr>
                <td class="column-table">
                    <p class="benefits">CO2 Sequestration</p>
                </td>
                <td>
                    22,5 ton/year
                </td>
                <td>
                    45 ton/year
                </td>
                <td>
                    67,5 ton/year
                </td>
            </tr>
            <tr>
                <td class="column-table">
                    <p class="benefits">Number of Tress</p>
                </td>
                <td>
                    1000 Trees
                </td>
                <td>
                    2000 Trees
                </td>
                <td>
                    3000 Trees
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Logo on JCI Banner</p>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Logo on Communal Stainless Plate</p>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Considered as Main Sponsor</p>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Dedicated Stainless Plate</p>
                </td>
                <td></td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Report Update on Planted Trees</p>
                </td>
                <td></td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Logo on Event Clothings</p>
                </td>
                <td>
                </td>
                <td></td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr class="donation">
                <td>
                    <p class="benefits">Make a Donation</p>
                </td>
                <td>
                    <button class="btn-support">Support Our Mission <img src="{{ asset('images/arrow-blue.png') }}"
                            alt="arrow"></button>
                </td>
                <td><button class="btn-support">Support Our Mission <img src="{{ asset('images/arrow-blue.png') }}"
                            alt="arrow"></button></td>
                <td>
                    <button class="btn-support">Support Our Mission <img src="{{ asset('images/arrow-blue.png') }}"
                            alt="arrow"></button>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <!--sponsors end-->

    <!--support start-->
    <div class="donate">
        <div class="donate-heading">
            Donate Today and be a <br>
            Guardian of the Green Belt.
        </div>
        <div class="donate-text">
            <p>Join us in our mission to rejuvenate and protect our shorelines
                by donating to our mangrove planting project. </p>
        </div>
        <br>
        <button class="support-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}"
                alt=""></button>
        <div class="image-support">
            <img src="{{ asset('images/sup1.png') }}" alt="sup-img" width="240px" height="425px" class="img1">
            <img src="{{ asset('images/sup2.png') }}" alt="sup-img" width="240px" height="281px" class="img2">
            <img src="{{ asset('images/sup3.png') }}" alt="sup-img" width="240px" height="161px" class="img3">
            <img src="{{ asset('images/sup4.png') }}" alt="sup-img" width="240px" height="281px" class="img4">
            <img src="{{ asset('images/sup5.png') }}" alt="sup-img" width="240px" height="425px" class="img5">
        </div>
    </div>
    <br>
    <br>
    <!--support end-->
    <!--yang mengerjakan : -->
    <p class="nama">Nama yang Mengerjakan Test : Fiha Aridhoi</p>
</body>

</html>
