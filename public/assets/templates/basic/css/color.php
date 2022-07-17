<?php
header("Content-Type:text/css");
$color = "#f0f"; // Change your Color Here
$secondColor = "#ff8"; // Change your Color Here

function checkhexcolor($color){
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if (isset($_GET['color']) AND $_GET['color'] != '') {
    $color = "#" . $_GET['color'];
}

if (!$color OR !checkhexcolor($color)) {
    $color = "#336699";
}


function checkhexcolor2($secondColor){
    return preg_match('/^#[a-f0-9]{6}$/i', $secondColor);
}

if (isset($_GET['secondColor']) AND $_GET['secondColor'] != '') {
    $secondColor = "#" . $_GET['secondColor'];
}

if (!$secondColor OR !checkhexcolor2($secondColor)) {
    $secondColor = "#336699";
}
?>

.text--base, .mega-menu-icon .mega-icon, .change-language span, .auction__item-thumb .total-bids i, .client__item::after, .footer-wrapper .footer-widget .links li a::before, .footer-wrapper .footer-widget .links li a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .nav--tabs li a.active, .product__single-item .meta-post .meta-item .social-share li a:hover, .filter-widget .title i, .price-range label, .vendor__item .read-more, .vendor__item .vendor__info li i, .author-icon, .contact-icon, .contact-area .contact-content .contact-content-botom .subtitle, .contact-area .contact-content .contact-content-botom .contact-info li .cont a, .contact-area .contact-content .contact-content-botom .contact-info li .icon, .side__menu-title, .counter-item .counter-header .title, .faq__item.open .faq__title .title, p a, .cookies-card__icon, .price-range input, .footer-contact li i, .recent-blog .blog__content .date, .blog-details-header .meta-1 li i, .section__header.icon__contain .section__title .icon{
    color: <?php echo $color; ?> !important;
}

.cmn--btn, .btn--base, .badge--base, .bg--base, .scrollToTop, .footer-wrapper .footer-widget .title::after, .about-seller::after, .filter-widget .sub-title::after, .form--check .form-check-input:checked, .pagination .page-item.active span, .pagination .page-item.active a, .pagination .page-item:hover span, .pagination .page-item:hover a, .ticket__wrapper-title::after, .video__btn, .video__btn::before, .video__btn::after, .about--list li::before, .faq__item.open .faq__title .right--icon::before, .account__section-wrapper .account__section-content .section__header .section__title::after, .filter-btn, .filter-widget .ui-slider-range,.cmn--btn.active:hover, .read-more:hover::before, .dashboard__item .dashboard__icon{
    background-color: <?php echo $color; ?> !important;
}

.nav--tabs li a.active, .sidebar-countdown li, .form--check .form-check-input:checked, .side__menu li a.active, .side__menu li a:hover, .cmn--btn.active, .account__section-content .form-control:focus {
    border-color: <?php echo $color; ?> !important;
}

.client__item .client__content{
    border: 1px dashed <?php echo $color; ?>33;
}
.owl-dots .owl-dot{
    background: <?php echo $color; ?>66;
}
.section__header .progress--bar{
    background: <?php echo $color; ?>4d;
}

*::selection {
    background-color: <?php echo $color; ?>;
}


.how__item-icon {
    animation: pulseCustom 1.5s linear infinite;
    border: 1px dashed <?php echo $color; ?>4d;
}


@keyframes pulseCustom {
    50% {
        box-shadow: 0 0 5px rgba(19, 81, 04, 0.2), 0 0 10px rgba(93, 81, 04, 0.4), 0 0 15px rgba(3, 81, 24, 0.6), 0 0 20px <?php echo $color; ?>;
    }
}

.how__item::before {
    border-top: 2px dashed <?php echo $color; ?>4d;
}

.faq__item {
    border: 1px dashed <?php echo $color; ?>59;
}

.form--control-2:focus{
    border: 1px solid <?php echo $color; ?>66;
}

.auction__item {
    box-shadow: 0 0 5px <?php echo $color; ?>b3;
}
.auction__item:hover {
    box-shadow: 0 0 10px <?php echo $color; ?>e6;
}

.feature__item {
    border: 1px dashed <?php echo $color; ?>4d;
    box-shadow: 5px 5px 130px <?php echo $color; ?>4d;
}

.category__item {
    box-shadow: 0 0 15px <?php echo $color; ?>4d;
}

.counter-item {
    border: 1px dashed <?php echo $color; ?>33;
}

.vendor__item {
    box-shadow: 0 0 5px <?php echo $color; ?>66;
}

.vendor__item .vendor__bottom .vendor-author {
    box-shadow: 0 0 6px <?php echo $color; ?>e6;
}

.hero-section{
    border-bottom: 1px dashed <?php echo $color; ?>1a;
}

.contact-area .contact-wrapper{
    border: 1px dashed <?php echo $color; ?>4d; 
}

@media (max-width: 991px){
    .menu-area .menu li:hover, .menu-area .menu li.open{
        background-color: <?php echo $color; ?>;
    }
}

.dashboard__item{
    box-shadow: 0 0 10px <?php echo $color; ?>1a;
    border: 1px dashed <?php echo $color; ?>4d;
}

.spinner {
    border-top: 4px solid <?php echo $color; ?>;
}