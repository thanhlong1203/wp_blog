<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kato
 */
?>
<footer
    class="bg-[url(https://demo2.wpopal.com/rehomes/wp-content/uploads/2019/10/footer_bkg_1.jpg)]  bg-no-repeat bg-cover bg-center text-white">
    <section class="max-w-[1320px] m-auto border-b xl:w-full w-[95%]">
        <div class="py-[100px]">
            <h2 class="mb-[70px] text-[24px] lg:text-[40px] font-semibold border-slate-50 font"><?php _e('Liên hệ' , 'kato') ?></h2>
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-5">
                <div class="lg:w-3/4">
                    <h5 class="text-[14px] uppercase">Hotline</h5>
                    <br/>
                    <h3 class="text-[24px] mb-[25px] font footer-title"><?php dynamic_sidebar('hotline') ?></h3>
                    
                </div>
                <div class="lg:w-3/4">
                    <h5 class="text-[14px] uppercase">Email</h5>
                    <br/>
                    <h3 class="text-[20px]   font footer-title">vntholding@vntinvestgroup.com</h3>
                    <h3 class="text-[20px] mb-[25px] font footer-title"><?php dynamic_sidebar('email') ?></h3>

                    
                    <ul class="grid grid-cols-5">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="">
                    <h5 class="text-[14px] uppercase"><?php _e('Ngôn ngữ' , 'kato') ?></h5>
                    <br/>
                    <?php dynamic_sidebar('show-menu-language')?>
                </div>
                <div class="">
                    <h5 class="text-[14px] uppercase"><?php _e('Download Brochure:' , 'kato') ?></h5>
                    <br/>
                    <div class="w-1/2">
                        <?php dynamic_sidebar('contact-image')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<div class="bg-[#173E62] text-white">
    <section class="max-w-[1320px] m-auto grid grid-cols-1 xl:w-full w-[95%] gap-8 py-[100px] md:grid-cols-2 lg:grid-cols-3">
        <div class="text-[#b0b9c1]">
            <h3 class="font-semibold text-white mb-4 font"><?php _e('VỀ CHÚNG TÔI' , 'kato') ?></h3>
            <p class="text-[#b0b9c1]"><?php dynamic_sidebar('Footer one') ?></p>
            <br/>
            <p class="flex items-center"><?php dynamic_sidebar('place-footer') ?></p>
        </div>
        <div >
            <h3 class="font-semibold mb-4 font "><?php _e('THÔNG TIN' , 'kato') ?></h3>
            <ul class="text-[#b0b9c1] leading-[30px]">
                <?php dynamic_sidebar('Footer two') ?>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-4 font"><?php _e('LIÊN HỆ', 'kato') ?></h3>
            <p class="text-[#b0b9c1]"><?php _e('Nhận tin tức và cập nhật mới nhất' , 'kato') ?></p>
            <input class="w-full mt-3 p-3 rounded-sm" type="text" placeholder="Nhập Email" />
            <div class="mt-4"><button
                    class="w-full py-4 bg-[#bda588] rounded-sm hover:bg-[#AC8D68] transition-[0.5s]"><?php _e('Gửi
                    Email' , 'kato') ?></button></div>
        </div>
    </section>
    <section class="max-w-[1320px] m-auto flex items-center flex-wrap justify-between pb-[70px] xl:w-full w-[95%]">
        <div>© 2023 – VNT INVEST GRROUP. All rights reserved.</div>
    </section>
</div>

<script>
    // search-box open close js code
    let navbar = document.querySelector(".navbar");
    let searchBox = document.querySelector(".search-box .fa-search");
    // let searchBoxCancel = document.querySelector(".search-box .fa-times");
    searchBox.addEventListener("click", () => {
        navbar.classList.toggle("showInput");
        if (navbar.classList.contains("showInput")) {
            searchBox.classList.replace("fa-search", "fa-times");
        } else {
            searchBox.classList.replace("fa-times", "fa-search");
        }
    });
    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .fa-bars");
    let menuCloseBtn = document.querySelector(".nav-links .fa-times");
    let sub = document.querySelector(".sub-menu")
    menuOpenBtn.onclick = function () {
        navLinks.style.left = "0";
    }
    menuCloseBtn.onclick = function () {
        navLinks.style.left = "-100%";
    }
    let htmlcssArrow = document.querySelector(".menu-item-has-children");
    htmlcssArrow.onclick = function() {
        sub.classList.toggle("show1");
    }
</script>
<script> new WOW().init(); </script>
<script>
    $(window).on('load', function() {
    var pre_loader = $('#preloader');
    setTimeout(function() {
    $('#preloader').fadeOut('slow');
    }, 2500); 

    }); 
</script>
</body>
</html>