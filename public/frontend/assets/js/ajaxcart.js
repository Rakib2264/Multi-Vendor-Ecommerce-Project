jQuery(document).ready(function () {
    jQuery(document).on("click", "#cart_button", function () {
        var id = jQuery(this).val();

        jQuery.ajax({
            url:"/addtocart/"+id,
            type:"GET",
            success:function (res) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.onmouseenter = Swal.stopTimer;
                      toast.onmouseleave = Swal.resumeTimer;
                    }
                  });
                  Toast.fire({
                    icon: "success",
                    title: res.msg,
                  });
                show();
            }
        });
    });


    show();


    function show() {
        jQuery.ajax({
            url: "/addtocartshow",
            type: "GET",
            success: function (res) {
                let allData = "";
                let sum = 0 ;
                let count = 0 ;
                jQuery.each(res.data, function (key, val) {
                    sum += val.price
                    count ++ ;
                    allData += "<li>\
                    <div class='shopping-cart-img'>\
                        <a href='shop-product-right.html'><img alt='Nest'\
                            src='http://malti_vendor_ecom.test/uploads/product/" + val.image + "' /></a>\
                    </div>\
                    <div class='shopping-cart-title'>\
                        <h4><a href='shop-product-right.html'>" + val.product_name + "</a></h4>\
                        <h4><span>" + val.qty + " x</span> $ " + val.price + "</h4>\
                    </div>\
                    <div class='shopping-cart-delete'>\
                        <button value="+ val.id +" class='delete-item'><i class='fi-rs-cross-small'></i></button>\
                    </div>\
                    </li>";
                });

                jQuery(".cartinfo").html(allData);
                jQuery(".totalAmount").html(sum);
                jQuery(".totalcount").html(count);
            }
        });
    }
    jQuery(document).on("click", ".delete-item", function () {

        var itemId = jQuery(this).val();
         jQuery.ajax({
            url:"/addtocartdelete/"+itemId,
            type:"GET",
            success:function (res) {

                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.onmouseenter = Swal.stopTimer;
                      toast.onmouseleave = Swal.resumeTimer;
                    }
                  });
                  Toast.fire({
                    icon: "success",
                    title: res.msg,
                  });
             show()
            }
        });


    });

});

//new
// jQuery(document).ready(function () {



//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     // AJAX error handling
//     $(document).ajaxError(function(event, jqxhr, settings, thrownError) {
//         if (jqxhr.status == 401) {
//             // Redirect to the login page or show a login modal
//             window.location.href = '/login';
//         }
//     });

//     jQuery(document).on("click", "#cart_button", function () {
//         var id = jQuery(this).val();

//         jQuery.ajax({
//             url:"/addtocart/"+id,
//             type:"GET",
//             success:function (res) {
//                 const Toast = Swal.mixin({
//                     toast: true,
//                     position: "top-end",
//                     showConfirmButton: false,
//                     timer: 3000,
//                     timerProgressBar: true,
//                     didOpen: (toast) => {
//                       toast.onmouseenter = Swal.stopTimer;
//                       toast.onmouseleave = Swal.resumeTimer;
//                     }
//                   });
//                   Toast.fire({
//                     icon: "success",
//                     title: res.msg,
//                   });
//                 show();
//             }
//         });
//     });


//     show();


//     function show() {
//         jQuery.ajax({
//             url: "/addtocartshow",
//             type: "GET",
//             success: function (res) {
//                 let allData = "";
//                 let sum = 0 ;
//                 let count = 0 ;
//                 jQuery.each(res.data, function (key, val) {
//                     sum += val.price
//                     count ++ ;
//                     allData += "<li>\
//                     <div class='shopping-cart-img'>\
//                         <a href='shop-product-right.html'><img alt='Nest'\
//                             src='http://malti_vendor_ecom.test/uploads/product/" + val.image + "' /></a>\
//                     </div>\
//                     <div class='shopping-cart-title'>\
//                         <h4><a href='shop-product-right.html'>" + val.product_name + "</a></h4>\
//                         <h4><span>" + val.qty + " x</span> $ " + val.price + "</h4>\
//                     </div>\
//                     <div class='shopping-cart-delete'>\
//                         <button value="+ val.id +" class='delete-item'><i class='fi-rs-cross-small'></i></button>\
//                     </div>\
//                     </li>";
//                 });

//                 jQuery(".cartinfo").html(allData);
//                 jQuery(".totalAmount").html(sum);
//                 jQuery(".totalcount").html(count);
//             }
//         });
//     }
//     jQuery(document).on("click", ".delete-item", function () {

//         var itemId = jQuery(this).val();
//          jQuery.ajax({
//             url:"/addtocartdelete/"+itemId,
//             type:"GET",
//             success:function (res) {

//                 const Toast = Swal.mixin({
//                     toast: true,
//                     position: "top-end",
//                     showConfirmButton: false,
//                     timer: 3000,
//                     timerProgressBar: true,
//                     didOpen: (toast) => {
//                       toast.onmouseenter = Swal.stopTimer;
//                       toast.onmouseleave = Swal.resumeTimer;
//                     }
//                   });
//                   Toast.fire({
//                     icon: "success",
//                     title: res.msg,
//                   });
//              show()
//             }
//         });


//     });

// });
