<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wesclic</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('doc/fontawesome/js/all.min.js') }}"></script>


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('doc/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('doc/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('doc/css/home.css') }}" />
    <link id="theme-style" rel="stylesheet" href="{{ asset('doc/css/theme.css') }}">

</head>

<body class="docs-page">
    <header class="header fixed-top ">
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper ">
                    <div class="site-logo">
                        <a class="navbar-brand" href="../application/home.php"><span class="logo-text">Wesclic | API
                            </span></a>
                    </div>
                </div>
                <!--//docs-logo-wrapper-->
            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->


    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar">
            <nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span
                                class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>NewsTy API</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Aturan API KEY</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Daftar Kategori</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span
                                class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>Database
                            Dokumentasi</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Desain Database</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">User</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">Barang</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span
                                class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>Dokumentasi API</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-1">User Register</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">User Login</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-3">Creat Data Barang</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-4">Read Data Barang</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-5">Update Data Barang</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-6">Delete Data Barang</a></li>
                </ul>

            </nav>
            <!--//docs-nav-->
        </div>
        <!--//docs-sidebar-->
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <section class="docs-intro">
                            <p>API CRUD Laravel tentang Management Barang yang dimana dapat di iplementasikan di website
                                mana saja seesuai dengan kebutuhna pengguna</p>
                        </section>
                        <!--//docs-intro-->

                        <section class="docs-section" id="item-1-1">
                            <h2 class="section-heading">Aturan Penggunaan API </h2>
                            <p>Dalam rangka mempermudah User menggunakan API CRUD, kami menyusun petunjuk penggunaan API
                                yang harus diikuti: </p>
                            <ul>
                                <li class="me-1">API harus digunakan dengan bijak sehingga tidak merugikan pihak
                                    Developer dan pihak lain manapun</li>
                                <li class="me-1">Dilarang menggunakan sesuatu yang dapat merugikan pihak Developer
                                    seperti script otomatis yang melakukan request ke Developer tanpa action user</li>
                                <li class="me-1">Segala Bentuk Request harus dilakukan secara langsung untuk
                                    mendapatkan hasil yang akurat</li>
                            </ul>
                        </section>

                        <section class="docs-section" id="item-1-2">
                            <h2 class="section-heading">Daftar Kategori </h2>
                            <p>Berikut Kategori yang dapat digunakan dalam pencarian berdasarkan kategori sebagai
                                berikut : </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Register User</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Login User</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Create Data Barang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Read Data Barang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Update Data Barang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Delete Data Barang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>



                    </header>

                </article>

                <article class="docs-article" id="section-2">
                    <header class="docs-header">
                        <h2 class="docs-heading">Welcome Developer</h2>
                        <section class="docs-intro">
                            <p>Gunakan API Key ini untuk menggunakan API . Untuk informasi lebih lanjut mengenai cara
                                menggunakan API , silakan baca dokumentasi.</p>
                        </section>
                        <!--//docs-intro-->
						
                    </header>
                </article>
                <!--//docs-article-->

				<article class="docs-article" id="section-90">
					<header class="docs-header">
                        <h2 class="docs-heading">Dokumentasi Database </h2>
                        <section class="docs-intro">
                            <p>Dokumentasi ini menjelaskan cara mengakses layanan API . Untuk akses API dapat dilakukan
                                dengan cara seperti yang ada pada dokumentas. harap baca dan patuhi aturan dari
                                Developer </p>
                        </section>

						<h4 id="item-2-1">Desain Database</h4>
						<img src="{{ asset('images/Desain DB.png') }}" alt="" style="width: 800px">

						<h4 id="item-2-2" class="mt-5">User Table</h4>
						<img src="{{ asset('images/usertable.png') }}" alt="">

						<h4 id="item-2-3" class="mt-5">Barang Table</h4>
						<img src="{{ asset('images/barangtable.png') }}" alt="">
				</article>

                <article class="docs-article" id="section-8">
                    <header class="docs-header">
                        <h1 class="docs-heading">Dokumentasi API </h1>
                        <section class="docs-intro">
                            <p>Dokumentasi ini menjelaskan cara mengakses layanan API . Untuk akses API dapat dilakukan
                                dengan cara seperti yang ada pada dokumentas. harap baca dan patuhi aturan dari
                                Developer </p>
                        </section>



                        <h4 id="item-9-1">Register User</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>POST</td>
                                                <td>http://127.0.0.1:8000/api/register</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/2b7ba0bdaef94e9db0c5641fb380e148.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                        <h4 id="item-9-2">Login User</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>POST</td>
                                                <td>http://127.0.0.1:8000/api/login</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/1260bcca25d7ad4e014d688a05ef27bc.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                        <h4 id="item-9-3">Create Data Barang</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>POST</td>
                                                <td>http://127.0.0.1:8000/api/addbarang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/9abe9dc29173f8556ae38159ee84884a.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                        <h4 id="item-9-4">Read All Data Barang</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>GET</td>
                                                <td>http://127.0.0.1:8000/api/getalldata</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/e656961cf94ac81bdd808b96bd46244a.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                        <h4 id="item-9-5">Read One Data Barang</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>GET</td>
                                                <td>http://127.0.0.1:8000/api/onedata/1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/a2c4305efbfa5f57c7c552a169e64f63.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                        <h4 id="item-9-6">Update Data Barang</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>POST</td>
                                                <td>http://127.0.0.1:8000/api/updatebarang/5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/841e65bc3b82c81c66254a333ab27613.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                        <h4 id="item-9-7">Delete Data Barang</h4>
                        <div class="about-five-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-url" type="button" role="tab"
                                        aria-controls="nav-url" aria-selected="true">URL</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-url" role="tabpanel"
                                    aria-labelledby="nav-who-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Method</th>
                                                <th scope="col">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>POST</td>
                                                <td>http://127.0.0.1:8000/api/deletebarang/5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <h5>Response</h5>

                        <div class="docs-code-block">
                            <!-- ** Embed github code starts ** -->
                            <script src="https://gist.github.com/MuhRezaAldiIrawan/1eb2395b8af173f81f75e9ccd72d579a.js"></script>
                            <!-- ** Embed github code ends ** -->
                        </div>
                        <!--//docs-code-block-->

                </article >
			</div>


                </header>

            </div>
        </div>
    </div>
    <!--//docs-wrapper-->


    <!-- Page Specific JS -->
    <script src="{{ asset('doc/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('doc/js/main.js') }}"></script>
    <script src="{{ asset('doc/js/highlight-custom.js') }}"></script>
    <script src="{{ asset('doc/js/docs.js') }}"></script>

</body>

</html>
