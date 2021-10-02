<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>company profile osis smk mahaputra</title>
<!--==========================Essential Style =====================================-->
    @include("components.link.style")

</head>

<body>

    <!-- Header Start --> 
    @include("components.navbar")
    <!-- Header Close --> 

    <div class="main-wrapper ">
        <!-- Content Start --> 
        @yield("content")
        <!-- Content Close --> 

        <!-- footer Start -->
        {{-- @include("components.footer") --}}
        <!-- footer Close -->
    </div>

    <!--==========================Essential Scripts =====================================-->
    @include("components.link.script")

</body>
</html>