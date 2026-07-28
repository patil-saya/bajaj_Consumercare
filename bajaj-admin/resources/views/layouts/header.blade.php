<!-- Header -->
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light headerHeight">
    <div class="container d-flex align-items-right">
        <a class="navbar-brand h1" href="{{ url('/home') }}">
            <img class="imgLogo" src="public/images/logo.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span id="menuToggle" class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-right collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
            <div class="mx-xl-5 mb-2 d-flex" > 
                
            </div>
            <div id="headerMenu" class="navbar align-self-right d-flex" style="margin-right:-2%;">
                <ul class="nav navbar-n0av navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li id="logoutBarNone" class="nav-item">
                        <div class="logoutBar"></div>
                    </li>
                    <?php $username = Session::get('user_name'); ?>
                    <li class="nav-item">
                        <a class="nav-link"><span class="cancel"><?php echo isset($username) ? $username : "Devgan Ingle";?></span><!--<i class='bx bx-user-circle bx-sm text-primary'></i>--></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="{{ url('/logout') }}"><img class="imgLogout" src="public/images/logout.png"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <hr class="mt-0"> 
    </div>
    <!-- Close Header -->

    <script>
    $(document).ready(function() {
        $("[href]").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("activeNavName");
                }
            });

            $("#menuToggle").click(function() {
                //alert('clicked');
            $(this).toggleClass("open"), $("#headerMenu ul").toggleClass("visible");

            if($(window).width() <= 992){
                $("#headerMenu ul a").addClass("nav-link");
                $("#logoutBarNone").hide();
            }
        });
    });    
    </script>    
