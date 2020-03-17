/**
 * Created by Programmer on 06.02.2017.
 */

 
 $(document).ready(function() {
     var phoneStr = $('.phone_alloka').data('phone') || $('.phone_alloka').text();
     var link = $('.phone_alloka').closest('a.phone');
     phoneStr = decodeURI(phoneStr).replace(/\s/g, "");
     if(link) {
         link.attr('href', phoneStr);
     }
     
 });

 $(document).ready(function() {
     $('#catalog-mobile .product .product-img').on('click', function(e) {
         e.preventDefault();
         $(this).closest('.product').find('.desc').toggleClass('visible');
     });
     $('#catalog-mobile .product .desc').on('click', function() {
         $(this).removeClass('visible');
     });
     $('#gost .mobile-content .mobile-img').on('click', function(e) {
         e.preventDefault();
         $(this).closest('.mobile-content').find('.desc').toggleClass('visible');
     });
     $('#gost .mobile-content .desc').on('click', function() {
         $(this).removeClass('visible');
     });
 });