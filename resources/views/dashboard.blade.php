<!DOCTYPE html>
<html class="no-js" lang="en">
@include('include.head')
<body>
    <!-- Modal -->
    <!-- Quick view -->
  
    @include('include.quickview')

    <!-- Header  -->
    @include('include.header')
    <!-- End Header  -->
    @include('include.mobile_headder')
    <!--End header-->
    <main class="main">
                    @include('include.slider')
                    <!--End hero slider-->
                    @include('include.heroslider')
                    <!--End category slider-->
                    @include('include.category_slider')
                    <!--End banners-->
                    @include('include.product_tab')
                    <!--Products Tabs-->
                    @include('include.bestsale')
                    <!--End Best Sales-->
                    <!-- TV Category -->
                    @include('include.tv')
                    <!--End TV Category -->
                    <!-- Tshirt Category -->
                    @include('include.t_shart')
                    <!--End Tshirt Category -->
                    <!-- Computer Category -->
                    @include('include.computer')
                    <!--End Computer Category -->
                    @include('include.computer_cat')
                    <!--End 4 columns-->
                    <!--Vendor List -->
                    @include('include.vendor_list')
                    <!--End Vendor List -->
    </main>
    <!-- End footer  -->
    @include('include.footer')
    <!--End footer-->
    <!-- Preloader Start -->
    @include('include.loading')
    <!-- Vendor JS-->
    @include('include.js')
</body>
</html>
