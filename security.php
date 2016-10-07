<?php
session_start();
require ("config/database.php");
require ("config/connect.php");
include ("process/Select_Member.php");
if (!isset($_SESSION['login'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>ข้อมูลการจอง</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">
		<link rel="stylesheet" href="css/address.css">
		<link rel="stylesheet" href="css/phonenumber.css">
		<link rel="stylesheet" href="css/business_travel.css">
		<link rel="stylesheet" href="css/editprofile.css">

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body class="with-new-header ">
		<a class="screen-reader-only screen-reader-only-focusable skip-to-content" data-hook="skip-to-content" tabindex="1" href="#site-content"> ข้ามไปยังเนื้อหา </a>

		<span class="screen-reader-only"> Airbnb </span>

		<noscript>
			&lt;iframe src="https://www.googletagmanager.com/ns.html?id=GTM-46MK"
			height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
		</noscript>

		<div class="smart-banner" aria-hidden="true"></div>

		<div id="header" class="airbnb-header new  logged_in">
			<div class="header--sm show-sm" aria-hidden="true">
				<a href="#" aria-label="หน้าแรก" data-prevent-default="" class="link-reset burger--sm"> <i class="icon icon-reorder icon-rausch"></i> <span class="screen-reader-only"> Airbnb </span> </a>
				<div class="title--sm text-center">
					<button class="btn btn-block search-btn--sm search-modal-trigger " style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
						<i class="icon icon-search icon-gray"></i>
						<span class="search-placeholder--sm"> ไปที่ไหน </span>
					</button>
					<a href="/" class="header-belo hide"> <span class="screen-reader-only"> Airbnb </span> </a>
				</div>
				<div class="action--sm"></div>
				<nav class="nav--sm" role="navigation"></nav>
				<div class="search-modal-container"></div>
			</div>

			<header class="regular-header clearfix hide-sm" id="new-header" role="banner">

				<div class="comp pull-left">
					<a href="/" class="hdr-btn link-reset belo-container" aria-label="Airbnb"> <i class="icon icon-pos--lower  icon-airbnb-alt h2 show-login"></i> <i class="icon icon-pos--lower  icon-airbnb show-logout"></i> </a>
				</div>

				<div class="comp pull-right show-login">
					<a class="no-crawl hdr-btn link-reset header-avatar-trigger needsclick" rel="nofollow" href="/dashboard" data-href="/dashboard" data-href-host="/trips"> <span class="value_name margin-right--tiny hide-md">I'Art</span>
					<div class="media-photo media-round user-profile-image header-icon icon-profile-alt-gray"><img width="28" height="28" src="https://a2.muscache.com/im/pictures/aa1d894d-eff1-4c2f-854d-d198b7b5f544.jpg?aki_policy=profile_small" alt="">
					</div> </a>

					<div class="panel  drop-down-menu avatar-tooltip--new">
						<div class="panel-header no-border hide-lg">
							<strong><span class="value_name">I'Art</span></strong>
						</div>
						<a href="/trips" class="js-your-trips-item panel-body link-reset hover-item no-crawl hide">
						<div class="hover-item__content">
							การเดินทางของคุณ
						</div> </a>
						<a href="/city-hosts?source=hdr" class="hide city-host-button-md panel-body link-reset hover-item">
						<div class="hover-item__content">
							City Hosts
							<img class="beta-badge" src="https://a0.muscache.com/airbnb/static/magical_trips/guest/beta-badge-56a0d5bc185adfe79992a46991964070.png" alt="Beta" height="18">
						</div> </a><a href="/wishlists/my" class="js-wishlists-item panel-body link-reset hover-item no-crawl hide">
						<div class="hover-item__content">
							Wish List
						</div> </a>
						<a href="/users/edit" class=" panel-body link-reset hover-item no-crawl">
						<div class="hover-item__content">
							แก้ไขข้อมูลส่วนตัว
						</div> </a>
						<a href="/invite?r=3" class="travel-credit-item panel-body link-reset hover-item">
						<div class="hover-item__content">
							เชิญเพื่อน
						</div> </a><a href="/users/notifications" class=" panel-body link-reset hover-item no-crawl">
						<div class="hover-item__content">
							การตั้งค่าบัญชี
						</div> </a>
						<a href="/business-travel?s=nav" class="business-travel  panel-body link-reset hover-item">
						<div class="hover-item__content">
							การเดินทางเพื่อธุรกิจ
						</div> </a><a href="/things-to-do" class="js-guidebook-item panel-body link-reset hover-item">
						<div class="hover-item__content">
							คู่มือนำเที่ยวของฉัน
						</div> </a><a href="/logout" class=" panel-body link-reset hover-item no-crawl">
						<div class="hover-item__content">
							ออกจากระบบ
						</div> </a>
					</div>
				</div>

				<div class="comp pull-right show-logout">
					<a data-login-modal="" href="/login" data-redirect="redirect_params[action]=edit&amp;redirect_params[controller]=users" class="hdr-btn link-reset"> เข้าสู่ระบบ </a>
				</div>
				<div class="comp pull-right show-logout">
					<a data-signup-modal="" data-header-view="true" href="/signup_login" data-redirect="redirect_params[action]=edit&amp;redirect_params[controller]=users" class="hdr-btn link-reset"> ลงทะเบียน </a>
				</div>

				<div class="comp pull-right show-travel-credit js-travel-credit-menu-container hide">
					<a class="needsclick no-crawl hdr-btn link-reset js-travel-credit-comp" href="/invite?r=3" rel="nofollow" data-href="/invite?r=3">
					<div class="gift-icon-container text-center">
						<span class="margin-right--tiny hide-md">เครดิต</span>
						<i class="header-icon js-travel-credit-icon icon-gift-alt-gray"> <i class="alert-count js-travel-credit-unread-count text-center fade in">1</i> </i>
					</div> </a>

					<div class="panel  drop-down-menu travel-credit-dropdown"></div>
				</div>

				<div id="js-header-help-menu">
					<div class="comp pull-right no-border help-trigger-wrapper no-hover" data-reactid=".8">
						<a class="hdr-btn js-help-toggle link-reset needsclick" href="/help" data-reactid=".8.0"><span class="margin-right--tiny hide-md" data-reactid=".8.0.0">ความช่วยเหลือ</span><span data-reactid=".8.0.1">&nbsp;</span><i class="header-icon icon-lifesaver-alt-gray" data-reactid=".8.0.2"></i></a>
						<div class="field-guide panel help-side-panel" data-reactid=".8.1">
							<div data-reactid=".8.1.0">
								<div class="side-panel-header text-center" data-reactid=".8.1.0.0">
									<a href="/help" class="link-reset" data-reactid=".8.1.0.0.1"><span data-reactid=".8.1.0.0.1.0">ความช่วยเหลือของ Airbnb</span></a><a href="#" data-prevent-default="true" class="close-button pull-right link-reset" data-reactid=".8.1.0.0.2"><i class="icon icon-remove" data-reactid=".8.1.0.0.2.0"></i></a>
								</div>
								<div class="main-content" data-reactid=".8.1.0.1">
									<div class="text-left search-container" data-reactid=".8.1.0.1.0">
										<div class="search-input-container" data-reactid=".8.1.0.1.0.0">
											<div class="search-input-inner-container" data-reactid=".8.1.0.1.0.0.0">
												<div class="icon-search-container" data-reactid=".8.1.0.1.0.0.0.0">
													<i class="icon-gray icon icon-search dls-search-bar-icon icon-size-1" data-reactid=".8.1.0.1.0.0.0.0.0"></i>
												</div>
												<input class="search-input dls-search-input" type="text" name="q" autocomplete="off" maxlength="1024" value="" placeholder="ขอความช่วยเหลือหรือค้นหาโดยใช้คำสำคัญ" data-reactid=".8.1.0.1.0.0.0.1">
											</div>
										</div>
										<div class="search-results-container text-dark-gray" data-reactid=".8.1.0.1.0.1">
											<div style="margin-top:0;margin-bottom:0;margin-left:0;margin-right:0;display:;" data-reactid=".8.1.0.1.0.1.0">
												<div class="search-results loading" data-reactid=".8.1.0.1.0.1.0.0"></div>
											</div><div class="expandable-indicator" data-reactid=".8.1.0.1.0.1.2"></div>
										</div>
									</div>
								</div>
								<div class="help-link-bottom text-center" data-reactid=".8.1.0.2">
									<a href="/help" data-prevent-default="true" data-reactid=".8.1.0.2.1"><span data-reactid=".8.1.0.2.1.0">ไปที่ศูนย์ช่วยเหลือ</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="hide js-header-business-travel comp pull-right background-light-gray">
					<a class="hdr-btn link-reset needsclick" href="/business/dashboard?s=nav"> <span class="margin-right--tiny hide-md">ธุรกิจ</span> <i class="header-icon js-business-travel-icon icon-business-travel-gray"></i> </a>
				</div>

				<div class="comp pull-right show-login">
					<a class="needsclick no-crawl hdr-btn link-reset js-inbox-comp message-link" href="/inbox" data-href="/inbox" rel="nofollow">
					<div class="inbox-icon-container text-center">
						<span class="margin-right--tiny hide-md">ข้อความ</span>
						<i class="js-message-icon header-icon message-icon icon-message-alt-gray"> <i class="alert-count unread-count text-center fade in">1</i> </i>
					</div> </a>

					<div class="panel  drop-down-menu notifications-dropdown">
						<div class="loading" data-reactid=".1"></div>
					</div>
				</div>

				<div class="comp pull-right show-trips show-login js-trips-menu-container">
					<a class="needsclick no-crawl hdr-btn link-reset js-trips-comp trips-comp" href="/trips" rel="nofollow" data-href="/trips">
					<div class="inbox-icon-container text-center">
						<span class="margin-right--tiny hide-md">การเดินทาง</span>
						<i class="header-icon js-trips-icon icon-suitcase-gray"> <i class="alert-count js-trips-unread-count text-center fade">0</i> </i>
					</div> </a>

					<div class="panel  drop-down-menu trips-dropdown">
						<div class="loading" data-reactid=".2"></div>
					</div>
				</div>

				<div class="comp pull-right show-host">
					<a class="needsclick host-icon-wrapper no-crawl hdr-btn link-reset js-host-menu-icon" href="/dashboard" rel="nofollow" data-href="/dashboard"> <span class="hide-md margin-right--tiny"> เจ้าของที่พัก </span> <i class="header-icon host-icon icon-home-gray js-host-icon"> <i class="alert-count js-host-item-count listing-count text-center fade">0</i> </i> </a>

					<div class="panel  drop-down-menu host-tooltip--new">
						<div class="panel-header no-border hide-lg">
							<span><strong>เจ้าของที่พัก</strong></span>
						</div>
						<div class="hover-item panel-body relist-your-space hide">
							<a href="#" class="link-reset click-area">
							<div class="cta-container va-container va-container-v">
								<div class="va-middle">
									<div class="cta-text">
										ลงประกาศที่พักให้เสร็จ
									</div>
									<div class="cta-text-v3-reactivate hide">
										เปิดใช้งานบัญชีใหม่
									</div>
									<div class="progress">
										<div class="progress-bar"></div>
									</div>
								</div>
							</div> </a>
							<div class="close-button hide">
								<a href="#" class="alert-close"></a>
							</div>
						</div>

						<a href="/dashboard" class=" panel-body link-reset hover-item origin-item js-host-dashboard-link no-crawl">
						<div class="hover-item__content">
							แดชบอร์ด
							<i class="alert-count js-pending-request-count--inline text-center fade">0</i>
						</div> </a>
						<a href="/rooms" class=" panel-body link-reset hover-item origin-item js-host-calendar-link hide no-crawl">
						<div class="hover-item__content">
							ปฏิทิน

						</div> </a>
						<a href="/rooms" class=" panel-body link-reset hover-item origin-item js-host-manage-listings-link no-crawl">
						<div class="hover-item__content">
							จัดการที่พัก
							<i class="alert-count listing-count listing-count--inline text-center fade">0</i>
						</div> </a>
						<a href="/rooms/new" class=" panel-body link-reset hover-item origin-item js-host-list-your-space-link">
						<div class="hover-item__content">
							ลงประกาศที่พัก

						</div> </a><a href="/my_reservations" class=" panel-body link-reset hover-item origin-item js-host-my-reservations-link no-crawl">
						<div class="hover-item__content">
							การจองของคุณ

						</div> </a>
						<a href="/users/transaction_history" class=" panel-body link-reset hover-item origin-item js-host-transaction-history-link no-crawl">
						<div class="hover-item__content">
							ประวัติการทำธุรกรรม

						</div> </a>
						<a href="/refer?r=41" class=" panel-body link-reset hover-item origin-item hide item-refer-hosts js-host-refer-hosts-link no-crawl">
						<div class="hover-item__content">
							ชวนคนอื่นมาเป็นเจ้าของที่พัก
							<span class="label label-pink label-new">ใหม่</span>
						</div> </a>
						<a href="/users/reviews" class=" panel-body link-reset hover-item origin-item js-host-reviews-link no-crawl">
						<div class="hover-item__content">
							ความคิดเห็น

						</div> </a>
						<a href="/host-assist" class=" panel-body link-reset hover-item origin-item hide item-host-assist js-host-assist-link no-crawl">
						<div class="hover-item__content">
							เจ้าของที่พักช่วย

						</div> </a>
						<a href="/hospitality" class=" panel-body link-reset hover-item origin-item js-host-hospitality-link">
						<div class="hover-item__content">
							การต้อนรับ

						</div> </a>
					</div>
				</div>

				<div class="comp pull-right city-host-button hide">
					<a class="hdr-btn link-reset js-host-menu-icon city-host-icon-wrapper" href="/city-hosts?source=hdr">
					<div>
						<span>City Hosts</span>
						<img class="beta-badge" src="https://a0.muscache.com/airbnb/static/magical_trips/guest/beta-badge-56a0d5bc185adfe79992a46991964070.png" alt="Beta" height="15">
					</div> </a>
				</div>

				<div class="comp pull-right not-launched comp-hire-a-host">
					<a class="hdr-btn link-reset lys-link hire-a-host-link" href="/co-hosting?ref=header_button"> <span class="btn btn-small btn-hire-a-host"> </span></a>
					<div class="panel  drop-down-menu hire-a-host-dropdown">
						<p class="panel-body">
							<a class="link-reset hire-a-host-tooltip" href="/co-hosting?ref=header_button"> Tooltip content! </a>
						</p>
					</div>
				</div>

				<div class="comp pull-right hide-host comp-become-a-host ">
					<a class="hdr-btn link-reset lys-link js-become-a-host-link comp-become-a-host__link" href="/rooms/new?from_nav=1&amp;link=1"> <span class="btn btn-small btn-become-a-host"> มาเป็นเจ้าของที่พัก <i class="icon icon-gift icon-host-referral-gift js-host-referral-gift-icon hide "></i> </span> </a>
					<div class="panel  drop-down-menu js-become-a-host-dropdown">
						<a class="link-reset panel-body hover-item hide js-become-a-host-lys" href="/become-a-host?from_nav=1&amp;link=2">
						<div class="hover-item__content">
							ลงประกาศที่พัก
						</div> </a>
						<a class="link-reset js-become-a-host-tooltip panel-body hover-item" href="/rooms/new?from_nav=1&amp;link=3">
						<div class="tooltip-content">
							คุณสามารถมีรายได้ ฿4,071 จากการแบ่งปันบ้านของคุณใน Nonthaburi ในหนึ่งสัปดาห์ เป็นเจ้าของที่พักสิ
						</div> </a>
						<a class="link-reset panel-body hover-item js-become-a-host-why-host hide" href="/host?from_nav=1">
						<div class="hover-item__content">
							วิธีการทำงานของการให้เช่าที่พัก
						</div> </a>
					</div>
				</div>

				<div class="comp pull-left back-to-search-results-wrapper"></div>

				<div class="comp search-bar-wrapper" role="search">
					<form action="/s" class="search-form" data-reactid=".0">
						<div data-reactid=".0.0">
							<div class="search-bar" data-reactid=".0.0.0">
								<i class="header-icon icon-search-alt-gray search-icon" aria-hidden="true" data-reactid=".0.0.0.0"></i><label class="screen-reader-only" for="header-search-form" aria-hidden="true" data-reactid=".0.0.0.1">ไปที่ไหน</label>
								<input type="text" placeholder="ไปที่ไหน" autocomplete="off" name="location" id="header-search-form" class="location" value="" data-reactid=".0.0.0.2">
								<input type="hidden" name="source" value="hdr" data-reactid=".0.0.0.4">
							</div><div id="header-search-settings" class="panel search-settings header-menu" data-reactid=".0.0.1"></div>
						</div>
					</form>
				</div>

			</header>

		</div>

		<noscript>
			&lt;div class="alert alert-with-icon alert-error  no-js-alert"
			&gt;
			&lt;i class="icon alert-icon icon-alert-alt"&gt;&lt;/i&gt;

			ขออภัย เว็บไซต์ Airbnb บางส่วนต้องเปิดใช้งาน JavaScript เพื่อให้ทำงานได้อย่างถูกต้อง

			&lt;/div&gt;
		</noscript>

		<meta content="{&quot;flags&quot;:{&quot;name&quot;:&quot;flags&quot;,&quot;value&quot;:{&quot;this_bit_is_available&quot;:2,&quot;can_see_community_links&quot;:4,&quot;has_new_notifications&quot;:8,&quot;og_publish&quot;:16,&quot;is_business_travel_verified&quot;:32,&quot;update_cached&quot;:64,&quot;revert_to_admin&quot;:128,&quot;facebook_connected&quot;:256,&quot;erf_trebuchet_log&quot;:512,&quot;has_search&quot;:1024,&quot;search_help_dropdown&quot;:2048,&quot;has_dates&quot;:4096,&quot;has_acpt_resv_as_gst&quot;:8192,&quot;has_current_guest_resv&quot;:16384,&quot;can_send_profile_messages&quot;:32768,&quot;just_logged_in&quot;:65536,&quot;has_been_host&quot;:131072,&quot;should_drop_pellet&quot;:262144,&quot;field_guide_preload&quot;:524288,&quot;is_active_host&quot;:1048576,&quot;is_business_travel_manager&quot;:2097152,&quot;debugging_mode&quot;:4194304,&quot;is_host_referral_nav_bar_link_enabled&quot;:8388608,&quot;should_show_host_header&quot;:16777216,&quot;has_new_notifications_v4&quot;:33554432,&quot;is_vr_platform_powered_host&quot;:67108864,&quot;can_see_meetups&quot;:134217728,&quot;should_drop_sift_pellet&quot;:268435456,&quot;can_see_groups&quot;:536870912,&quot;has_verified_phone&quot;:1073741824,&quot;has_profile_pic&quot;:2147483648}},&quot;roles&quot;:{&quot;name&quot;:&quot;roles&quot;,&quot;value&quot;:{&quot;is_content_manager&quot;:1048576,&quot;is_stats_admin&quot;:16777216}},&quot;user_attributes&quot;:{&quot;name&quot;:&quot;_user_attributes&quot;}}" id="_bootstrap-user-attr-cookies">
		<meta content="{&quot;engagement_overlay_modal&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:50},{&quot;name&quot;:&quot;overlay_img6&quot;,&quot;buckets&quot;:10},{&quot;name&quot;:&quot;overlay_img7&quot;,&quot;buckets&quot;:20},{&quot;name&quot;:&quot;overlay_img9&quot;,&quot;buckets&quot;:20}],&quot;hashing_key&quot;:&quot;engagement_overlay_modal&quot;,&quot;holdout_name&quot;:null},&quot;account_activation_flow_never_show_modal&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;account_activation_flow_never_show_modal&quot;,&quot;holdout_name&quot;:null},&quot;referrals_signup_promo_panel&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;referrals_signup_promo_panel&quot;,&quot;holdout_name&quot;:null},&quot;engagement_overlay_modal_p3_copy_expt&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:25},{&quot;name&quot;:&quot;location&quot;,&quot;buckets&quot;:25},{&quot;name&quot;:&quot;price&quot;,&quot;buckets&quot;:25},{&quot;name&quot;:&quot;quality&quot;,&quot;buckets&quot;:25}],&quot;hashing_key&quot;:&quot;engagement_overlay_modal_p3_copy_expt&quot;,&quot;holdout_name&quot;:null},&quot;sem_existing_user_cannibalization_test&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:80},{&quot;name&quot;:&quot;no_search_ads&quot;,&quot;buckets&quot;:20}],&quot;hashing_key&quot;:&quot;sem_existing_user_cannibalization_test&quot;,&quot;holdout_name&quot;:null},&quot;download_garden_holdout&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;holdout&quot;,&quot;buckets&quot;:5},{&quot;name&quot;:&quot;signup_garden&quot;,&quot;buckets&quot;:95}],&quot;hashing_key&quot;:&quot;signup_garden_holdout&quot;,&quot;holdout_name&quot;:null},&quot;download_garden_cn_new_user_holdout&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:10},{&quot;name&quot;:&quot;stable&quot;,&quot;buckets&quot;:10},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:80}],&quot;hashing_key&quot;:&quot;download_garden_cn_new_user_holdout&quot;,&quot;holdout_name&quot;:null},&quot;download_garden_cn_new_user_v2&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;download_garden_cn_new_user_v2&quot;,&quot;holdout_name&quot;:null},&quot;engagement_first_visit_survey_with_moweb&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:95},{&quot;name&quot;:&quot;survey&quot;,&quot;buckets&quot;:5}],&quot;hashing_key&quot;:&quot;engagement_first_visit_survey_with_moweb&quot;,&quot;holdout_name&quot;:null},&quot;monorail_referrals_tab_text_v2&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:4,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment1_invite_friends&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment2_refer_a_friend&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment3_referrals&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;monorail_referrals_tab_text_v2&quot;,&quot;holdout_name&quot;:null},&quot;react_sm_search_modal_v3&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;react_sm_search_modal_v3&quot;,&quot;holdout_name&quot;:null},&quot;sm_search_rm_room_type&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;sm_search_rm_room_type&quot;,&quot;holdout_name&quot;:null},&quot;sm_preload_latest_search&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;preload_enabled&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;sm_preload_latest_search&quot;,&quot;holdout_name&quot;:null},&quot;ehp_infants_v2&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:1,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;ehp_infants_v2&quot;,&quot;holdout_name&quot;:null},&quot;china_mapbox_street&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;mapbox_street&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;china_mapbox_street_v1&quot;,&quot;holdout_name&quot;:null},&quot;china_app_banner_bottom&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;china_app_banner_bottom&quot;,&quot;holdout_name&quot;:null},&quot;china_moweb_loading_indicators&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;moweb_loading_indicators&quot;,&quot;holdout_name&quot;:null},&quot;global_moweb_loading_indicators&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;moweb_loading_indicators&quot;,&quot;holdout_name&quot;:null},&quot;post_signup_engagement_modal&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:1},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:1}],&quot;hashing_key&quot;:&quot;post_signup_engagement_modal&quot;,&quot;holdout_name&quot;:null}}" id="_bootstrap-erf">
		<script src="https://a2.muscache.com/airbnb/static/packages/header_cookie.bundle-f73416ac2d1c454d1a68.js" type="text/javascript"></script>

		<div class="flash-container"></div>

		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="mycar.php" aria-selected="false" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="profile.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="security.php" aria-selected="true" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">
				<div class="row">
					<div class="col-md-3">

						<ul class="sidenav-list">
							<li>
								<a href="security.php" aria-selected="true" class="sidenav-item">ความปลอดภัย</a>
							</li>
							<li>
								<a href="settings.php" aria-selected="false" class="sidenav-item">การตั้งค่า</a>
							</li>

						</ul>

					</div>
					<div class="col-md-9">

						<!-- Change Your Password -->
						<form accept-charset="UTF-8" action="https://th.airbnb.com/change_password" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="✓">
								<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$AT90vd_Mpkw$ou_vm6Whqu8g72iG5YFiy6hWfCPp5UJ-JoioB2os3UI=">
							</div>
							<div id="change_your_password" class="panel space-4">
								<div class="panel-header">
									เปลี่ยนรหัสผ่าน
								</div>
								<div class="panel-body">
									<input id="id" name="id" type="hidden" value="98642671">
									<input id="redirect_on_error" name="redirect_on_error" type="hidden" value="/users/security/98642671">
									<input id="user_password_ok" name="user[password_ok]" type="hidden" value="true">
									<div class="row">
										<div class="col-lg-7">
											<div class="row row-condensed space-2">
												<div class="col-md-5 text-right">
													<label for="old_password"> รหัสผ่านเก่า </label>
												</div>
												<div class="col-md-7">
													<input class="input-block" id="old_password" name="old_password" type="password">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-7">
											<div class="row row-condensed space-2">
												<div class="col-md-5 text-right">
													<label for="user_password"> รหัสผ่านใหม่ </label>
												</div>
												<div class="col-7">
													<input class="input-block" data-hook="new_password" id="new_password" name="user[password]" size="30" type="password">
												</div>
											</div>

											<div class="row row-condensed space-2">
												<div class="col-md-5 text-right">
													<label for="user_password_confirmation"> ยืนยันรหัสผ่าน </label>
												</div>
												<div class="col-md-7">
													<input class="input-block" id="user_password_confirmation" name="user[password_confirmation]" size="30" type="password">
												</div>
											</div>
										</div>
										<div class="col-lg-5 password-strength" data-hook="password-strength"></div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" class="btn btn-primary">
										ปรับปรุงรหัสผ่าน
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>

		</main>

		<div id="footer-promo-mount"></div>
		<div id="footer" class="container-brand-dark footer-surround footer-container">
			<footer class="page-container-responsive" role="contentinfo">
				<div class="row row-condensed">
					<div class="col-md-3 col-md-offset-1">
						<div class="language-curr-picker clearfix space-2">
							<div class="language-picker">
								<div class="select select-large select-block space-2" data-reactid=".3">
									<label for="language-selector" class="screen-reader-only" data-reactid=".3.0"><span data-reactid=".3.0.0">เลือกภาษา</span></label>
									<select class="language-selector" id="language-selector" data-reactid=".3.1">
										<option value="id" data-reactid=".3.1.$id">Bahasa Indonesia</option><option value="ms" data-reactid=".3.1.$ms">Bahasa Melayu</option><option value="ca" data-reactid=".3.1.$ca">Català</option><option value="da" data-reactid=".3.1.$da">Dansk</option><option value="de" data-reactid=".3.1.$de">Deutsch</option><option value="en" data-reactid=".3.1.$en">English</option><option value="es" data-reactid=".3.1.$es">Español</option><option value="el" data-reactid=".3.1.$el">Eλληνικά</option><option value="fr" data-reactid=".3.1.$fr">Français</option><option value="it" data-reactid=".3.1.$it">Italiano</option><option value="hu" data-reactid=".3.1.$hu">Magyar</option><option value="nl" data-reactid=".3.1.$nl">Nederlands</option><option value="no" data-reactid=".3.1.$no">Norsk</option><option value="pl" data-reactid=".3.1.$pl">Polski</option><option value="pt" data-reactid=".3.1.$pt">Português</option><option value="fi" data-reactid=".3.1.$fi">Suomi</option><option value="sv" data-reactid=".3.1.$sv">Svenska</option><option value="tr" data-reactid=".3.1.$tr">Türkçe</option><option value="is" data-reactid=".3.1.$is">Íslenska</option><option value="cs" data-reactid=".3.1.$cs">Čeština</option><option value="ru" data-reactid=".3.1.$ru">Русский</option><option selected="" value="th" data-reactid=".3.1.$th">ภาษาไทย</option><option value="zh" data-reactid=".3.1.$zh">中文 (简体)</option><option value="zh-TW" data-reactid=".3.1.$zh-TW">中文 (繁體)</option><option value="ja" data-reactid=".3.1.$ja">日本語</option><option value="ko" data-reactid=".3.1.$ko">한국어</option>
									</select>
								</div>
							</div>
							<div class="currency-picker">
								<div class="space-2" data-reactid=".4">
									<label for="currency-selector" class="screen-reader-only" data-reactid=".4.0"><span data-reactid=".4.0.0">เลือกสกุลเงิน</span></label>
									<div class="select select-block select-large" data-reactid=".4.1">
										<select id="currency-selector" data-reactid=".4.1.0">
											<option value="AED" data-reactid=".4.1.0.$AED">AED</option><option value="ARS" data-reactid=".4.1.0.$ARS">ARS</option><option value="AUD" data-reactid=".4.1.0.$AUD">AUD</option><option value="BGN" data-reactid=".4.1.0.$BGN">BGN</option><option value="BRL" data-reactid=".4.1.0.$BRL">BRL</option><option value="CAD" data-reactid=".4.1.0.$CAD">CAD</option><option value="CHF" data-reactid=".4.1.0.$CHF">CHF</option><option value="CLP" data-reactid=".4.1.0.$CLP">CLP</option><option value="CNY" data-reactid=".4.1.0.$CNY">CNY</option><option value="COP" data-reactid=".4.1.0.$COP">COP</option><option value="CRC" data-reactid=".4.1.0.$CRC">CRC</option><option value="CZK" data-reactid=".4.1.0.$CZK">CZK</option><option value="DKK" data-reactid=".4.1.0.$DKK">DKK</option><option value="EUR" data-reactid=".4.1.0.$EUR">EUR</option><option value="GBP" data-reactid=".4.1.0.$GBP">GBP</option><option value="HKD" data-reactid=".4.1.0.$HKD">HKD</option><option value="HRK" data-reactid=".4.1.0.$HRK">HRK</option><option value="HUF" data-reactid=".4.1.0.$HUF">HUF</option><option value="IDR" data-reactid=".4.1.0.$IDR">IDR</option><option value="ILS" data-reactid=".4.1.0.$ILS">ILS</option><option value="INR" data-reactid=".4.1.0.$INR">INR</option><option value="JPY" data-reactid=".4.1.0.$JPY">JPY</option><option value="KRW" data-reactid=".4.1.0.$KRW">KRW</option><option value="MAD" data-reactid=".4.1.0.$MAD">MAD</option><option value="MXN" data-reactid=".4.1.0.$MXN">MXN</option><option value="MYR" data-reactid=".4.1.0.$MYR">MYR</option><option value="NOK" data-reactid=".4.1.0.$NOK">NOK</option><option value="NZD" data-reactid=".4.1.0.$NZD">NZD</option><option value="PEN" data-reactid=".4.1.0.$PEN">PEN</option><option value="PHP" data-reactid=".4.1.0.$PHP">PHP</option><option value="PLN" data-reactid=".4.1.0.$PLN">PLN</option><option value="RON" data-reactid=".4.1.0.$RON">RON</option><option value="RUB" data-reactid=".4.1.0.$RUB">RUB</option><option value="SAR" data-reactid=".4.1.0.$SAR">SAR</option><option value="SEK" data-reactid=".4.1.0.$SEK">SEK</option><option value="SGD" data-reactid=".4.1.0.$SGD">SGD</option><option selected="" value="THB" data-reactid=".4.1.0.$THB">THB</option><option value="TRY" data-reactid=".4.1.0.$TRY">TRY</option><option value="TWD" data-reactid=".4.1.0.$TWD">TWD</option><option value="UAH" data-reactid=".4.1.0.$UAH">UAH</option><option value="USD" data-reactid=".4.1.0.$USD">USD</option><option value="UYU" data-reactid=".4.1.0.$UYU">UYU</option><option value="VND" data-reactid=".4.1.0.$VND">VND</option><option value="ZAR" data-reactid=".4.1.0.$ZAR">ZAR</option>
										</select>
									</div>
								</div>
							</div>
							<div class="cx-number"></div>
						</div>

					</div>

					<div class="col-md-2 col-md-offset-1 hide-sm">
						<h2 class="h5">บริษัท</h2>
						<ul class="list-layout">
							<li>
								<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
							</li>
							<li>
								<a href="/careers" class="link-contrast">อาชีพ</a>
							</li>
							<li>
								<a href="/press/news" class="link-contrast">สื่อข่าวสาร</a>
							</li>
							<li>
								<a href="http://blog.airbnb.com" class="link-contrast">บล็อก</a>
							</li>
							<li>
								<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
							</li>
							<li>
								<a href="/policies" class="link-contrast">นโยบาย</a>
							</li>
							<li>
								<a href="/disaster-response" class="link-contrast">การรับมือภัยพิบัติ</a>
							</li>
							<li>
								<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2 hide-sm">
						<h2 class="h5">ค้นพบ</h2>
						<ul class="list-layout">
							<li>
								<a href="/trust" class="link-contrast">ความไว้ใจและความปลอดภัย</a>
							</li>
							<li>
								<a href="/invite?r=6" class="link-contrast">เชิญเพื่อน</a>
							</li>
							<li>
								<a href="/gift?s=footer" class="link-contrast">บัตรของขวัญ</a>
							</li>
							<li>
								<a href="/wishlists/airbnb_picks" class="link-contrast">ที่พักที่ Airbnb คัดสรร</a>
							</li>
							<li>
								<a href="/mobile" class="link-contrast">โทรศัพท์มือถือ</a>
							</li>
							<li>
								<a href="https://www.airbnbaction.com?utm_source=airbnb&amp;utm_medium=footer&amp;utm_campaign=product" class="link-contrast" target="_blank">การดำเนินการของ Airbnb</a>
							</li>
							<li>
								<a href="/business-travel?s=footer" class="link-contrast">การเดินทางเพื่อธุรกิจ</a>
							</li>
							<li>
								<a href="/sitemaps" class="link-contrast">แผนที่เว็บไซต์</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2 hide-sm">
						<h2 class="h5">การให้เช่าที่พัก</h2>
						<ul class="list-layout">
							<li>
								<a href="/host" class="link-contrast">เหตุผลที่ควรให้เช่าที่พักบน Airbnb</a>
							</li>
							<li>
								<a href="/hospitality" class="link-contrast">การต้อนรับ</a>
							</li>
							<li>
								<a href="/help/responsible-hosting" class="link-contrast">การให้เช่าที่พักอย่างมีความรับผิดชอบ</a>
							</li>
							<li>
								<a href="/home-safety" class="link-contrast">ความปลอดภัยในบ้าน</a>
							</li>
							<li>
								<a href="/host/instant" class="link-contrast">จองทันที</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-12 space-4 space-top-4 show-sm">
					<ul class="list-layout list-inline text-center h5">
						<li>
							<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
						</li>
						<li>
							<a href="/careers" class="link-contrast">อาชีพ</a>
						</li>
						<li>
							<a href="/press/news" class="link-contrast">สื่อข่าวสาร</a>
						</li>
						<li>
							<a href="http://blog.airbnb.com" class="link-contrast">บล็อก</a>
						</li>
						<li>
							<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
						</li>
					</ul>
				</div>

				<hr class="footer-divider space-top-8 space-4 hide-sm">

				<div class="text-center">
					<h2 class="h5 space-4 hide-sm">ติดตามเราได้ที่</h2>
					<ul class="list-layout list-inline" itemscope="" itemtype="http://schema.org/Organization">
						<link itemprop="url" href="https://th.airbnb.com">
						<meta itemprop="logo" content="https://a2.muscache.com/airbnb/static/logos/belo-200x200-4d851c5b28f61931bf1df28dd15e60ef.png">
						<li>
							<a href="https://www.facebook.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon footer-icon icon-facebook"></i> </a>
						</li>
						<li>
							<a href="https://plus.google.com/+airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" rel="publisher" target="_blank"> <span class="screen-reader-only">Google+</span> <i class="icon footer-icon icon-google-plus"></i> </a>
						</li>

						<li>
							<a href="https://twitter.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Twitter</span> <i class="icon footer-icon icon-twitter"></i> </a>
						</li>

						<li>
							<a href="https://www.linkedin.com/company/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">LinkedIn</span> <i class="icon footer-icon icon-linkedin"></i> </a>
						</li>

						<li>
							<a href="https://www.pinterest.com/airbnb/" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon footer-icon icon-pinterest"></i> </a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/Airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">YouTube</span> <i class="icon footer-icon icon-youtube"></i> </a>
						</li>
						<li>
							<a href="https://instagram.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Instagram</span> <i class="icon footer-icon icon-instagram"></i> </a>
						</li>
					</ul>
					<div class="space-top-2 text-muted">
						© Airbnb, Inc.
					</div>
				</div>
			</footer>

		</div>

		<meta content="{&quot;canonical_host&quot;:&quot;th.airbnb.com&quot;,&quot;language&quot;:&quot;th&quot;,&quot;locale&quot;:&quot;th&quot;,&quot;api_config&quot;:{&quot;baseUrl&quot;:&quot;https://th.airbnb.com/api&quot;,&quot;key&quot;:&quot;d306zoyjsyarp7ifhu67rjxn52tv0t20&quot;},&quot;deep_link&quot;:null,&quot;tracking_context&quot;:{&quot;source&quot;:&quot;monorail&quot;,&quot;platform&quot;:&quot;js&quot;,&quot;version&quot;:&quot;040ce2033d36691b0e5bb3efb56830ba82d8fb70&quot;,&quot;controller&quot;:&quot;users&quot;,&quot;action&quot;:&quot;edit&quot;,&quot;req_uuid&quot;:&quot;2679c32f-c08d-4aef-99a7-9d5c026adf38&quot;,&quot;shardset&quot;:&quot;a0,a1,a2&quot;},&quot;no_flash_alerts&quot;:null,&quot;google_maps_url&quot;:&quot;https://maps.googleapis.com/maps/api/js?language=th&amp;region=US&amp;v=3.24&amp;libraries=places&amp;client=gme-airbnbinc&amp;channel=monorail-prod&quot;,&quot;airbnb_open_street_map_js_url&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/mapbox.bundle-eaa1cd0d5c0001c0dd15.js&quot;,&quot;airbnb_open_street_map_css_url&quot;:&quot;https://a1.muscache.com/airbnb/static/mapbox/mapbox-2413745018eab23321bb6ef63237e2d6.css&quot;,&quot;d3_js_url&quot;:&quot;https://a0.muscache.com/airbnb/static/vendor/d3.v3.5.17.min-5482cf82071bdbae91300ccc092b8ebb.js&quot;,&quot;sift_key&quot;:&quot;3d72676b30&quot;,&quot;pellet_id&quot;:&quot;kfgn8s24&quot;}" id="_bootstrap-layout-init" />
		<meta content="{&quot;language&quot;:&quot;th&quot;,&quot;locale&quot;:&quot;th&quot;,&quot;country&quot;:&quot;TH&quot;,&quot;tld_country&quot;:&quot;US&quot;,&quot;currencies&quot;:{&quot;AED&quot;:{&quot;symbol&quot;:&quot;&amp;#1583;.&amp;#1573;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;ﺩ.ﺇ&quot;}},&quot;ARS&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;AUD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;BGN&quot;:{&quot;symbol&quot;:&quot;&amp;#1083;&amp;#1074;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;лв&quot;}},&quot;BRL&quot;:{&quot;symbol&quot;:&quot;R$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;CAD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;CHF&quot;:{&quot;symbol&quot;:&quot;CHF&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;hide_code_if_symbol_shown&quot;:true}},&quot;CLP&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;CNY&quot;:{&quot;symbol&quot;:&quot;&amp;#65509;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;￥&quot;}},&quot;COP&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;CRC&quot;:{&quot;symbol&quot;:&quot;&amp;#8353;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₡&quot;}},&quot;CZK&quot;:{&quot;symbol&quot;:&quot;&amp;#75;&amp;#269;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;Kč&quot;}},&quot;DKK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;EUR&quot;:{&quot;symbol&quot;:&quot;&amp;euro;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;€&quot;,&quot;position&quot;:&quot;special&quot;}},&quot;GBP&quot;:{&quot;symbol&quot;:&quot;&amp;pound;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;£&quot;}},&quot;HKD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;HRK&quot;:{&quot;symbol&quot;:&quot;kn&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;HUF&quot;:{&quot;symbol&quot;:&quot;Ft&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;IDR&quot;:{&quot;symbol&quot;:&quot;Rp&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;ILS&quot;:{&quot;symbol&quot;:&quot;&amp;#8362;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₪&quot;}},&quot;INR&quot;:{&quot;symbol&quot;:&quot;&amp;#8377;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₹&quot;}},&quot;JPY&quot;:{&quot;symbol&quot;:&quot;&amp;yen;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;¥&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;KRW&quot;:{&quot;symbol&quot;:&quot;&amp;#8361;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₩&quot;}},&quot;MAD&quot;:{&quot;symbol&quot;:&quot;MAD&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;MXN&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;MYR&quot;:{&quot;symbol&quot;:&quot;&amp;#82;&amp;#77;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;RM&quot;}},&quot;NOK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;NZD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;PEN&quot;:{&quot;symbol&quot;:&quot;&amp;#83;&amp;#47;&amp;#46;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;S/.&quot;}},&quot;PHP&quot;:{&quot;symbol&quot;:&quot;&amp;#8369;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₱&quot;}},&quot;PLN&quot;:{&quot;symbol&quot;:&quot;z&amp;#22;&amp;#322;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;zł&quot;,&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;RON&quot;:{&quot;symbol&quot;:&quot;lei&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;RUB&quot;:{&quot;symbol&quot;:&quot;&amp;#1088;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₽&quot;,&quot;position&quot;:&quot;after&quot;}},&quot;SAR&quot;:{&quot;symbol&quot;:&quot;SR&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;SEK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;SGD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;THB&quot;:{&quot;symbol&quot;:&quot;&amp;#3647;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;฿&quot;}},&quot;TRY&quot;:{&quot;symbol&quot;:&quot;&amp;#84;&amp;#76;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₺&quot;,&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;TWD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;UAH&quot;:{&quot;symbol&quot;:&quot;&amp;#8372;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₴&quot;}},&quot;USD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;UYU&quot;:{&quot;symbol&quot;:&quot;&amp;#36;&amp;#85;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;$U&quot;}},&quot;VND&quot;:{&quot;symbol&quot;:&quot;&amp;#8363;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₫&quot;}},&quot;ZAR&quot;:{&quot;symbol&quot;:&quot;R&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}}},&quot;current_locale_name&quot;:&quot;ภาษาไทย&quot;,&quot;languages&quot;:[{&quot;locale_name&quot;:&quot;Bahasa Indonesia&quot;,&quot;locale&quot;:&quot;id&quot;},{&quot;locale_name&quot;:&quot;Bahasa Melayu&quot;,&quot;locale&quot;:&quot;ms&quot;},{&quot;locale_name&quot;:&quot;Català&quot;,&quot;locale&quot;:&quot;ca&quot;},{&quot;locale_name&quot;:&quot;Dansk&quot;,&quot;locale&quot;:&quot;da&quot;},{&quot;locale_name&quot;:&quot;Deutsch&quot;,&quot;locale&quot;:&quot;de&quot;},{&quot;locale_name&quot;:&quot;English&quot;,&quot;locale&quot;:&quot;en&quot;},{&quot;locale_name&quot;:&quot;Español&quot;,&quot;locale&quot;:&quot;es&quot;},{&quot;locale_name&quot;:&quot;Eλληνικά&quot;,&quot;locale&quot;:&quot;el&quot;},{&quot;locale_name&quot;:&quot;Français&quot;,&quot;locale&quot;:&quot;fr&quot;},{&quot;locale_name&quot;:&quot;Italiano&quot;,&quot;locale&quot;:&quot;it&quot;},{&quot;locale_name&quot;:&quot;Magyar&quot;,&quot;locale&quot;:&quot;hu&quot;},{&quot;locale_name&quot;:&quot;Nederlands&quot;,&quot;locale&quot;:&quot;nl&quot;},{&quot;locale_name&quot;:&quot;Norsk&quot;,&quot;locale&quot;:&quot;no&quot;},{&quot;locale_name&quot;:&quot;Polski&quot;,&quot;locale&quot;:&quot;pl&quot;},{&quot;locale_name&quot;:&quot;Português&quot;,&quot;locale&quot;:&quot;pt&quot;},{&quot;locale_name&quot;:&quot;Suomi&quot;,&quot;locale&quot;:&quot;fi&quot;},{&quot;locale_name&quot;:&quot;Svenska&quot;,&quot;locale&quot;:&quot;sv&quot;},{&quot;locale_name&quot;:&quot;Türkçe&quot;,&quot;locale&quot;:&quot;tr&quot;},{&quot;locale_name&quot;:&quot;Íslenska&quot;,&quot;locale&quot;:&quot;is&quot;},{&quot;locale_name&quot;:&quot;Čeština&quot;,&quot;locale&quot;:&quot;cs&quot;},{&quot;locale_name&quot;:&quot;Русский&quot;,&quot;locale&quot;:&quot;ru&quot;},{&quot;locale_name&quot;:&quot;ภาษาไทย&quot;,&quot;locale&quot;:&quot;th&quot;},{&quot;locale_name&quot;:&quot;中文 (简体)&quot;,&quot;locale&quot;:&quot;zh&quot;},{&quot;locale_name&quot;:&quot;中文 (繁體)&quot;,&quot;locale&quot;:&quot;zh-TW&quot;},{&quot;locale_name&quot;:&quot;日本語&quot;,&quot;locale&quot;:&quot;ja&quot;},{&quot;locale_name&quot;:&quot;한국어&quot;,&quot;locale&quot;:&quot;ko&quot;}]}" id="_bootstrap-i18n-init" />
		<meta content="{&quot;enabled&quot;:true,&quot;appId&quot;:&quot;138566025676&quot;,&quot;scope&quot;:&quot;email,user_birthday,user_likes,user_education_history,user_hometown,user_location,user_friends&quot;,&quot;sdkUrl&quot;:&quot;https://connect.facebook.net/th_TH/sdk.js&quot;}" id="_bootstrap-facebook-init" />
		<meta content="{&quot;packages/field_guide.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/field_guide.bundle-378b90fe8dc5a8484d4e.js&quot;,&quot;packages/airlock_modal.bundle.js&quot;:&quot;https://a1.muscache.com/airbnb/static/packages/airlock_modal.bundle-8ad22245f3aef16ba38d.js&quot;,&quot;packages/airlock_inline.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/airlock_inline.bundle-d36884a08691e29240f3.js&quot;,&quot;packages/account_activation.bundle.js&quot;:&quot;https://a1.muscache.com/airbnb/static/packages/account_activation.bundle-8100509ed3bc1d06346d.js&quot;,&quot;packages/reset_password_modal.bundle.js&quot;:&quot;https://a2.muscache.com/airbnb/static/packages/reset_password_modal.bundle-b7eea9419f66225915c9.js&quot;}" id="_bootstrap-javascript_paths" />
		<meta content="{&quot;show_engagement_overlay_p2&quot;:false,&quot;show_engagement_overlay_p3&quot;:false,&quot;show_engagement_overlay_p1&quot;:false,&quot;account_activation_flow&quot;:true,&quot;host_growth.show_dashboard_moweb_nav_bar&quot;:true,&quot;px_trips_menu_in_header&quot;:true,&quot;back_to_search_results&quot;:false,&quot;first_visit_survey&quot;:true,&quot;oauth_popup&quot;:true,&quot;modal_audit&quot;:true,&quot;referrals_avatar_dropdown_entry_point_copy&quot;:true,&quot;p1_dissallow_locationsless_search_sm_v2&quot;:true,&quot;react_sm_search_modal_v3&quot;:true,&quot;sm_search_rm_room_type&quot;:true,&quot;use_android_deep_link&quot;:true,&quot;sm_preload_latest_search&quot;:true,&quot;ehp_infants_v2_roll_out&quot;:true,&quot;china_mapbox_street_force_trebuchet&quot;:false,&quot;china_mapbox_street&quot;:true,&quot;china_app_banner_bottom&quot;:false,&quot;china_moweb_loading_indicators&quot;:false,&quot;global_moweb_loading_indicators&quot;:false,&quot;render_sitewide_footer_instant_promo&quot;:true,&quot;post_signup_engagement_modal&quot;:true,&quot;mt_show_city_host_link_header&quot;:true}" id="_bootstrap-trebuchet" />
		<meta content="&quot;users#edit&quot;" id="_bootstrap-controller_action_pair" />
		<meta content="false" id="_bootstrap-show-signup-garden" />
		<meta content="true" id="_bootstrap-download_garden_enabled" />
		<meta content="false" id="_bootstrap-help-dropdown-experiment-enabled" />
		<meta content="{&quot;email&quot;:&quot;3a59b756784936e86b6ccdfa7739af1dc1766b6879df4b173729584938a8d51d&quot;,&quot;first_name&quot;:&quot;220c121291f6446ab898e760db13876ebbb32ffb61482a2e2b29fdf5ef00e6b4&quot;,&quot;last_name&quot;:&quot;7a9e63e201072aa6d8e79ef027adec2a2c4399e1f72753083626539e4dccbc4f&quot;,&quot;gender&quot;:&quot;62c66a7a5dd70c3146618063c344e531e6d4b59e379808443ce962b3abd63c5a&quot;,&quot;date_of_birth&quot;:&quot;9ab9f88a0416e5c6e2530824650f0ab8fcd1ff4240cc6bf4e133bfa00a48d758&quot;,&quot;external_id&quot;:&quot;8cf3ba341751bd20385169d7adfe9f0b85594e4c80a11fdaaed8e6a9c0a3b302&quot;}" id="_bootstrap-facebook_advanced_matching" />
		<meta content="{}" id="_bootstrap-pg_active_facebook_experiments" />
		<meta content="&quot;https://a1.muscache.com/airbnb/static/packages/engagement_carousel.bundle-d684fdf3eea68686c95b.js&quot;" id="_bootstrap-engagement_post_signup_js" />
		<meta content="null" id="_bootstrap-shipping_address_data" />
		<meta content="{&quot;country&quot;:&quot;TH&quot;,&quot;id&quot;:98642671,&quot;listings_count&quot;:0}" id="_bootstrap-user_data" />
		<meta content="[{&quot;prefix&quot;:242,&quot;name&quot;:&quot;คองโก&quot;,&quot;code&quot;:&quot;CG&quot;},{&quot;prefix&quot;:243,&quot;name&quot;:&quot;สาธารณรัฐประชาธิปไตยคองโก&quot;,&quot;code&quot;:&quot;CD&quot;},{&quot;prefix&quot;:389,&quot;name&quot;:&quot;มาซิโดเนีย&quot;,&quot;code&quot;:&quot;MK&quot;},{&quot;prefix&quot;:30,&quot;name&quot;:&quot;กรีซ&quot;,&quot;code&quot;:&quot;GR&quot;},{&quot;prefix&quot;:299,&quot;name&quot;:&quot;กรีนแลนด์&quot;,&quot;code&quot;:&quot;GL&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;กวม&quot;,&quot;code&quot;:&quot;GU&quot;},{&quot;prefix&quot;:590,&quot;name&quot;:&quot;กวาเดอลูป&quot;,&quot;code&quot;:&quot;GP&quot;},{&quot;prefix&quot;:855,&quot;name&quot;:&quot;กัมพูชา&quot;,&quot;code&quot;:&quot;KH&quot;},{&quot;prefix&quot;:502,&quot;name&quot;:&quot;กัวเตมาลา&quot;,&quot;code&quot;:&quot;GT&quot;},{&quot;prefix&quot;:974,&quot;name&quot;:&quot;กาตาร์&quot;,&quot;code&quot;:&quot;QA&quot;},{&quot;prefix&quot;:233,&quot;name&quot;:&quot;กานา&quot;,&quot;code&quot;:&quot;GH&quot;},{&quot;prefix&quot;:241,&quot;name&quot;:&quot;กาบอง&quot;,&quot;code&quot;:&quot;GA&quot;},{&quot;prefix&quot;:592,&quot;name&quot;:&quot;กายอานา&quot;,&quot;code&quot;:&quot;GY&quot;},{&quot;prefix&quot;:224,&quot;name&quot;:&quot;กินี&quot;,&quot;code&quot;:&quot;GN&quot;},{&quot;prefix&quot;:245,&quot;name&quot;:&quot;กินี-บิสเซา&quot;,&quot;code&quot;:&quot;GW&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เกรเนดา&quot;,&quot;code&quot;:&quot;GD&quot;},{&quot;prefix&quot;:82,&quot;name&quot;:&quot;เกาหลีใต้&quot;,&quot;code&quot;:&quot;KR&quot;},{&quot;prefix&quot;:61,&quot;name&quot;:&quot;เกาะคริสต์มาส&quot;,&quot;code&quot;:&quot;CX&quot;},{&quot;prefix&quot;:500,&quot;name&quot;:&quot;เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช&quot;,&quot;code&quot;:&quot;GS&quot;},{&quot;prefix&quot;:672,&quot;name&quot;:&quot;เกาะนอร์ฟอล์ก&quot;,&quot;code&quot;:&quot;NF&quot;},{&quot;prefix&quot;:44,&quot;name&quot;:&quot;เกาะแมน&quot;,&quot;code&quot;:&quot;IM&quot;},{&quot;prefix&quot;:44,&quot;name&quot;:&quot;เกิร์นซีย์&quot;,&quot;code&quot;:&quot;GG&quot;},{&quot;prefix&quot;:220,&quot;name&quot;:&quot;แกมเบีย&quot;,&quot;code&quot;:&quot;GM&quot;},{&quot;prefix&quot;:269,&quot;name&quot;:&quot;คอโมโรส&quot;,&quot;code&quot;:&quot;KM&quot;},{&quot;prefix&quot;:506,&quot;name&quot;:&quot;คอสตาริกา&quot;,&quot;code&quot;:&quot;CR&quot;},{&quot;prefix&quot;:7,&quot;name&quot;:&quot;คาซัคสถาน&quot;,&quot;code&quot;:&quot;KZ&quot;},{&quot;prefix&quot;:686,&quot;name&quot;:&quot;คิริบาส&quot;,&quot;code&quot;:&quot;KI&quot;},{&quot;prefix&quot;:53,&quot;name&quot;:&quot;คิวบา&quot;,&quot;code&quot;:&quot;CU&quot;},{&quot;prefix&quot;:996,&quot;name&quot;:&quot;คีร์กีซสถาน&quot;,&quot;code&quot;:&quot;KG&quot;},{&quot;prefix&quot;:599,&quot;name&quot;:&quot;คูราเซา&quot;,&quot;code&quot;:&quot;CW&quot;},{&quot;prefix&quot;:965,&quot;name&quot;:&quot;คูเวต&quot;,&quot;code&quot;:&quot;KW&quot;},{&quot;prefix&quot;:254,&quot;name&quot;:&quot;เคนยา&quot;,&quot;code&quot;:&quot;KE&quot;},{&quot;prefix&quot;:238,&quot;name&quot;:&quot;เคปเวิร์ด&quot;,&quot;code&quot;:&quot;CV&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;แคนาดา&quot;,&quot;code&quot;:&quot;CA&quot;},{&quot;prefix&quot;:237,&quot;name&quot;:&quot;แคเมอรูน&quot;,&quot;code&quot;:&quot;CM&quot;},{&quot;prefix&quot;:385,&quot;name&quot;:&quot;โครเอเชีย&quot;,&quot;code&quot;:&quot;HR&quot;},{&quot;prefix&quot;:57,&quot;name&quot;:&quot;โคลอมเบีย&quot;,&quot;code&quot;:&quot;CO&quot;},{&quot;prefix&quot;:995,&quot;name&quot;:&quot;จอร์เจีย&quot;,&quot;code&quot;:&quot;GE&quot;},{&quot;prefix&quot;:962,&quot;name&quot;:&quot;จอร์แดน&quot;,&quot;code&quot;:&quot;JO&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;จาเมกา&quot;,&quot;code&quot;:&quot;JM&quot;},{&quot;prefix&quot;:253,&quot;name&quot;:&quot;จิบูตี&quot;,&quot;code&quot;:&quot;DJ&quot;},{&quot;prefix&quot;:86,&quot;name&quot;:&quot;จีน&quot;,&quot;code&quot;:&quot;CN&quot;},{&quot;prefix&quot;:44,&quot;name&quot;:&quot;เจอร์ซีย์&quot;,&quot;code&quot;:&quot;JE&quot;},{&quot;prefix&quot;:235,&quot;name&quot;:&quot;ชาด&quot;,&quot;code&quot;:&quot;TD&quot;},{&quot;prefix&quot;:56,&quot;name&quot;:&quot;ชิลี&quot;,&quot;code&quot;:&quot;CL&quot;},{&quot;prefix&quot;:378,&quot;name&quot;:&quot;ซานมารีโน&quot;,&quot;code&quot;:&quot;SM&quot;},{&quot;prefix&quot;:685,&quot;name&quot;:&quot;ซามัว&quot;,&quot;code&quot;:&quot;WS&quot;},{&quot;prefix&quot;:966,&quot;name&quot;:&quot;ซาอุดีอาระเบีย&quot;,&quot;code&quot;:&quot;SA&quot;},{&quot;prefix&quot;:212,&quot;name&quot;:&quot;ซาฮาราตะวันตก&quot;,&quot;code&quot;:&quot;EH&quot;},{&quot;prefix&quot;:263,&quot;name&quot;:&quot;ซิมบับเว&quot;,&quot;code&quot;:&quot;ZW&quot;},{&quot;prefix&quot;:211,&quot;name&quot;:&quot;ซูดานใต้&quot;,&quot;code&quot;:&quot;SS&quot;},{&quot;prefix&quot;:597,&quot;name&quot;:&quot;ซูรินาเม&quot;,&quot;code&quot;:&quot;SR&quot;},{&quot;prefix&quot;:248,&quot;name&quot;:&quot;เซเชลส์&quot;,&quot;code&quot;:&quot;SC&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เซนต์คิตส์และเนวิส&quot;,&quot;code&quot;:&quot;KN&quot;},{&quot;prefix&quot;:590,&quot;name&quot;:&quot;เซนต์บาร์เธเลมี&quot;,&quot;code&quot;:&quot;BL&quot;},{&quot;prefix&quot;:590,&quot;name&quot;:&quot;เซนต์มาติน&quot;,&quot;code&quot;:&quot;MF&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เซนต์มาร์ติน&quot;,&quot;code&quot;:&quot;SX&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เซนต์ลูเซีย&quot;,&quot;code&quot;:&quot;LC&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เซนต์วินเซนต์และเกรนาดีนส์&quot;,&quot;code&quot;:&quot;VC&quot;},{&quot;prefix&quot;:290,&quot;name&quot;:&quot;เซนต์เฮเลนา&quot;,&quot;code&quot;:&quot;SH&quot;},{&quot;prefix&quot;:221,&quot;name&quot;:&quot;เซเนกัล&quot;,&quot;code&quot;:&quot;SN&quot;},{&quot;prefix&quot;:381,&quot;name&quot;:&quot;เซอร์เบีย&quot;,&quot;code&quot;:&quot;RS&quot;},{&quot;prefix&quot;:239,&quot;name&quot;:&quot;เซาตูเมและปรินซิปี&quot;,&quot;code&quot;:&quot;ST&quot;},{&quot;prefix&quot;:232,&quot;name&quot;:&quot;เซียร์ราลีโอน&quot;,&quot;code&quot;:&quot;SL&quot;},{&quot;prefix&quot;:508,&quot;name&quot;:&quot;แซงปีแยร์และมีเกอลง&quot;,&quot;code&quot;:&quot;PM&quot;},{&quot;prefix&quot;:260,&quot;name&quot;:&quot;แซมเบีย&quot;,&quot;code&quot;:&quot;ZM&quot;},{&quot;prefix&quot;:252,&quot;name&quot;:&quot;โซมาเลีย&quot;,&quot;code&quot;:&quot;SO&quot;},{&quot;prefix&quot;:357,&quot;name&quot;:&quot;ไซปรัส&quot;,&quot;code&quot;:&quot;CY&quot;},{&quot;prefix&quot;:81,&quot;name&quot;:&quot;ญี่ปุ่น&quot;,&quot;code&quot;:&quot;JP&quot;},{&quot;prefix&quot;:45,&quot;name&quot;:&quot;เดนมาร์ก&quot;,&quot;code&quot;:&quot;DK&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;โดมินิกา&quot;,&quot;code&quot;:&quot;DM&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;ตรินิแดดและโตเบโก&quot;,&quot;code&quot;:&quot;TT&quot;},{&quot;prefix&quot;:676,&quot;name&quot;:&quot;ตองกา&quot;,&quot;code&quot;:&quot;TO&quot;},{&quot;prefix&quot;:670,&quot;name&quot;:&quot;ติมอร์ตะวันออก&quot;,&quot;code&quot;:&quot;TL&quot;},{&quot;prefix&quot;:90,&quot;name&quot;:&quot;ตุรกี&quot;,&quot;code&quot;:&quot;TR&quot;},{&quot;prefix&quot;:216,&quot;name&quot;:&quot;ตูนิเซีย&quot;,&quot;code&quot;:&quot;TN&quot;},{&quot;prefix&quot;:688,&quot;name&quot;:&quot;ตูวาลู&quot;,&quot;code&quot;:&quot;TV&quot;},{&quot;prefix&quot;:993,&quot;name&quot;:&quot;เติร์กเมนิสถาน&quot;,&quot;code&quot;:&quot;TM&quot;},{&quot;prefix&quot;:690,&quot;name&quot;:&quot;โตเกเลา&quot;,&quot;code&quot;:&quot;TK&quot;},{&quot;prefix&quot;:228,&quot;name&quot;:&quot;โตโก&quot;,&quot;code&quot;:&quot;TG&quot;},{&quot;prefix&quot;:886,&quot;name&quot;:&quot;ไต้หวัน&quot;,&quot;code&quot;:&quot;TW&quot;},{&quot;prefix&quot;:992,&quot;name&quot;:&quot;ทาจิกิสถาน&quot;,&quot;code&quot;:&quot;TJ&quot;},{&quot;prefix&quot;:255,&quot;name&quot;:&quot;แทนซาเนีย&quot;,&quot;code&quot;:&quot;TZ&quot;},{&quot;prefix&quot;:66,&quot;name&quot;:&quot;ไทย&quot;,&quot;code&quot;:&quot;TH&quot;},{&quot;prefix&quot;:379,&quot;name&quot;:&quot;นครรัฐวาติกัน&quot;,&quot;code&quot;:&quot;VA&quot;},{&quot;prefix&quot;:47,&quot;name&quot;:&quot;นอร์เวย์&quot;,&quot;code&quot;:&quot;NO&quot;},{&quot;prefix&quot;:264,&quot;name&quot;:&quot;นามิเบีย&quot;,&quot;code&quot;:&quot;NA&quot;},{&quot;prefix&quot;:674,&quot;name&quot;:&quot;นาอูรู&quot;,&quot;code&quot;:&quot;NR&quot;},{&quot;prefix&quot;:505,&quot;name&quot;:&quot;นิการากัว&quot;,&quot;code&quot;:&quot;NI&quot;},{&quot;prefix&quot;:687,&quot;name&quot;:&quot;นิวแคลิโดเนีย&quot;,&quot;code&quot;:&quot;NC&quot;},{&quot;prefix&quot;:64,&quot;name&quot;:&quot;นิวซีแลนด์&quot;,&quot;code&quot;:&quot;NZ&quot;},{&quot;prefix&quot;:683,&quot;name&quot;:&quot;นีอูเอ&quot;,&quot;code&quot;:&quot;NU&quot;},{&quot;prefix&quot;:31,&quot;name&quot;:&quot;เนเธอร์แลนด์&quot;,&quot;code&quot;:&quot;NL&quot;},{&quot;prefix&quot;:599,&quot;name&quot;:&quot;เนเธอร์แลนด์แคริบเบียน&quot;,&quot;code&quot;:&quot;BQ&quot;},{&quot;prefix&quot;:977,&quot;name&quot;:&quot;เนปาล&quot;,&quot;code&quot;:&quot;NP&quot;},{&quot;prefix&quot;:234,&quot;name&quot;:&quot;ไนจีเรีย&quot;,&quot;code&quot;:&quot;NG&quot;},{&quot;prefix&quot;:227,&quot;name&quot;:&quot;ไนเจอร์&quot;,&quot;code&quot;:&quot;NE&quot;},{&quot;prefix&quot;:55,&quot;name&quot;:&quot;บราซิล&quot;,&quot;code&quot;:&quot;BR&quot;},{&quot;prefix&quot;:246,&quot;name&quot;:&quot;บริติชอินเดียนโอเชียนเทร์ริทอรี&quot;,&quot;code&quot;:&quot;IO&quot;},{&quot;prefix&quot;:673,&quot;name&quot;:&quot;บรูไน&quot;,&quot;code&quot;:&quot;BN&quot;},{&quot;prefix&quot;:267,&quot;name&quot;:&quot;บอตสวานา&quot;,&quot;code&quot;:&quot;BW&quot;},{&quot;prefix&quot;:387,&quot;name&quot;:&quot;บอสเนียและเฮอร์เซโกวีนา&quot;,&quot;code&quot;:&quot;BA&quot;},{&quot;prefix&quot;:880,&quot;name&quot;:&quot;บังกลาเทศ&quot;,&quot;code&quot;:&quot;BD&quot;},{&quot;prefix&quot;:359,&quot;name&quot;:&quot;บัลแกเรีย&quot;,&quot;code&quot;:&quot;BG&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;บาร์เบโดส&quot;,&quot;code&quot;:&quot;BB&quot;},{&quot;prefix&quot;:973,&quot;name&quot;:&quot;บาห์เรน&quot;,&quot;code&quot;:&quot;BH&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;บาฮามาส&quot;,&quot;code&quot;:&quot;BS&quot;},{&quot;prefix&quot;:257,&quot;name&quot;:&quot;บุรุนดี&quot;,&quot;code&quot;:&quot;BI&quot;},{&quot;prefix&quot;:226,&quot;name&quot;:&quot;บูร์กินาฟาโซ&quot;,&quot;code&quot;:&quot;BF&quot;},{&quot;prefix&quot;:229,&quot;name&quot;:&quot;เบนิน&quot;,&quot;code&quot;:&quot;BJ&quot;},{&quot;prefix&quot;:32,&quot;name&quot;:&quot;เบลเยียม&quot;,&quot;code&quot;:&quot;BE&quot;},{&quot;prefix&quot;:375,&quot;name&quot;:&quot;เบลารุส&quot;,&quot;code&quot;:&quot;BY&quot;},{&quot;prefix&quot;:501,&quot;name&quot;:&quot;เบลีซ&quot;,&quot;code&quot;:&quot;BZ&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เบอร์มิวดา&quot;,&quot;code&quot;:&quot;BM&quot;},{&quot;prefix&quot;:591,&quot;name&quot;:&quot;โบลิเวีย&quot;,&quot;code&quot;:&quot;BO&quot;},{&quot;prefix&quot;:92,&quot;name&quot;:&quot;ปากีสถาน&quot;,&quot;code&quot;:&quot;PK&quot;},{&quot;prefix&quot;:507,&quot;name&quot;:&quot;ปานามา&quot;,&quot;code&quot;:&quot;PA&quot;},{&quot;prefix&quot;:675,&quot;name&quot;:&quot;ปาปัวนิวกินี&quot;,&quot;code&quot;:&quot;PG&quot;},{&quot;prefix&quot;:595,&quot;name&quot;:&quot;ปารากวัย&quot;,&quot;code&quot;:&quot;PY&quot;},{&quot;prefix&quot;:970,&quot;name&quot;:&quot;ปาเลสไตน์&quot;,&quot;code&quot;:&quot;PS&quot;},{&quot;prefix&quot;:680,&quot;name&quot;:&quot;ปาเลา&quot;,&quot;code&quot;:&quot;PW&quot;},{&quot;prefix&quot;:51,&quot;name&quot;:&quot;เปรู&quot;,&quot;code&quot;:&quot;PE&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;เปอร์โตริโก&quot;,&quot;code&quot;:&quot;PR&quot;},{&quot;prefix&quot;:351,&quot;name&quot;:&quot;โปรตุเกส&quot;,&quot;code&quot;:&quot;PT&quot;},{&quot;prefix&quot;:48,&quot;name&quot;:&quot;โปแลนด์&quot;,&quot;code&quot;:&quot;PL&quot;},{&quot;prefix&quot;:33,&quot;name&quot;:&quot;ฝรั่งเศส&quot;,&quot;code&quot;:&quot;FR&quot;},{&quot;prefix&quot;:679,&quot;name&quot;:&quot;ฟิจิ&quot;,&quot;code&quot;:&quot;FJ&quot;},{&quot;prefix&quot;:358,&quot;name&quot;:&quot;ฟินแลนด์&quot;,&quot;code&quot;:&quot;FI&quot;},{&quot;prefix&quot;:63,&quot;name&quot;:&quot;ฟิลิปปินส์&quot;,&quot;code&quot;:&quot;PH&quot;},{&quot;prefix&quot;:594,&quot;name&quot;:&quot;เฟรนช์เกียนา&quot;,&quot;code&quot;:&quot;GF&quot;},{&quot;prefix&quot;:689,&quot;name&quot;:&quot;เฟรนช์โปลินีเซีย&quot;,&quot;code&quot;:&quot;PF&quot;},{&quot;prefix&quot;:975,&quot;name&quot;:&quot;ภูฏาน&quot;,&quot;code&quot;:&quot;BT&quot;},{&quot;prefix&quot;:976,&quot;name&quot;:&quot;มองโกเลีย&quot;,&quot;code&quot;:&quot;MN&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;มอนต์เซอร์รัต&quot;,&quot;code&quot;:&quot;MS&quot;},{&quot;prefix&quot;:382,&quot;name&quot;:&quot;มอนเตเนโกร&quot;,&quot;code&quot;:&quot;ME&quot;},{&quot;prefix&quot;:230,&quot;name&quot;:&quot;มอริเชียส&quot;,&quot;code&quot;:&quot;MU&quot;},{&quot;prefix&quot;:222,&quot;name&quot;:&quot;มอริเตเนีย&quot;,&quot;code&quot;:&quot;MR&quot;},{&quot;prefix&quot;:373,&quot;name&quot;:&quot;มอลโดวา&quot;,&quot;code&quot;:&quot;MD&quot;},{&quot;prefix&quot;:356,&quot;name&quot;:&quot;มอลตา&quot;,&quot;code&quot;:&quot;MT&quot;},{&quot;prefix&quot;:960,&quot;name&quot;:&quot;มัลดีฟส์&quot;,&quot;code&quot;:&quot;MV&quot;},{&quot;prefix&quot;:853,&quot;name&quot;:&quot;มาเก๊า&quot;,&quot;code&quot;:&quot;MO&quot;},{&quot;prefix&quot;:261,&quot;name&quot;:&quot;มาดากัสการ์&quot;,&quot;code&quot;:&quot;MG&quot;},{&quot;prefix&quot;:262,&quot;name&quot;:&quot;มายอต&quot;,&quot;code&quot;:&quot;YT&quot;},{&quot;prefix&quot;:596,&quot;name&quot;:&quot;มาร์ตินีก&quot;,&quot;code&quot;:&quot;MQ&quot;},{&quot;prefix&quot;:265,&quot;name&quot;:&quot;มาลาวี&quot;,&quot;code&quot;:&quot;MW&quot;},{&quot;prefix&quot;:223,&quot;name&quot;:&quot;มาลี&quot;,&quot;code&quot;:&quot;ML&quot;},{&quot;prefix&quot;:60,&quot;name&quot;:&quot;มาเลเซีย&quot;,&quot;code&quot;:&quot;MY&quot;},{&quot;prefix&quot;:52,&quot;name&quot;:&quot;เม็กซิโก&quot;,&quot;code&quot;:&quot;MX&quot;},{&quot;prefix&quot;:95,&quot;name&quot;:&quot;เมียนม่าร์ [พม่า]&quot;,&quot;code&quot;:&quot;MM&quot;},{&quot;prefix&quot;:258,&quot;name&quot;:&quot;โมซัมบิก&quot;,&quot;code&quot;:&quot;MZ&quot;},{&quot;prefix&quot;:377,&quot;name&quot;:&quot;โมนาโก&quot;,&quot;code&quot;:&quot;MC&quot;},{&quot;prefix&quot;:212,&quot;name&quot;:&quot;โมร็อกโก&quot;,&quot;code&quot;:&quot;MA&quot;},{&quot;prefix&quot;:691,&quot;name&quot;:&quot;ไมโครนีเซีย&quot;,&quot;code&quot;:&quot;FM&quot;},{&quot;prefix&quot;:350,&quot;name&quot;:&quot;ยิบรอลตาร์&quot;,&quot;code&quot;:&quot;GI&quot;},{&quot;prefix&quot;:256,&quot;name&quot;:&quot;ยูกันดา&quot;,&quot;code&quot;:&quot;UG&quot;},{&quot;prefix&quot;:380,&quot;name&quot;:&quot;ยูเครน&quot;,&quot;code&quot;:&quot;UA&quot;},{&quot;prefix&quot;:967,&quot;name&quot;:&quot;เยเมน&quot;,&quot;code&quot;:&quot;YE&quot;},{&quot;prefix&quot;:49,&quot;name&quot;:&quot;เยอรมนี&quot;,&quot;code&quot;:&quot;DE&quot;},{&quot;prefix&quot;:250,&quot;name&quot;:&quot;รวันดา&quot;,&quot;code&quot;:&quot;RW&quot;},{&quot;prefix&quot;:7,&quot;name&quot;:&quot;รัสเซีย&quot;,&quot;code&quot;:&quot;RU&quot;},{&quot;prefix&quot;:262,&quot;name&quot;:&quot;เรอูนียง&quot;,&quot;code&quot;:&quot;RE&quot;},{&quot;prefix&quot;:40,&quot;name&quot;:&quot;โรมาเนีย&quot;,&quot;code&quot;:&quot;RO&quot;},{&quot;prefix&quot;:352,&quot;name&quot;:&quot;ลักเซมเบิร์ก&quot;,&quot;code&quot;:&quot;LU&quot;},{&quot;prefix&quot;:371,&quot;name&quot;:&quot;ลัตเวีย&quot;,&quot;code&quot;:&quot;LV&quot;},{&quot;prefix&quot;:856,&quot;name&quot;:&quot;ลาว&quot;,&quot;code&quot;:&quot;LA&quot;},{&quot;prefix&quot;:423,&quot;name&quot;:&quot;ลิกเตนสไตน์&quot;,&quot;code&quot;:&quot;LI&quot;},{&quot;prefix&quot;:370,&quot;name&quot;:&quot;ลิทัวเนีย&quot;,&quot;code&quot;:&quot;LT&quot;},{&quot;prefix&quot;:218,&quot;name&quot;:&quot;ลิเบีย&quot;,&quot;code&quot;:&quot;LY&quot;},{&quot;prefix&quot;:266,&quot;name&quot;:&quot;เลโซโท&quot;,&quot;code&quot;:&quot;LS&quot;},{&quot;prefix&quot;:961,&quot;name&quot;:&quot;เลบานอน&quot;,&quot;code&quot;:&quot;LB&quot;},{&quot;prefix&quot;:231,&quot;name&quot;:&quot;ไลบีเรีย&quot;,&quot;code&quot;:&quot;LR&quot;},{&quot;prefix&quot;:678,&quot;name&quot;:&quot;วานูอาตู&quot;,&quot;code&quot;:&quot;VU&quot;},{&quot;prefix&quot;:681,&quot;name&quot;:&quot;วาลลิสและฟุตูนา&quot;,&quot;code&quot;:&quot;WF&quot;},{&quot;prefix&quot;:58,&quot;name&quot;:&quot;เวเนซุเอลา&quot;,&quot;code&quot;:&quot;VE&quot;},{&quot;prefix&quot;:84,&quot;name&quot;:&quot;เวียดนาม&quot;,&quot;code&quot;:&quot;VN&quot;},{&quot;prefix&quot;:94,&quot;name&quot;:&quot;ศรีลังกา&quot;,&quot;code&quot;:&quot;LK&quot;},{&quot;prefix&quot;:34,&quot;name&quot;:&quot;สเปน&quot;,&quot;code&quot;:&quot;ES&quot;},{&quot;prefix&quot;:47,&quot;name&quot;:&quot;สฟาลบาร์และยานไมเอน&quot;,&quot;code&quot;:&quot;SJ&quot;},{&quot;prefix&quot;:421,&quot;name&quot;:&quot;สโลวะเกีย&quot;,&quot;code&quot;:&quot;SK&quot;},{&quot;prefix&quot;:386,&quot;name&quot;:&quot;สโลวีเนีย&quot;,&quot;code&quot;:&quot;SI&quot;},{&quot;prefix&quot;:268,&quot;name&quot;:&quot;สวาซิแลนด์&quot;,&quot;code&quot;:&quot;SZ&quot;},{&quot;prefix&quot;:41,&quot;name&quot;:&quot;สวิตเซอร์แลนด์&quot;,&quot;code&quot;:&quot;CH&quot;},{&quot;prefix&quot;:46,&quot;name&quot;:&quot;สวีเดน&quot;,&quot;code&quot;:&quot;SE&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;สหรัฐอเมริกา&quot;,&quot;code&quot;:&quot;US&quot;},{&quot;prefix&quot;:971,&quot;name&quot;:&quot;สหรัฐอาหรับเอมิเรตส์&quot;,&quot;code&quot;:&quot;AE&quot;},{&quot;prefix&quot;:44,&quot;name&quot;:&quot;สหราชอาณาจักร&quot;,&quot;code&quot;:&quot;GB&quot;},{&quot;prefix&quot;:420,&quot;name&quot;:&quot;สาธารณรัฐเช็ก&quot;,&quot;code&quot;:&quot;CZ&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;สาธารณรัฐโดมินิกัน&quot;,&quot;code&quot;:&quot;DO&quot;},{&quot;prefix&quot;:236,&quot;name&quot;:&quot;สาธารณรัฐแอฟริกากลาง&quot;,&quot;code&quot;:&quot;CF&quot;},{&quot;prefix&quot;:65,&quot;name&quot;:&quot;สิงคโปร์&quot;,&quot;code&quot;:&quot;SG&quot;},{&quot;prefix&quot;:682,&quot;name&quot;:&quot;หมู่เกาะคุก&quot;,&quot;code&quot;:&quot;CK&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;หมู่เกาะเคย์แมน&quot;,&quot;code&quot;:&quot;KY&quot;},{&quot;prefix&quot;:61,&quot;name&quot;:&quot;หมู่เกาะโคโคส&quot;,&quot;code&quot;:&quot;CC&quot;},{&quot;prefix&quot;:677,&quot;name&quot;:&quot;หมู่เกาะโซโลมอน&quot;,&quot;code&quot;:&quot;SB&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;หมู่เกาะเติกส์และหมู่เกาะเคคอส&quot;,&quot;code&quot;:&quot;TC&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;หมู่เกาะนอร์เทิร์นมาเรียนา&quot;,&quot;code&quot;:&quot;MP&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;หมู่เกาะบริติชเวอร์จิน&quot;,&quot;code&quot;:&quot;VG&quot;},{&quot;prefix&quot;:64,&quot;name&quot;:&quot;หมู่เกาะพิตแคร์น&quot;,&quot;code&quot;:&quot;PN&quot;},{&quot;prefix&quot;:500,&quot;name&quot;:&quot;หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]&quot;,&quot;code&quot;:&quot;FK&quot;},{&quot;prefix&quot;:298,&quot;name&quot;:&quot;หมู่เกาะแฟโร&quot;,&quot;code&quot;:&quot;FO&quot;},{&quot;prefix&quot;:692,&quot;name&quot;:&quot;หมู่เกาะมาร์แชลล์&quot;,&quot;code&quot;:&quot;MH&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;หมู่เกาะยูเอสเวอร์จิน&quot;,&quot;code&quot;:&quot;VI&quot;},{&quot;prefix&quot;:358,&quot;name&quot;:&quot;หมู่เกาะโอลันด์&quot;,&quot;code&quot;:&quot;AX&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;อเมริกันซามัว&quot;,&quot;code&quot;:&quot;AS&quot;},{&quot;prefix&quot;:61,&quot;name&quot;:&quot;ออสเตรเลีย&quot;,&quot;code&quot;:&quot;AU&quot;},{&quot;prefix&quot;:43,&quot;name&quot;:&quot;ออสเตรีย&quot;,&quot;code&quot;:&quot;AT&quot;},{&quot;prefix&quot;:376,&quot;name&quot;:&quot;อันดอร์รา&quot;,&quot;code&quot;:&quot;AD&quot;},{&quot;prefix&quot;:93,&quot;name&quot;:&quot;อัฟกานิสถาน&quot;,&quot;code&quot;:&quot;AF&quot;},{&quot;prefix&quot;:994,&quot;name&quot;:&quot;อาเซอร์ไบจาน&quot;,&quot;code&quot;:&quot;AZ&quot;},{&quot;prefix&quot;:54,&quot;name&quot;:&quot;อาร์เจนตินา&quot;,&quot;code&quot;:&quot;AR&quot;},{&quot;prefix&quot;:374,&quot;name&quot;:&quot;อาร์เมเนีย&quot;,&quot;code&quot;:&quot;AM&quot;},{&quot;prefix&quot;:297,&quot;name&quot;:&quot;อารูบา&quot;,&quot;code&quot;:&quot;AW&quot;},{&quot;prefix&quot;:240,&quot;name&quot;:&quot;อิเควทอเรียลกินี&quot;,&quot;code&quot;:&quot;GQ&quot;},{&quot;prefix&quot;:39,&quot;name&quot;:&quot;อิตาลี&quot;,&quot;code&quot;:&quot;IT&quot;},{&quot;prefix&quot;:91,&quot;name&quot;:&quot;อินเดีย&quot;,&quot;code&quot;:&quot;IN&quot;},{&quot;prefix&quot;:62,&quot;name&quot;:&quot;อินโดนีเซีย&quot;,&quot;code&quot;:&quot;ID&quot;},{&quot;prefix&quot;:964,&quot;name&quot;:&quot;อิรัก&quot;,&quot;code&quot;:&quot;IQ&quot;},{&quot;prefix&quot;:972,&quot;name&quot;:&quot;อิสราเอล&quot;,&quot;code&quot;:&quot;IL&quot;},{&quot;prefix&quot;:20,&quot;name&quot;:&quot;อียิปต์&quot;,&quot;code&quot;:&quot;EG&quot;},{&quot;prefix&quot;:998,&quot;name&quot;:&quot;อุซเบกิสถาน&quot;,&quot;code&quot;:&quot;UZ&quot;},{&quot;prefix&quot;:598,&quot;name&quot;:&quot;อุรุกวัย&quot;,&quot;code&quot;:&quot;UY&quot;},{&quot;prefix&quot;:593,&quot;name&quot;:&quot;เอกวาดอร์&quot;,&quot;code&quot;:&quot;EC&quot;},{&quot;prefix&quot;:251,&quot;name&quot;:&quot;เอธิโอเปีย&quot;,&quot;code&quot;:&quot;ET&quot;},{&quot;prefix&quot;:291,&quot;name&quot;:&quot;เอริเทรีย&quot;,&quot;code&quot;:&quot;ER&quot;},{&quot;prefix&quot;:503,&quot;name&quot;:&quot;เอลซัลวาดอร์&quot;,&quot;code&quot;:&quot;SV&quot;},{&quot;prefix&quot;:372,&quot;name&quot;:&quot;เอสโตเนีย&quot;,&quot;code&quot;:&quot;EE&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;แองกวิลลา&quot;,&quot;code&quot;:&quot;AI&quot;},{&quot;prefix&quot;:244,&quot;name&quot;:&quot;แองโกลา&quot;,&quot;code&quot;:&quot;AO&quot;},{&quot;prefix&quot;:1,&quot;name&quot;:&quot;แอนติกาและบาร์บูดา&quot;,&quot;code&quot;:&quot;AG&quot;},{&quot;prefix&quot;:27,&quot;name&quot;:&quot;แอฟริกาใต้&quot;,&quot;code&quot;:&quot;ZA&quot;},{&quot;prefix&quot;:213,&quot;name&quot;:&quot;แอลจีเรีย&quot;,&quot;code&quot;:&quot;DZ&quot;},{&quot;prefix&quot;:355,&quot;name&quot;:&quot;แอลเบเนีย&quot;,&quot;code&quot;:&quot;AL&quot;},{&quot;prefix&quot;:968,&quot;name&quot;:&quot;โอมาน&quot;,&quot;code&quot;:&quot;OM&quot;},{&quot;prefix&quot;:354,&quot;name&quot;:&quot;ไอซ์แลนด์&quot;,&quot;code&quot;:&quot;IS&quot;},{&quot;prefix&quot;:353,&quot;name&quot;:&quot;ไอร์แลนด์&quot;,&quot;code&quot;:&quot;IE&quot;},{&quot;prefix&quot;:225,&quot;name&quot;:&quot;ไอวอรี่โคสต์&quot;,&quot;code&quot;:&quot;CI&quot;},{&quot;prefix&quot;:852,&quot;name&quot;:&quot;ฮ่องกง&quot;,&quot;code&quot;:&quot;HK&quot;},{&quot;prefix&quot;:504,&quot;name&quot;:&quot;ฮอนดูรัส&quot;,&quot;code&quot;:&quot;HN&quot;},{&quot;prefix&quot;:36,&quot;name&quot;:&quot;ฮังการี&quot;,&quot;code&quot;:&quot;HU&quot;},{&quot;prefix&quot;:509,&quot;name&quot;:&quot;เฮติ&quot;,&quot;code&quot;:&quot;HT&quot;}]" id="_bootstrap-countries_data" />
		<meta content="{&quot;id&quot;:&quot;5aa690a7&quot;,&quot;payload&quot;:{}}" id="_bootstrap-phone_number_input_widget" />
		<meta content="{&quot;payload&quot;:{&quot;viewProfileUrl&quot;:&quot;https://th.airbnb.com/users/show/98642671&quot;,&quot;userId&quot;:98642671,&quot;keyPrefix&quot;:&quot;9d15049635dddd2774b94cbfc3193213/3n1m5v/&quot;,&quot;section&quot;:null}}" id="_bootstrap-edit_profile" />
		<meta content="{&quot;env&quot;:&quot;production&quot;,&quot;client_id&quot;:&quot;5ca541ad-47b9-4b16-8045-2f4c6e830450&quot;,&quot;client_key&quot;:&quot;production_r29fkzj4_pfpfmbt48yh4ht8c&quot;}" id="_bootstrap-amex_checkout" />
		<meta content="{&quot;js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/surveyair.bundle-fa6af87d27c96e92f3a1.js&quot;,&quot;css&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/surveyair-46037f656707ea1bcd124dc2999262e4.css&quot;}" id="_bootstrap-surveyair" />
		<meta content="{&quot;js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/browser-update.bundle-451ff48ded2d346273cb.js&quot;}" id="_bootstrap-browser-update" />
		<meta content="&quot;https://a0.muscache.com/airbnb/static/china_typeahead_data-06cee030dd9f4e721c7044d7e83e002e.json&quot;" id="_bootstrap-china_typeahead_data" />
		<meta content="{&quot;mario_copy_monorail_p3_modal.title.variation0&quot;:&quot;ขอต้อนรับสู่ Airbnb&quot;,&quot;mario_copy_monorail_p3_modal.title.variation1&quot;:&quot;Airbnb มีอยู่ในเกือบทุกแห่งหน&quot;,&quot;mario_copy_monorail_p3_modal.title.variation2&quot;:&quot;บ้าน Airbnb ยอดเยี่ยมที่ราคาเท่าใดก็ตาม&quot;,&quot;mario_copy_monorail_p3_modal.title.variation3&quot;:&quot;มีประสบการณ์ Airbnb แบบห้าดาว&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation0&quot;:&quot;เลือกจากบ้านไม่เหมือนใครมากกว่า 2 ล้านหลังสำหรับการเดินทางครั้งถัดไปของคุณ ไม่ว่าจะเป็นกับครอบครัว เพื่อนหรือเพื่องาน&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation1&quot;:&quot;หาบ้าน 2 ล้านหลังในเกือบทุกเมืองทั่วโลก และเนื่องจากมีเมืองอยู่ทั่วโลก คุณสามารถพักในที่ที่คุณต้องการ&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation2&quot;:&quot;จองสถานที่ที่ตรงกับงบประมาณใดก็ตาม ตั้งแต่สตูดิโอเรียบง่ายไปจนถึงบ้านหรู และหาบ้านที่มีสิ่งอำนวยความสะดวกพื้นฐาน เช่น WiFi และครัวโดยไม่มีค่าใช้จ่ายเพิ่มเติม&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation3&quot;:&quot;เลือกจากบ้านไร้ที่ติและออกแบบมาอย่างดี ทั้งหมดนี้มีบุคลิกและรูปแบบการให้เช่าที่พักของเจ้าของที่พักแต่ละคนต่างกันไป&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation0&quot;:&quot;เครดิตการเดินทาง&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation1&quot;:&quot;เชิญเพื่อน&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation2&quot;:&quot;แนะนำเพื่อน&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation3&quot;:&quot;ผู้ได้รับการแนะนำ&quot;,&quot;mario_copy_monorail_referrals.banner_body_text.variation0&quot;:&quot;ให้ส่วนลดเพื่อคุณ %{sign_up_credit} สำหรับการเดินทางของเขาบน Airbnb และคุณจะได้รับเครดิตการเดินทางถึง %{total_credit}&quot;,&quot;engagement_overlay.single_page.title&quot;:&quot;ยินดีต้อนรับสู่ Airbnb&quot;,&quot;engagement_overlay.single_page.summary&quot;:&quot;เลือกจากบ้านไม่เหมือนใครมากกว่า 2 ล้านหลังสำหรับการเดินทางครั้งถัดไปของคุณ ไม่ว่าจะเป็นกับครอบครัว เพื่อนหรือเพื่องาน&quot;,&quot;engagement_overlay.single_page.complete&quot;:&quot;เริ่มต้น&quot;,&quot;3things_headline_onboarding&quot;:&quot;3 สิ่งที่ควรทราบเกี่ยวกับ Airbnb&quot;,&quot;3things_body_onboarding&quot;:&quot;นี่คือเหตุผลที่คนหลายล้านคนเลือก Airbnb เมื่อพวกเขาเดินทางกับครอบครัว เพื่อนหรือเพื่องาน&quot;,&quot;quality1_headline_onboarding&quot;:&quot;ประสบการณ์ 5 ดาวในสถานที่ไม่เหมือนใคร&quot;,&quot;quality1_body_onboarding&quot;:&quot;หาบ้านสะอาดและออกแบบอย่างสวยงามทั่วโลก และได้รับความคิดเห็นและคำแนะนำโดยผู้เข้าพักในอดีต&quot;,&quot;value1_headline_onboarding&quot;:&quot;ความสะดวกสบายของบ้านที่ราคาดีเยี่ยม&quot;,&quot;value1_body_onboarding&quot;:&quot;จองสถานที่ที่เหมาะกับงบเท่าใดก็ตาม บ้านหลายหลังก็มี WiFi ครัวและสิ่งอำนวยความสะดวกพื้นฐานโดยไม่ต้องจ่ายค่าใช้จ่ายเพิ่มเติม&quot;,&quot;location1_headline_onboarding&quot;:&quot;บ้านหลายล้านหลังในมากกว่า 190 ประเทศ&quot;,&quot;location1_body_onboarding&quot;:&quot;พักในสถานที่ที่คุณต้องการ ไม่ว่าจะเป็นใจกลางเมืองหรือในย่านมีเสน่ห์หรือเงียบ&quot;,&quot;service1_headline_onboarding&quot;:&quot;Hosts care about your stay&quot;,&quot;service1_body_onboarding&quot;:&quot;Instead of a concierge, you’ll have a host. They’re there to answer questions about their home or neighborhood.&quot;,&quot;shared.Next&quot;:&quot;ถัดไป&quot;,&quot;shared.Back&quot;:&quot;กลับไป&quot;,&quot;shared.Got it&quot;:&quot;เข้าใจแล้ว&quot;,&quot;engagement.onboarding.modal.title&quot;:&quot;หาบ้านใน %{localized_city}&quot;,&quot;start_searching&quot;:&quot;เริ่มค้นหา&quot;,&quot;engagement.discover&quot;:&quot;Discover entire homes and private rooms perfect for any trip.&quot;,&quot;first_visit_survey.help_us&quot;:&quot;ช่วยเราเรียนรู้เพิ่มเติมเกี่ยวกับคนที่เข้าชม Airbnb&quot;,&quot;first_visit_survey.ready&quot;:&quot;คุณรู้สึกว่าคุณพร้อมแค่ไหนที่จะลองใช้ Airbnb สำหรับการเดินทางครั้งถัดไปของคุณ&quot;,&quot;first_visit_survey.ready.not_ready&quot;:&quot;ไม่พร้อมเลย&quot;,&quot;first_visit_survey.ready.ready&quot;:&quot;พร้อมปานกลาง&quot;,&quot;first_visit_survey.ready.sort_of_ready&quot;:&quot;พร้อมเล็กน้อย&quot;,&quot;first_visit_survey.ready.totally_ready&quot;:&quot;พร้อมอย่างยิ่ง&quot;,&quot;first_visit_survey.ready.very_ready&quot;:&quot;พร้อมมาก&quot;,&quot;first_visit_survey.planning_trip&quot;:&quot;คุณกำลังวางแผนการเดินทางอยู่ใช่ไหม&quot;,&quot;first_visit_survey.planning_trip.trip_in_mind&quot;:&quot;ใช่ ฉันรู้ว่าฉันกำลังจะไปที่ไหน&quot;,&quot;first_visit_survey.planning_trip.not_sure_where&quot;:&quot;ใช่ แต่ฉันไม่รู้ว่าฉันกำลังไปที่ไหน&quot;,&quot;first_visit_survey.planning_trip.no_plans&quot;:&quot;ฉันเพียงมองเฉยๆ&quot;,&quot;signup_survey.how_learned&quot;:&quot;คุณได้ทราบว่า Airbnb คืออะไรครั้งแรกที่ไหน&quot;,&quot;signup_survey.event&quot;:&quot;ที่งานอีเวนท์&quot;,&quot;signup_survey.friend_family&quot;:&quot;From a friend or family member&quot;,&quot;signup_survey.internet_search&quot;:&quot;Internet search&quot;,&quot;signup_survey.news_article&quot;:&quot;News article&quot;,&quot;signup_survey.online_ad&quot;:&quot;Online advertisement&quot;,&quot;signup_survey.print_ad&quot;:&quot;Print ad, billboard, or poster&quot;,&quot;signup_survey.social_media&quot;:&quot;Social media or blog post&quot;,&quot;signup_survey.tv&quot;:&quot;ทีวี&quot;,&quot;signup_survey.dont_remember&quot;:&quot;I don’t remember&quot;,&quot;signup_survey.other&quot;:&quot;อื่นๆ&quot;,&quot;skip&quot;:&quot;ข้าม&quot;,&quot;guest_picker_guests_label&quot;:&quot;%{smart_count} guest||||%{smart_count} guests&quot;,&quot;guest_picker_adult_count&quot;:&quot;%{smart_count} adult||||%{smart_count} adults&quot;,&quot;guest_picker_child_count&quot;:&quot;%{smart_count} child||||%{smart_count} children&quot;,&quot;guest_picker_infant_count&quot;:&quot;%{smart_count} infant||||%{smart_count} infants&quot;,&quot;guest_picker_age_range&quot;:&quot;อายุ %{min} - %{max}&quot;,&quot;guest_picker_age_under&quot;:&quot;อายุน้อยกว่า %{age} ปี&quot;,&quot;guest_picker_guest_maximum&quot;:&quot;จำนวนผู้เข้าพักมากสุด %{smart_count} คน&quot;,&quot;guest_picker_close&quot;:&quot;close&quot;,&quot;guest_picker_increment&quot;:&quot;Increment number of %{label}&quot;,&quot;guest_picker_decrement&quot;:&quot;Decrement number of %{label}&quot;,&quot;guest_picker_adults&quot;:&quot;adults&quot;,&quot;guest_picker_children&quot;:&quot;children&quot;,&quot;guest_picker_infants&quot;:&quot;infants&quot;,&quot;saved_search_search_for_city_address_landmark&quot;:&quot;ค้นหาตามเมือง ที่อยู่ สถานที่ที่น่าสนใจ...&quot;,&quot;saved_search_search_button&quot;:&quot;ค้นหา&quot;,&quot;saved_search_please_set_location&quot;:&quot;กรุณาตั้งค่าสถานที่ตั้ง&quot;,&quot;saved_search_checkin&quot;:&quot;เช็คอิน&quot;,&quot;saved_search_checkout&quot;:&quot;เช็คเอาท์&quot;,&quot;saved_search_number_of_guests&quot;:&quot;จำนวนผู้เข้าพัก&quot;,&quot;saved_search_recent_searches&quot;:&quot;การค้นหาเมื่อเร็วๆนี้&quot;,&quot;saved_search_destinations&quot;:&quot;จุดหมายปลายทาง&quot;,&quot;saved_search_guests&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;android.strings.search_where_to&quot;:&quot;ไปที่ไหน&quot;,&quot;shared.Close&quot;:&quot;ปิด&quot;,&quot;Clear Dates&quot;:&quot;ลบวันที่&quot;,&quot;shipping_address.add&quot;:&quot;เพิ่มที่อยู่ในการจัดส่ง&quot;,&quot;shipping_address.edit_address&quot;:&quot;แก้ไขที่อยู่&quot;,&quot;shipping_address.edit&quot;:&quot;แก้ไข&quot;,&quot;shipping_address.title&quot;:&quot;ที่อยู่ในการจัดส่ง&quot;,&quot;shipping_address.subtitle&quot;:&quot;เราจะส่งของขวัญสำหรับเจ้าของที่พักให้คุณในบางโอกาส&quot;,&quot;shared.save&quot;:&quot;บันทึก&quot;,&quot;shipping_address.street&quot;:&quot;ที่อยู่&quot;,&quot;shipping_address.street.general&quot;:&quot;ที่อยู่บรรทัดที่ 1&quot;,&quot;shipping_address.apt&quot;:&quot;อพาร์ทเมนท์ ห้องชุด อาคาร (เลือกได้)&quot;,&quot;shipping_address.apt.general&quot;:&quot;ที่อยู่บรรทัดที่ 2&quot;,&quot;shipping_address.zipcode&quot;:&quot;รหัสไปรษณีย์&quot;,&quot;shipping_address.zipcode.general&quot;:&quot;รหัสไปรษณีย์&quot;,&quot;shipping_address.city&quot;:&quot;เมือง&quot;,&quot;shipping_address.city.general&quot;:&quot;เมือง / เขต&quot;,&quot;shipping_address.state&quot;:&quot;รัฐ&quot;,&quot;shipping_address.state.general&quot;:&quot;รัฐ / จังหวัด / มณฑล / ภูมิภาค&quot;,&quot;shipping_address.country&quot;:&quot;ประเทศ&quot;,&quot;shipping_address.suggest.title&quot;:&quot;ที่อยู่ที่แนะนำ&quot;,&quot;shipping_address.suggest.subtitle&quot;:&quot;คุณต้องการใช้อันไหน?&quot;,&quot;shipping_address.suggested&quot;:&quot;ที่แนะนำ&quot;,&quot;shipping_address.original&quot;:&quot;ดั้งเดิม&quot;,&quot;shipping_address.incomplete&quot;:&quot;โปรดกรอกที่อยู่และดำเนินการต่อ&quot;,&quot;shipping_address.invalid&quot;:&quot;ไม่พบที่อยู่ ตรวจสอบที่อยู่และลองใหม่&quot;,&quot;phone_number_replace_widget.enter_code_msg&quot;:&quot;เราได้ส่งรหัสไป&quot;,&quot;phone_number_widget.verify_validation_error&quot;:&quot;โปรดใส่รหัสยืนยันตัวตน&quot;,&quot;phone_number_widget.number_too_short&quot;:&quot;หมายเลขโทรศัพท์ที่กรอกสั้นเกินไป&quot;,&quot;phone_number_widget.please_enter_a_number&quot;:&quot;กรุณากรอกหมายเลขโทรศัพท์&quot;,&quot;phone_number_widget.verification_code_four_digits&quot;:&quot;รหัสยืนยันตัวตนควรเป็นตัวเลข 4 หลัก&quot;,&quot;phone_verification.not_in_country&quot;:&quot;ไม่ใช่ใน %{country_name} ใช่ไหม&quot;,&quot;phone_verification.change_country&quot;:&quot;%{link_start}เปลี่ยนประเทศ%{link_end}&quot;,&quot;shared.Verify via SMS&quot;:&quot;ตรวจสอบความถูกต้องทาง SMS&quot;,&quot;shared.Verify via Call&quot;:&quot;ตรวจสอบความถูกต้องด้วยการโทร&quot;,&quot;shared.why_verify&quot;:&quot;ทำไมต้องตรวจสอบความถูกต้อง&quot;,&quot;shared.Verify&quot;:&quot;ตรวจสอบความถูกต้อง&quot;,&quot;phone_verification.enter_verification_code_via_sms&quot;:&quot;ตกลง ตรวจดูโทรศัพท์ของคุณ %{phone_number} เพื่อดูข้อความจากเรา กรอกรหัสเป็นตัวเลข 4 หลัก&quot;,&quot;phone_verification.enter_verification_code_via_call&quot;:&quot;ตกลง เราจะโทรหาเบอร์ %{phone_number} พร้อมรหัส กรอกรหัสเป็นตัวเลข 4 หลัก&quot;,&quot;shared.Try again&quot;:&quot;ลองใหม่&quot;,&quot;shared.Call me instead&quot;:&quot;โทรหาฉันแทน&quot;,&quot;shared.Text me instead&quot;:&quot;ส่งข้อความถึงฉันแทน&quot;,&quot;response_from_you&quot;:&quot;การตอบกลับจากคุณ:&quot;,&quot;error_saving_your_response&quot;:&quot;ขออภัย การตอบกลับความคิดเห็นนี้มีข้อผิดพลาด&quot;,&quot;smart_banner.title&quot;:&quot;Airbnb สำหรับ iOS&quot;,&quot;smart_banner.title_android&quot;:&quot;Airbnb สำหรับ Android&quot;,&quot;smart_banner.INSTALL&quot;:&quot;ติดตั้ง&quot;,&quot;smart_banner.OPEN MOBILE APP&quot;:&quot;เปิด&quot;,&quot;shared.Close&quot;:&quot;ปิด&quot;,&quot;Password&quot;:&quot;รหัสผ่าน&quot;,&quot;users.Confirm_Password_to_Continue&quot;:&quot;ยืนยันรหัสผ่านเพื่อดำเนินการต่อ&quot;,&quot;users.Confirm_Password&quot;:&quot;ยืนยันรหัสผ่าน&quot;,&quot;users.Cancel&quot;:&quot;ยกเลิก&quot;,&quot;users.Please_enter_your_Airbnb_password_to_continue.&quot;:&quot;เพื่อความปลอดภัยของคุณ โปรดกรอกรหัสผ่าน Airbnb เพื่อดำเนินการต่อ&quot;,&quot;user.signup.forgot_password&quot;:&quot;ลืมรหัสผ่านใช่ไหม&quot;,&quot;users.Confirm_Facebook_Password&quot;:&quot;ยืนยันรหัสผ่าน Facebook&quot;,&quot;home&quot;:&quot;หน้าแรก&quot;,&quot;download_the_app&quot;:&quot;ดาวน์โหลดแอพ&quot;,&quot;sign_up&quot;:&quot;ลงทะเบียน&quot;,&quot;log_in&quot;:&quot;เข้าสู่ระบบ&quot;,&quot;alerts&quot;:&quot;ข้อความเตือน&quot;,&quot;inbox&quot;:&quot;กล่องข้อความ&quot;,&quot;discover&quot;:&quot;ค้นพบ&quot;,&quot;search&quot;:&quot;ค้นหา&quot;,&quot;how_it_works&quot;:&quot;Airbnb ทำงานอย่างไร&quot;,&quot;help&quot;:&quot;ความช่วยเหลือ&quot;,&quot;invite_friends&quot;:&quot;เชิญเพื่อน&quot;,&quot;logout&quot;:&quot;ออกจากระบบ&quot;,&quot;name&quot;:&quot;ผู้ใช้&quot;,&quot;photography&quot;:&quot;การถ่ายภาพ&quot;,&quot;your_trips&quot;:&quot;การเดินทางของคุณ&quot;,&quot;become_a_host&quot;:&quot;มาเป็นเจ้าของที่พัก&quot;,&quot;dashboard&quot;:&quot;แดชบอร์ด&quot;,&quot;close&quot;:&quot;ปิด&quot;,&quot;android.strings.search_where_to&quot;:&quot;ไปที่ไหน&quot;,&quot;checkin&quot;:&quot;เช็คเอาท์&quot;,&quot;checkout&quot;:&quot;เช็คเอาท์&quot;,&quot;shared.Check in&quot;:&quot;เช็คอิน&quot;,&quot;shared.Check out&quot;:&quot;เช็คเอาท์&quot;,&quot;clear_dates&quot;:&quot;ลบวันที่&quot;,&quot;x_guests&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;entire_home&quot;:&quot;บ้านทั้งหลัง&quot;,&quot;private_room&quot;:&quot;ห้องส่วนตัว&quot;,&quot;shared_room&quot;:&quot;ห้องที่พักร่วมกัน&quot;,&quot;number_of_guests&quot;:&quot;จำนวนผู้เข้าพัก&quot;,&quot;room_type_0&quot;:&quot;บ้าน/อพาร์ทเมนท์ทั้งหลัง&quot;,&quot;room_type_1&quot;:&quot;ห้องส่วนตัว&quot;,&quot;room_type_2&quot;:&quot;ห้องเช่าร่วม&quot;,&quot;find_a_place&quot;:&quot;หาที่พัก&quot;,&quot;shared.x guests&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;guests&quot;:&quot;ผู้เข้าพัก&quot;,&quot;room_type&quot;:&quot;ประเภทห้อง&quot;,&quot;shared.Help Center&quot;:&quot;ศูนย์ช่วยเหลือ&quot;,&quot;shared.Ask the Community&quot;:&quot;ถามชุมชน&quot;,&quot;Back&quot;:&quot;กลับไป&quot;,&quot;view this article in the help center&quot;:&quot;ดูบทความนี้ในศูนย์ช่วยเหลือ&quot;,&quot;field_guide.error.no_load_topic&quot;:&quot;ไม่มีบทความความช่วยเหลือที่แนะนำอยู่—เข้าชม%{link_start}ศูนย์ช่วยเหลือ%{link_end}แทน&quot;,&quot;field_guide.no_results&quot;:&quot;ไม่พบผลการค้นหา&quot;,&quot;field_guide.suggested_actions&quot;:&quot;การกระทำที่แนะนำ&quot;,&quot;field_guide.search_down&quot;:&quot;ไม่สามารถค้นหาได้ โปรดลองอีกครั้งในภายหลัง&quot;,&quot;field_guide.articles_result_title&quot;:&quot;บทความที่เกี่ยวกับ \&quot;%{query}\&quot;&quot;,&quot;field_guide.search_result_title&quot;:&quot;ผลการค้นหา \&quot;%{query}\&quot;&quot;,&quot;field_guide.suggested_articles&quot;:&quot;บทความที่แนะนำ&quot;,&quot;field_guide.how_can_we_help&quot;:&quot;เราจะช่วยคุณได้อย่างไร?&quot;,&quot;field_guide.welcome_name_how_can_we_help&quot;:&quot;ยินดีต้อนรับ %{first_name}! เราจะช่วยคุณได้อย่างไร&quot;,&quot;field_guide.welcome_how_can_we_help&quot;:&quot;ยินดีต้อนรับ! เราจะช่วยได้อย่างไร&quot;,&quot;field_guide.search_for_anything&quot;:&quot;ค้นหาอะไรก็ตาม (การจองที่พัก การได้รับเงิน ความคิดเห็น&quot;,&quot;field_guide.search_for_help&quot;:&quot;ขอความช่วยเหลือหรือค้นหาโดยใช้คำสำคัญ&quot;,&quot;field_guide.cant_find_what_youre_looking_for&quot;:&quot;ไม่พบสิ่งที่คุณมองหาอยู่หรือ&quot;,&quot;help.Visit the Help Center&quot;:&quot;ไปที่ศูนย์ช่วยเหลือ&quot;,&quot;help.Airbnb Help&quot;:&quot;ความช่วยเหลือของ Airbnb&quot;,&quot;help_center.search.Host articles related to query&quot;:&quot;Host articles related to ‘%{query}’&quot;,&quot;help_center.search.Guest articles related to query&quot;:&quot;Guest articles related to ‘%{query}’&quot;,&quot;help_center.search.X articles for query.v2&quot;:&quot;%{smart_count} บทความสำหรับ ‘%{query}’&quot;,&quot;help_center.search.There are no results for query&quot;:&quot;ไม่มีผลลัพธ์สำหรับ ‘%{query}’&quot;,&quot;help_center.search.Help Center results for query&quot;:&quot;Help Center results for ‘%{query}’&quot;,&quot;help_center.search.See all Help Center results&quot;:&quot;See all Help Center results&quot;,&quot;help_center.search.Community results for query&quot;:&quot;Community results for ‘%{query}’&quot;,&quot;help_center.search.See all Community Center results&quot;:&quot;See all Community Center results&quot;,&quot;shared.Messages&quot;:&quot;ข้อความ&quot;,&quot;shared.Notifications&quot;:&quot;การแจ้งเตือน&quot;,&quot;shared.See all&quot;:&quot;ดูทั้งหมด&quot;,&quot;shared.View Dashboard&quot;:&quot;ดูแดชบอร์ด&quot;,&quot;shared.View Inbox&quot;:&quot;ดูกล่องข้อความ&quot;,&quot;notifications.Unread Messages In Inbox&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่ได้อ่านในกล่องข้อความของคุณ&quot;,&quot;notifications.Unread Messages In Inbox From Last 7 Days&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่ได้อ่านในกล่องข้อความของคุณจากสัปดาห์ที่ผ่านมา&quot;,&quot;notifications.Additional Unread Messages&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่อ่านเพิ่มเติม&quot;,&quot;notifications.Additional Unread Messages Last Week&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่อ่านเพิ่มเติมจากสัปดาห์ที่แล้ว&quot;,&quot;notifications.5+ Notifications&quot;:&quot;มีการแจ้งเตือนมากกว่า 5 ครั้งรอคุณอยู่ใน %{link_start}แดชบอร์ด%{link_end}ของคุณ&quot;,&quot;notifications.Read All Notifications&quot;:&quot;มีการแจ้งเตือน %{smart_count} รายการรอคุณอยู่ใน%{link_start}แดชบอร์ด%{link_end}&quot;,&quot;notifications.Read All Messages&quot;:&quot;ไม่มีข้อความใหม่ คุณอ่านครบหมดแล้ว!&quot;,&quot;notifications.Error&quot;:&quot;ขออภัย ไม่สามารถโหลดข้อความใหม่ได้ในขณะนี้ %{link_start}ดูกล่องข้อความ%{link_end}&quot;,&quot;airlock.title&quot;:&quot;การรักษาความปลอดภัย&quot;,&quot;airlock.multi_friction_selection.title&quot;:&quot;ช่วยเราทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.multi_friction_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณที่พยายามเข้าถึงบัญชีของคุณจริงๆ โปรดเลือกหนึ่งในวิธีต่อไปนี้เพื่อยืนยันตัวคุณเอง&quot;,&quot;airlock.cvv_verification.multi_select_title&quot;:&quot;บัตรเครดิต&quot;,&quot;airlock.cvv_verification.multi_select_helper&quot;:&quot;กรอกรหัสการรักษาความปลอดภัย (ฟรี)&quot;,&quot;airlock.cvv_verification.title&quot;:&quot;การยืนยันบัตรเครดิต&quot;,&quot;airlock.cvv_verification.verified&quot;:&quot;ยืนยันบัญชีแล้ว&quot;,&quot;airlock.cvv_verification.response.title&quot;:&quot;ช่วยเราทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.cvv_verification.response.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณที่พยายามเข้าถึงบัญชีของคุณจริงๆ โปรดยืนยันตัวตนของคุณโดยกรอกรหัสรักษาความปลอดภัยจากบัตรเครดิตที่คุณใช้ในอดีต&quot;,&quot;airlock.cvv_verification.response.credit_card_label&quot;:&quot;บัตรเครดิต&quot;,&quot;airlock.cvv_verification.response.security_code_label&quot;:&quot;รหัสรักษาความปลอดภัย&quot;,&quot;airlock.cvv_verification.response.invalid&quot;:&quot;กรอกค่าไม่ถูกต้อง! กรุณาลองอีกครั้ง&quot;,&quot;airlock.photo_id_verification.title&quot;:&quot;การยืนยันตัวตนด้วยรูปถ่าย&quot;,&quot;airlock.photo_id_verification.option_selection.title&quot;:&quot;ยืนยันตัวตนคุณ&quot;,&quot;airlock.photo_id_verification.option_selection.description&quot;:&quot;การเข้าพักในที่พักที่จองผ่าน Airbnb เป็นการพักในบ้านของคนอื่น การสแกนบัตรประจำตัวที่ทางการออกให้จะช่วยให้เจ้าของที่พักของคุณรู้สึกสบายใจในการแบ่งพื้นที่ของตนให้ผู้อื่นเข้ามาอยู่ด้วย&quot;,&quot;airlock.photo_id_verification.response.title&quot;:&quot;สแกนบัตรประจำตัว&quot;,&quot;airlock.photo_id_verification.verified&quot;:&quot;ยืนยันบัญชีแล้ว&quot;,&quot;airlock.photo_id_verification.response.invalid&quot;:&quot;เกิดข้อผิดพลาดขณะสแกนบัตรประจำตัว โปรดลองอีกครั้ง&quot;,&quot;airlock.captcha.thread_create.response.description&quot;:&quot;บางครั้งโปรแกรมอัตโนมัติก็ใช้เว็บไซต์ในทางผิดและพยายามส่งข้อความหลอกลวงถึงคนอื่น ทำข้อความเตือนด้านล่างให้เสร็จเพื่อแสดงว่าคุณเป็นบุคคลแท้จริงที่ต้องการส่งข้อความนี้&quot;,&quot;airlock.captcha.response.invalid&quot;:&quot;โปรดพยายามทำการเตือนด้านล่างให้เสร็จอีกครั้ง&quot;,&quot;airlock.phone_verification.multi_select_title&quot;:&quot;โทรศัพท์&quot;,&quot;airlock.phone_verification.multi_select_helper&quot;:&quot;รับรหัสผ่านการโทรหรือ SMS&quot;,&quot;airlock.phone_verification.title&quot;:&quot;การยืนยันทางโทรศัพท์&quot;,&quot;airlock.phone_verification.option_selection.title&quot;:&quot;มาช่วยกันทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.phone_verification.listing_activate.option_selection.title&quot;:&quot;คุณต้องยืนยันการเปลี่ยนแปลงนี้&quot;,&quot;airlock.phone_verification.payout_gibraltar_instrument_create.option_selection.title&quot;:&quot;We need you to confirm this change.&quot;,&quot;airlock.phone_verification.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเข้าถึงบัญชีของคุณ เราจะส่งรหัสไปยังเบอร์โทรที่คุณยืนยันก่อนหน้านี้ใน Airbnb&quot;,&quot;airlock.phone_verification.listing_activate.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเพิ่มที่พัก เราจะส่งรหัสไปยังเบอร์โทรที่คุณยืนยันก่อนหน้านี้ใน Airbnb&quot;,&quot;airlock.phone_verification.payout_gibraltar_instrument_create.option_selection.description&quot;:&quot;We want to confirm that it’s really you who’s trying to add a payout method.  To do that, we’ll send a code to a phone you’ve previously verified on Airbnb.&quot;,&quot;airlock.phone_verification.option_selection.how&quot;:&quot;จะให้เราส่งรหัสไปทางไหน?&quot;,&quot;airlock.phone_verification.option_selection.where&quot;:&quot;เราควรส่งรหัสไปที่ไหน?&quot;,&quot;airlock.phone_verification.response.title&quot;:&quot;กรอกรหัส 4 หลัก&quot;,&quot;airlock.phone_verification.We sent a code to your phone number&quot;:&quot;เราส่งรหัสไปยังเบอร์โทรของคุณที่ลงท้ายด้วย %{last_four_digits}&quot;,&quot;airlock.phone_verification.Depending on your provider&quot;:&quot;อาจใช้เวลา 2-3 นาทีขึ้นอยู่กับผู้ให้บริการของคุณ&quot;,&quot;airlock.phone_verification.We will wait right here&quot;:&quot;เราจะรอที่นี่&quot;,&quot;airlock.phone_verification.Send me a text message&quot;:&quot;ส่งข้อความสั้นถึงฉัน (SMS)&quot;,&quot;airlock.phone_verification.Call me&quot;:&quot;โทรหาฉัน&quot;,&quot;airlock.api_error&quot;:&quot;มีบางอย่างผิดปกติขณะที่ดำเนินการคำขอของคุณ โปรดลองอีกครั้ง&quot;,&quot;airlock.phone_verification.Phone number ending in&quot;:&quot;เบอร์โทรที่ลงท้ายด้วย %{last_four}&quot;,&quot;airlock.phone_verification.Enter Your Code&quot;:&quot;กรอกรหัสของคุณ&quot;,&quot;airlock.phone_verification.response.invalid&quot;:&quot;ดูเหมือนคุณกรอกรหัสไม่ถูกต้อง&quot;,&quot;airlock.email_verification.multi_select_title&quot;:&quot;อีเมล์&quot;,&quot;airlock.email_verification.multi_select_helper&quot;:&quot;รับอีเมลยืนยัน&quot;,&quot;airlock.phone_verification_or_email_verification.title&quot;:&quot;การยืนยันโทรศัพท์&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.title&quot;:&quot;ช่วยเราทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเข้าถึงบัญชีคุณ ดังนั้นเราจะส่งรหัสความปลอดภัยไปที่โทรศัพท์หรืออีเมลของคุณเพื่อยืนยันการเข้าใช้บัญชี&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.how&quot;:&quot;เราควรส่งรหัสอย่างไร&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.where&quot;:&quot;เราควรส่งรหัสไปที่ไหน&quot;,&quot;airlock.phone_verification_or_email_verification.response.title&quot;:&quot;กรอกรหัส 4 หลักของคุณ&quot;,&quot;airlock.phone_verification_or_email_verification.We sent a code to your phone number&quot;:&quot;เราส่งรหัสไปยังเบอร์โทรของคุณที่ลงท้ายด้วย %{last_four_digits}&quot;,&quot;airlock.phone_verification_or_email_verification.Depending on your provider&quot;:&quot;อาจใช้เวลา 2-3 นาทีขึ้นอยู่กับผู้ให้บริการของคุณ&quot;,&quot;airlock.phone_verification_or_email_verification.We will wait right here&quot;:&quot;เราจะรอที่นี่&quot;,&quot;airlock.phone_verification_or_email_verification.Send me a text message&quot;:&quot;ส่งข้อความสั้นถึงฉัน (SMS)&quot;,&quot;airlock.phone_verification_or_email_verification.Call me&quot;:&quot;โทรหาฉัน&quot;,&quot;airlock.phone_verification_or_email_verification.Phone number ending in&quot;:&quot;เบอร์โทรที่ลงท้ายด้วย %{last_four}&quot;,&quot;airlock.phone_verification_or_email_verification.Enter Your Code&quot;:&quot;กรอกรหัสของคุณ&quot;,&quot;airlock.phone_verification_or_email_verification.response.invalid&quot;:&quot;ดูเหมือนคุณกรอกรหัสไม่ถูกต้อง&quot;,&quot;airlock.identity_info_confirmation.response.confirm_details&quot;:&quot;ยืนยันรายละเอียด&quot;,&quot;airlock.identity_info_confirmation.response.make_sure_details_are_correct&quot;:&quot;ใช้เวลาสักครู่ตรวจให้แน่ใจว่ารายละเอียดบัญชีของคุณยังถูกต้องอยู่&quot;,&quot;airlock.identity_info_confirmation.response.name&quot;:&quot;ชื่อ&quot;,&quot;airlock.identity_info_confirmation.response.first_name&quot;:&quot;ชื่อแรก&quot;,&quot;airlock.identity_info_confirmation.response.last_name&quot;:&quot;ชื่อสกุล&quot;,&quot;airlock.identity_info_confirmation.response.email&quot;:&quot;อีเมล์แอดเดรส&quot;,&quot;airlock.identity_info_confirmation.response.birthday&quot;:&quot;วันเกิด&quot;,&quot;airlock.identity_info_confirmation.response.birthday_month&quot;:&quot;เดือน&quot;,&quot;airlock.identity_info_confirmation.response.birthday_day&quot;:&quot;วัน&quot;,&quot;airlock.identity_info_confirmation.response.birthday_year&quot;:&quot;ปี&quot;,&quot;airlock.identity_info_confirmation.response.confirm_and_continue&quot;:&quot;ยืนยันและดำเนินการต่อ&quot;,&quot;airlock.identity_info_confirmation.response.you_are_X_years_old&quot;:&quot;คุณได้ระบุว่าคุณมีอายุ %{emphasis_start}%{smart_count} ปี%{emphasis_end}&quot;,&quot;airlock.identity_info_confirmation.response.is_this_age_correct&quot;:&quot;ถูกต้องหรือไม่&quot;,&quot;airlock.identity_info_confirmation.response.not_correct_change_my_birthday&quot;:&quot;ไม่ เปลี่ยนวันเกิดของฉัน&quot;,&quot;airlock.identity_info_confirmation.response.yes_my_birthday_is_correct&quot;:&quot;ใช่ ถูกต้องแล้ว&quot;,&quot;airlock.password_reset.response.title&quot;:&quot;เปลี่ยนรหัสผ่านตอนนี้เลย&quot;,&quot;airlock.password_reset.response.description&quot;:&quot;การเปลี่ยนรหัสผ่านเป็นวิธีง่ายๆ ในการทำให้บัญชีคุณปลอดภัยเสมอ เปลี่ยนรหัสผ่านตอนนี้เลย&quot;,&quot;airlock.password_reset.response.current_password&quot;:&quot;รหัสผ่านปัจจุบัน&quot;,&quot;airlock.password_reset.response.new_password&quot;:&quot;รหัสผ่านใหม่&quot;,&quot;airlock.password_reset.response.confirm_new_password&quot;:&quot;ยืนยันอีเมลใหม่&quot;,&quot;airlock.password_reset.Next&quot;:&quot;เปลี่ยนรหัสผ่าน&quot;,&quot;airlock.email_verification.option_selection.title&quot;:&quot;ยืนยันอีเมลแอดเดรสของคุณ&quot;,&quot;airlock.email_verification.option_selection.description&quot;:&quot;เรากำลังจะส่งอีเมลยืนยันบัญชีของคุณไปยัง: %{linebreak} %{user_email} %{linebreak} %{linebreak} หากคุณมีปัญหาในการรับอีเมลนี้ โปรดตรวจดูโฟลเดอร์ขยะ&quot;,&quot;airlock.email_verification.response.title&quot;:&quot;เช็คอีเมล์&quot;,&quot;airlock.email_verification.response.description&quot;:&quot;เราเพิ่งส่งอีเมลไปยัง %{linebreak} %{user_email} %{linebreak} %{linebreak} เมื่อคุณยืนยันอีเมลแอดเดรสของคุณ คุณก็พร้อมใช้งานเว็บไซต์แล้ว&quot;,&quot;airlock.email_verification.response.Next&quot;:&quot;เรียบร้อย&quot;,&quot;airlock.email_verification.cant_get_to_email&quot;:&quot;เข้าถึงอีเมลคุณไม่ได้ใช่ไหม&quot;,&quot;airlock.email_verification.let_us_know&quot;:&quot;แจ้งให้เราทราบ&quot;,&quot;airlock.device_association_email_verification.option_selection.title&quot;:&quot;โปรดยืนยันอุปกรณ์ของคุณ&quot;,&quot;airlock.device_association_email_verification.option_selection.description&quot;:&quot;เราได้ส่งอีเมลยืนยันอุปกรณ์ไปยัง%{linebreak} %{user_email}%{linebreak} %{linebreak} โปรดเปิดลิงค์นี้ใน %{emphasis_start}เบราว์เซอร์บนอุปกรณ์ที่ใช้อยู่%{emphasis_end} เพื่อยืนยันอุปกรณ์ของคุณ&quot;,&quot;airlock.device_association_email_verification.response.title&quot;:&quot;เช็คอีเมล์&quot;,&quot;airlock.device_association_email_verification.response.description&quot;:&quot;We just sent a device confirmation email to%{linebreak} %{user_email}%{linebreak} %{linebreak} To verify your device, please open this link in your %{emphasis_start}current device’s browser%{emphasis_end}.&quot;,&quot;airlock.device_association_email_verification.response.Next&quot;:&quot;เรียบร้อย&quot;,&quot;airlock.device_association_email_verification.cant_get_to_email&quot;:&quot;เข้าถึงอีเมลคุณไม่ได้ใช่ไหม&quot;,&quot;airlock.device_association_email_verification.let_us_know&quot;:&quot;แจ้งให้เราทราบ&quot;,&quot;airlock.account_disabled.introduction.title&quot;:&quot;หยุดใช้งานบัญชีผู้ใช้แล้ว&quot;,&quot;airlock.account_disabled.introduction.introduction&quot;:&quot;เพื่อช่วยปกป้องข้อมูลของคุณ เราได้บล็อกบัญชี Airbnb ของคุณไว้ชั่วคราว&quot;,&quot;airlock.account_disabled.introduction.description&quot;:&quot;หากต้องการกู้คืนการเข้าถึง โปรดส่งอีเมลถึง account.disabled@airbnb.com จากอีเเมลแอดเดรสที่เชื่อมโยงกับบัญชี Airbnb ของคุณ&quot;,&quot;airlock.no_phone_access.introduction.title&quot;:&quot;การส่งอีเมลถึงเราจะใช้เวลานานขึ้น&quot;,&quot;airlock.no_phone_access.introduction.introduction&quot;:&quot;ด้วยเหตุผลด้านความปลอดภัย การให้ Airbnb ยืนยันการเปลี่ยนแปลงนี้เองอาจใช้เวลา 1-2 วัน โปรดส่งอีเมลถึงเราที่ &lt;a href=\&quot;mailto:account.disabled@airbnb.com\&quot;&gt;account.disabled@airbnb.com&lt;/a&gt; จากอีเมลแอดเดรสที่เชื่อมโยงกับบัญชีของคุณ และเราจะจัดการต่อหลังจากนั้นเอง&quot;,&quot;airlock.no_phone_access.introduction.tip.title&quot;:&quot;ทำการปรับปรุงนี้เร็วกว่าด้วยโทรศัพท์ของคุณ&quot;,&quot;airlock.no_phone_access.introduction.tip.description&quot;:&quot;หากคุณกำลังเดินทางหรือโทรศัพท์ของคุณไม่มีสัญญาณ โปรดรอจนกว่าคุณจะมีสัญญาณใหม่และพยายามทำการปรับปรุงใหม่&quot;,&quot;airlock.no_phone_access.Send Me a Code&quot;:&quot;ส่งรหัสให้ฉัน&quot;,&quot;airlock.no_email_access.introduction.title&quot;:&quot;การส่งอีเมลถึงเราจะใช้เวลานานขึ้น&quot;,&quot;airlock.no_email_access.introduction.introduction&quot;:&quot;ด้วยเหตุผลด้านความปลอดภัย การให้ Airbnb ยืนยันการเปลี่ยนแปลงนี้เองอาจใช้เวลา 1-2 วัน โปรดส่งอีเมลถึงเราที่ &lt;a href=\&quot;mailto:account.disabled@airbnb.com\&quot;&gt;account.disabled@airbnb.com&lt;/a&gt; จากอีเมลแอดเดรสที่เชื่อมโยงกับบัญชีของคุณ และเราจะจัดการต่อหลังจากนั้นเอง&quot;,&quot;airlock.no_email_access.introduction.tip.title&quot;:&quot;ทำการปรับปรุงนี้เร็วกว่าด้วยโทรศัพท์ของคุณ&quot;,&quot;airlock.no_email_access.introduction.tip.description&quot;:&quot;หากคุณกำลังเดินทางหรือโทรศัพท์ของคุณไม่มีสัญญาณ โปรดรอจนกว่าคุณจะมีสัญญาณใหม่และพยายามทำการปรับปรุงใหม่&quot;,&quot;airlock.contact_us.response.title&quot;:&quot;ติดต่อเรา&quot;,&quot;airlock.contact_us.response.description&quot;:&quot;เพื่อความปลอดภัยของคุณ โปรดยืนยันบัญชีของคุณ โปรดติดต่อเราที่ &lt;a href=\&quot;mailto:account.disabled@airbnb.com\&quot;&gt;security.check@airbnb.com&lt;/a&gt;&quot;,&quot;airlock.contact_us_chargeback.response.title&quot;:&quot;Contact Us&quot;,&quot;airlock.contact_us_chargeback.response.description&quot;:&quot;We monitor all reservations and user interactions on Airbnb very closely. Unfortunately, due to concerns around the validity of your payment instrument, we’ve disabled your account. Please email us at &lt;a href=\&quot;mailto:account.enable@airbnb.com\&quot;&gt;account.enable@airbnb.com&lt;/a&gt; to appeal our decision and re-enable your account.&quot;,&quot;airlock.introduction&quot;:&quot;เพื่อดำเนินการต่อ โปรดทำความท้าทายบางประการให้เสร็จ&quot;,&quot;airlock.Get Started&quot;:&quot;เริ่มต้น&quot;,&quot;airlock.Continue&quot;:&quot;ดำเนินการต่อ&quot;,&quot;airlock.Next&quot;:&quot;ต่อไป&quot;,&quot;airlock.Done&quot;:&quot;เรียบร้อย&quot;,&quot;airlock.Back&quot;:&quot;ย้อนกลับ&quot;,&quot;airlock.Email Airbnb&quot;:&quot;อีเมล Airbnb&quot;,&quot;airlock.Start Over&quot;:&quot;เริ่มใหม่&quot;,&quot;airlock.success.Thanks&qquot;:&quot;ขอบคุณ %{first_name}&quot;,&quot;airlock.success.You are done&quot;:&quot;เสร็จเรียบร้อยแล้ว! คุณสามารถกลับไปสิ่งที่คุณทำก่อนหน้านี้&quot;,&quot;have_a_moment&quot;:&quot;ขอเวลาสักครู่ได้ไหม&quot;,&quot;help_make_experience_better&quot;:&quot;ช่วยเราทำให้ประสบการณ์ Airbnb ของคุณดีขึ้นโดยกรอกแบบสำรวจสั้นๆ&quot;,&quot;lets_do_this&quot;:&quot;ตอบแบบสำรวจเลย!&quot;,&quot;thanks_for_helping&quot;:&quot;ขอบคุณที่ตอบแบบสำรวจ!&quot;,&quot;fill_out_survey&quot;:&quot;เราจะยินดีมากถ้าคุณช่วยทำแบบสำรวจสั้นๆ นี้&quot;,&quot;surveyair_cancel&quot;:&quot;ยกเลิก&quot;,&quot;surveyair_submit&quot;:&quot;ส่ง&quot;,&quot;surveyair_next&quot;:&quot;ถัดไป&quot;,&quot;surveyair_back&quot;:&quot;กลับไป&quot;,&quot;surveyair_pagination&quot;:&quot;%{currentPage} จาก %{totalNumPages} หน้า&quot;,&quot;surveyair_strongly_disagree&quot;:&quot;ไม่เห็นด้วยอย่างยิ่ง&quot;,&quot;surveyair_disagree&quot;:&quot;ไม่เห็นด้วย&quot;,&quot;surveyair_neutral&quot;:&quot;กลางๆ&quot;,&quot;surveyair_agree&quot;:&quot;เห็นด้วย&quot;,&quot;surveyair_strongly_agree&quot;:&quot;เห็นด้วยอย่างยิ่ง&quot;,&quot;surveyair_no_answer&quot;:&quot;ไม่มีคำตอบ&quot;,&quot;surveyair_very_difficult&quot;:&quot;ยากมาก&quot;,&quot;surveyair_difficult&quot;:&quot;ยาก&quot;,&quot;surveyair_easy&quot;:&quot;ง่าย&quot;,&quot;surveyair_very_easy&quot;:&quot;ง่ายมาก&quot;,&quot;shared.Close this modal&quot;:&quot;ปิดวิธีนี้&quot;,&quot;your_trips.x_guest(s)&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;your_trips.x_listing(s)&quot;:&quot;ที่พัก %{smart_count} รายการ&quot;,&quot;shared.Trips&quot;:&quot;การเดินทาง&quot;,&quot;header.View Trips&quot;:&quot;ดูการเดินทาง&quot;,&quot;header.View Wish Lists&quot;:&quot;ดู Wish List&quot;,&quot;header.You Have X Wish List(s)&quot;:&quot;คุณมี %{smart_count} Wish List&quot;,&quot;header.X home(s)&quot;:&quot;บ้าน %{smart_count} หลัง&quot;,&quot;header.Popular Wish Lists&quot;:&quot;Wish List ยอดนิยม&quot;,&quot;your_trips.Error&quot;:&quot;ขออภัย ตอนนี้เราโหลดการอัปเดตการเดินทางของคุณไม่ได้ %{link_start}ดูการเดินทาง%{link_end}&quot;,&quot;reservation_status.timedout&quot;:&quot;หมดอายุ&quot;,&quot;shared.Wish Lists&quot;:&quot;Wish List&quot;,&quot;header.Create a wish list&quot;:&quot;สร้าง wish list&quot;,&quot;header.No wish list created&quot;:&quot;ไม่มีการสร้าง wish list&quot;,&quot;header.No upcoming trips&quot;:&quot;ไม่มีการเดินทางที่กำลังจะมาถึง&quot;,&quot;header.Continue searching in (x)&quot;:&quot;ค้นหาต่อไปใน %{location}&quot;,&quot;create_new_wish_list&quot;:&quot;สร้างรายการ Wish List ใหม่&quot;,&quot;wish_list_name&quot;:&quot;ชื่อรายการที่พักใน Wish List&quot;,&quot;priv.everyone&quot;:&quot;ทุกคน&quot;,&quot;priv.invite_only&quot;:&quot;คำเชิญเท่านั้น&quot;,&quot;priv.privacy_settings&quot;:&quot;การตั้งค่าความเป็นส่วนตัว&quot;,&quot;priv.everyone_description&quot;:&quot;มองเห็นได้ทุกคนรวมถึงโปรไฟล์ Airbnb สาธารณะของคุณ&quot;,&quot;priv.invite_only_description&quot;:&quot;มีอยู่ในคุณและเพื่อนคนใดก็ตามที่คุณเชิญเห็นเท่านั้น&quot;,&quot;shared.Save&quot;:&quot;บันทึก&quot;,&quot;shared.Cancel&quot;:&quot;ยกเลิก&quot;,&quot;dl.heading&quot;:&quot;ต้องการเปิดหน้านี้ในแอพบนมือถือ Airbnb หรือไม่&quot;,&quot;dl.open_in_app&quot;:&quot;เปิดในแอพ&quot;,&quot;dl.no_thanks&quot;:&quot;ไม่ ขอบคุณ&quot;,&quot;dl.interstitial.continue&quot;:&quot;ดำเนินการต่อ&quot;,&quot;dl.interstitial.sign_up_with_browser&quot;:&quot;สมัครโดยใช้เบราว์เซอร์แทน&quot;,&quot;dl.interstitial.get_the_app_for_a_faster&quot;:&quot;รับแอพของเราสำหรับ Airbnb ที่เร็วขึ้นและง่ายขึ้น&quot;,&quot;shared.Log_in&quot;:&quot;เข้าสู่ระบบ&quot;,&quot;must_log_in&quot;:&quot;คุณต้องเข้าสู่ระบบเพื่อดำเนินการต่อ&quot;,&quot;log_in_to_save&quot;:&quot;เข้าสู่ระบบเพื่อบันทึกที่พักนี้เข้าในรายการ Wish List&quot;,&quot;concur.link_your_account&quot;:&quot;เชื่อมโยงบัญชีผู้ใช้ Concur ของคุณ&quot;,&quot;concur.sign_up&quot;:&quot;ลงทะเบียนเพื่อเดินทางกับ Airbnb และติดตามค่าใช้จ่ายของคุณผ่าน Concur&quot;,&quot;shared.Sign up with email&quot;:&quot;ลงทะเบียนด้วยอีเมล์&quot;,&quot;shared.Continue with Email&quot;:&quot;Continue with Email&quot;,&quot;shared.Create Account&quot;:&quot;สร้างบัญชี&quot;,&quot;shared.Google&quot;:&quot;Google&quot;,&quot;shared.Facebook&quot;:&quot;Facebook&quot;,&quot;signup_method.continue_with_service&quot;:&quot;ทำ %{service_name} ต่อไป&quot;,&quot;signup_method.signup_with_service&quot;:&quot;Sign up with %{service_name}&quot;,&quot;login_method.login_with_service&quot;:&quot;Log in with %{service_name}&quot;,&quot;shared.Sign up with Facebook&quot;:&quot;ลงทะเบียนด้วย Facebook&quot;,&quot;shared.Sign up with WeChat&quot;:&quot;ลงทะเบียนด้วย WeChat&quot;,&quot;shared.Sign up with Weibo&quot;:&quot;ลงทะเบียนกับ Weibo&quot;,&quot;shared.Sign up with Google&quot;:&quot;ลงทะเบียนกับ Google&quot;,&quot;shared.Log in with WeChat&quot;:&quot;เข้าสู่ระบบด้วย WeChat&quot;,&quot;shared.Log in with Weibo&quot;:&quot;เข้าสู่ระบบด้วย Weibo&quot;,&quot;shared.Log in with Facebook&quot;:&quot;เข้าสู่ระบบด้วย Facebook&quot;,&quot;shared.Log in with Google&quot;:&quot;เข้าสู่ระบบด้วย Google&quot;,&quot;user.signup.already_member&quot;:&quot;เป็นสมาชิก Airbnb แล้วใช่ไหม&quot;,&quot;shared.generic_tos_acceptance_2016&quot;:&quot;การสมัครแสดงว่าฉันยอมรับ %{terms_of_service_link} %{payments_terms_link} %{privacy_policy_link} %{guest_refund_policy_link} และ %{host_guarantee_terms_link} ของ Airbnb&quot;,&quot;i_also_agree_to_follow_nondiscrimination_policy_and_help_our_community&quot;:&quot;I also agree to follow Airbnb’s %{nondiscrimination_policy_link} and help our community build a world where people of all backgrounds feel included and respected.&quot;,&quot;shared.Terms of Service&quot;:&quot;เงื่อนไขการให้บริการ&quot;,&quot;shared.Payments Terms of Service&quot;:&quot;เงื่อนไขการให้บริการการชำระเงิน&quot;,&quot;shared.Privacy_Policy&quot;:&quot;นโยบายความเป็นส่วนตัว&quot;,&quot;shared.Guest Refund Policy&quot;:&quot;นโยบายการคืนเงินให้ผู้เข้าพัก&quot;,&quot;shared.Host_Guarantee_Terms&quot;:&quot;เงื่อนไขการรับประกันเจ้าของที่พัก&quot;,&quot;terms.Nondiscrimination Policy&quot;:&quot;Nondiscrimination Policy&quot;,&quot;shared.or&quot;:&quot;หรือ&quot;,&quot;shared.Learn_more&quot;:&quot;เรียนรู้เพิ่มเติม&quot;,&quot;Email Address&quot;:&quot;อีเมล์แอดเดรส&quot;,&quot;shared.Remember me&quot;:&quot;จำฉัน&quot;,&quot;user.signup.forgot_password_moweb&quot;:&quot;เข้าสู่ระบบไม่ได้ใช่ไหม&quot;,&quot;signup.use phone number instead&quot;:&quot;ใช้เบอร์โทรแทน&quot;,&quot;user.signup.no account yet&quot;:&quot;ไม่มีบัญชีหรือ&quot;,&quot;shared.Sign up&quot;:&quot;ลงทะเบียน&quot;,&quot;signup.other methods&quot;:&quot;ใช้วิธีอื่น&quot;,&quot;First name&quot;:&quot;ชื่อแรก&quot;,&quot;Last name&quot;:&quot;ชื่อสกุล&quot;,&quot;Email address&quot;:&quot;อีเมล์แอดเดรส&quot;,&quot;Confirm Password&quot;:&quot;ยืนยันรหัสผ่าน&quot;,&quot;Work email&quot;:&quot;อีเมลงาน&quot;,&quot;tooltip.signup_form.work_email&quot;:&quot;เราจะใช้อีเมลนี้เพิ่มคุณเข้าในบัญชี Airbnb สำหรับธุรกิจของบริษัทของคุณ&quot;,&quot;user.signup.opt_in_emails.coupons&quot;:&quot;ฉันอยากได้คูปองและแรงบันดาลใจ&quot;,&quot;Birthday&quot;:&quot;วันเกิด&quot;,&quot;user.signup.validation.birthday.must be 18 or older&quot;:&quot;ในการลงทะเบียน คุณต้องมีอายุอย่างน้อย 18 ปี คนอื่นจะไม่เห็นวันเกิดของคุณ&quot;,&quot;user.birthday.month&quot;:&quot;เดือน&quot;,&quot;user.birthday.day&quot;:&quot;วัน&quot;,&quot;user.birthday.year&quot;:&quot;ปี&quot;,&quot;signup.Sign up with Phone Number&quot;:&quot;สมัครด้วยเบอร์โทร&quot;,&quot;signup.use email instead&quot;:&quot;ใช้อีเมลแทน&quot;,&quot;signup.Enter 4 digit code&quot;:&quot;กรอกรหัส 4 หลัก&quot;,&quot;signup.Input your confirmation code&quot;:&quot;เราได้ส่ง SMS ไปยัง %{mobile_number} กรอกโค้ดในข้อความนั้น&quot;,&quot;signup.change my number&quot;:&quot;เปลี่ยนเบอร์โทร&quot;,&quot;signup.Send code again&quot;:&quot;ส่งรหัสอีกครั้ง&quot;,&quot;shared.Phone number&quot;:&quot;หมายเลขโทรศัพท์&quot;,&quot;auth_merge.error&quot;:&quot;สวัสดี! โปรดเข้าสู่ระบบด้วยอีเมลที่ใช้สมัคร Airbnb ของคุณ&quot;,&quot;auth_merge.password&quot;:&quot;โปรดกรอกรหัสผ่านของคุณ&quot;,&quot;auth_merge.signup_with_existing_email&quot;:&quot;Hi! You joined Airbnb with your email, so please use that to log in.&quot;,&quot;auth_merge.signup_with_existing_facebook_account&quot;:&quot;Hi! You joined Airbnb with Facebook, so please use that to log in.&quot;,&quot;auth_merge.login_with_different_account&quot;:&quot;Login with a different account&quot;,&quot;shared.Take me back to my last search results&quot;:&quot;กลับไปที่ผลการค้นหา&quot;,&quot;referrals.travel_credit_available_explanation&quot;:&quot;เครดิตการเดินทาง%{tag_start}%{credit_amount}ของคุณ%{tag_end}จะถูกใช้กับการเดินทางครั้งแรกของคุณที่มีมูลค่าอย่างน้อย%{min_trip_cost}โดยอัตโนมัติ&quot;,&quot;referrals.coupon_expires_at&quot;:&quot;วันที่หมดอายุ %{expiration_date}&quot;,&quot;referrals.see_terms_and_conditions&quot;:&quot;ดูข้อกำหนด&quot;,&quot;choose_language&quot;:&quot;เลือกภาษา&quot;,&quot;choose_currency&quot;:&quot;เลือกสกุลเงิน&quot;,&quot;datepicker_updated_years_ago&quot;:&quot;ปรับปรุงเมื่อ %{smart_count} ปีที่แล้ว&quot;,&quot;datepicker_updated_months_ago&quot;:&quot;ปรับปรุงเมื่อ %{smart_count} เดือนที่แล้ว&quot;,&quot;datepicker_updated_days_ago&quot;:&quot;ปรับปรุงเมื่อ %{smart_count} วันที่แล้ว&quot;,&quot;datepicker_updated_today&quot;:&quot;ปรับปรุงวันนี้&quot;,&quot;datepicker_never_updated&quot;:&quot;ไม่เคยปรับปรุงเลย&quot;,&quot;datepicker_min_nights&quot;:&quot;จำนวนคืนในการพักต่ำสุด %{smart_count}&quot;,&quot;datepicker_min_nights_this_month&quot;:&quot;%{smart_count} คืนขั้นต่ำ เดือนนี้&quot;,&quot;datepicker_min_nights_varies&quot;:&quot;จำนวนการพักขั้นต่ำไม่เท่ากัน&quot;,&quot;sorry_something_went_wrong&quot;:&quot;ขออภัย มีบางอย่างผิดพลาด โปรดรีเฟรชหน้านี้และลองใหม่&quot;}" id="_bootstrap-phrases" />
		<meta content="{&quot;engagement/overlay_panel1.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/overlay_panel1-457ef05a7508fd8b5f8eeaf251e29d1d.jpg&quot;,&quot;engagement/overlay_panel2.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/overlay_panel2-e527fcc4de6fccdc96feb6d70f8c58f2.jpg&quot;,&quot;engagement/overlay_panel3.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel3-f7b1e2d0007f6298c069df4dcce311db.jpg&quot;,&quot;engagement/overlay_panel4.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel4-bf9eb62d4e8befc4d7a41a520a3dcad3.jpg&quot;,&quot;engagement/overlay_panel5.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/overlay_panel5-cdcad426b1dd8956d9b0ff454dd4441e.jpg&quot;,&quot;engagement/overlay_panel6.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel6-04171448ba4eb0337d06cb9aa1a22559.jpg&quot;,&quot;engagement/overlay_panel7.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel7-58b03c50e1eac957ec12f6ced3bf7872.jpg&quot;,&quot;engagement/overlay_panel8.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel8-b6915b7a14b1ce8d1081b078b867ea34.jpg&quot;,&quot;engagement/overlay_panel9.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/overlay_panel9-bbe13adcee0122f5325db135211af175.jpg&quot;,&quot;engagement/overlay_panel10.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel10-993449dfdae5ea316589c0a84558f2f6.jpg&quot;,&quot;magical_trips/guest/beta-badge.png&quot;:&quot;https://a0.muscache.com/airbnb/static/magical_trips/guest/beta-badge-56a0d5bc185adfe79992a46991964070.png&quot;,&quot;engagement/ModalPhotos_Horizontal/Bikes.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Bikes-07f9c7e8a46c37d31435a3797fc6d59a.jpg&quot;,&quot;engagement/ModalPhotos_Horizontal/Cherries.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Cherries-c3107359f006f445670493e45434fa9e.jpg&quot;,&quot;engagement/ModalPhotos_Horizontal/Listing.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Listing-67cde6835b69d93b1d3984eb9f227928.jpg&quot;,&quot;engagement/ModalPhotos_Horizontal/Surf.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Surf-2b8a0111c4e79b00da1c101d00fbb9fb.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Bikes.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Bikes-fdcf8bcfb1d22a91dbf88c315f07e3d0.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Cherries.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Cherries-aa16cab99cee827e6beb0518436dfd8f.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Listing.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Listing-1e948927c0e09cb34baf2333e540c48d.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Surf.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Surf-dfafeba46bace57b5adcdcaa5dd95017.jpg&quot;,&quot;account_activation/modal-booking-ready.png&quot;:&quot;https://a1.muscache.com/airbnb/static/account_activation/modal-booking-ready-811e8edb5f67e88df1e36e474d12153e.png&quot;,&quot;account_activation/welcome.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/account_activation/welcome-62b2f84cb13fd2c6f6eb1c904ab3d5c8.jpg&quot;,&quot;account_activation/success.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/account_activation/success-d838dc8bc3a8c165a048dbd20a90abdc.jpg&quot;,&quot;partners/concur_pre_link.png&quot;:&quot;https://a0.muscache.com/airbnb/static/partners/concur_pre_link-63058dcdce0a710086c79101b68e178c.png&quot;,&quot;user_pic-225x225.png?v=2&quot;:&quot;https://a0.muscache.com/airbnb/static/user_pic-225x225.png?v=2&quot;,&quot;signinup/hello@2x.png&quot;:&quot;https://a0.muscache.com/airbnb/static/signinup/hello@2x-6755b9e17e788bf166f7a44d6e636238.png&quot;,&quot;signinup/google_icon_2x.png&quot;:&quot;https://a1.muscache.com/airbnb/static/signinup/google_icon_2x-745c2280e5004d4c90e3ca4e60e3f677.png&quot;}" id="_bootstrap-image_paths" />
		<meta content="{&quot;mario_copy_monorail_p3_modal&quot;:{&quot;erf&quot;:&quot;engagement_overlay_modal_p3_copy_expt&quot;,&quot;assignments&quot;:{&quot;treatment_unknown&quot;:{&quot;title&quot;:&quot;variation0&quot;,&quot;summary&quot;:&quot;variation0&quot;},&quot;control&quot;:{&quot;title&quot;:&quot;variation0&quot;,&quot;summary&quot;:&quot;variation0&quot;},&quot;location&quot;:{&quot;title&quot;:&quot;variation1&quot;,&quot;summary&quot;:&quot;variation1&quot;},&quot;price&quot;:{&quot;title&quot;:&quot;variation2&quot;,&quot;summary&quot;:&quot;variation2&quot;},&quot;quality&quot;:{&quot;title&quot;:&quot;variation3&quot;,&quot;summary&quot;:&quot;variation3&quot;}}},&quot;mario_copy_monorail_referrals&quot;:{&quot;erf&quot;:&quot;monorail_referrals_tab_text_v2&quot;,&quot;assignments&quot;:{&quot;treatment_unknown&quot;:{&quot;tab_text&quot;:&quot;variation0&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;control&quot;:{&quot;tab_text&quot;:&quot;variation0&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;treatment1_invite_friends&quot;:{&quot;tab_text&quot;:&quot;variation1&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;treatment2_refer_a_friend&quot;:{&quot;tab_text&quot;:&quot;variation2&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;treatment3_referrals&quot;:{&quot;tab_text&quot;:&quot;variation3&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;}}}}" id="_bootstrap-mario_erf_configs" />
		<script src="https://a1.muscache.com/airbnb/static/packages/libs_jquery.bundle-2cfd3e39bda681c27b66.js" type="text/javascript"></script>

		<script src="https://a2.muscache.com/airbnb/static/packages/core.bundle-de317a798112ac8feb32.js" type="text/javascript"></script>

		<div id="fb-root"></div>

		<script src="https://a1.muscache.com/airbnb/static/packages/address_form.bundle-6586127528d93be9bbf0.js" type="text/javascript"></script><script src="https://a2.muscache.com/airbnb/static/packages/mystique/edit_profile/identity_verified.bundle-a69ecb20cf21c3f8dd8a.js" type="text/javascript"></script><script src="https://a1.muscache.com/airbnb/static/packages/mystique/business_travel/quick_enroll.bundle-12571b30e3e4f0b4091e.js" type="text/javascript"></script><script src="https://a2.muscache.com/airbnb/static/packages/enter_password.bundle-9b13ecd5f868bf5c1c79.js" type="text/javascript"></script><script src="https://a0.muscache.com/airbnb/static/packages/edit_profile-598928187cfb444b65bae1ddfe3b4737.js" type="text/javascript"></script><script src="https://a1.muscache.com/airbnb/static/packages/sesame_client.bundle-bd2766df0a5bcc539870.js" type="text/javascript"></script><script src="https://a1.muscache.com/airbnb/static/packages/home_nav_top.bundle-753ccd1b869203a34b5d.js" type="text/javascript"></script>

	</body>
</html>
<!-- ver. 040ce2033d36691b0e5bb3efb56830ba82d8fb70 -->
