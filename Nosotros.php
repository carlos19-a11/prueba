<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Crud PHP</title>
	<meta charset="utf-8">

	<?php
	require_once('./layouts/stylos.php');
	?>
</head>

<body>
	<header>
		<?php
		require_once('./layouts/cabecera.php');
		?>

	</header>
	<section>
		<link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style_nosotros.css">
		<!-- <link rel="alternate" type="application/rss+xml" title="Gola &raquo; Feed" href="../feed/index.html" /> -->
		<!-- <link rel="alternate" type="application/rss+xml" title="Gola &raquo; Comments Feed" href="../comments/feed/index.html" /> -->
		<script>
			window._wpemojiSettings = {
				"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
				"ext": ".png",
				"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
				"svgExt": ".svg",
				"source": {
					"concatemoji": "https:\/\/gola.peerduck.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
				}
			};
			/*! This file is auto-generated */
			! function(i, n) {
				var o, s, e;

				function c(e) {
					try {
						var t = {
							supportTests: e,
							timestamp: (new Date).valueOf()
						};
						sessionStorage.setItem(o, JSON.stringify(t))
					} catch (e) {}
				}

				function p(e, t, n) {
					e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
					var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
						r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
					return t.every(function(e, t) {
						return e === r[t]
					})
				}

				function u(e, t, n) {
					switch (t) {
						case "flag":
							return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
						case "emoji":
							return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
					}
					return !1
				}

				function f(e, t, n) {
					var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
						a = r.getContext("2d", {
							willReadFrequently: !0
						}),
						o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
					return e.forEach(function(e) {
						o[e] = t(a, e, n)
					}), o
				}

				function t(e) {
					var t = i.createElement("script");
					t.src = e, t.defer = !0, i.head.appendChild(t)
				}
				"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, e = new Promise(function(e) {
					i.addEventListener("DOMContentLoaded", e, {
						once: !0
					})
				}), new Promise(function(t) {
					var n = function() {
						try {
							var e = JSON.parse(sessionStorage.getItem(o));
							if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
						} catch (e) {}
						return null
					}();
					if (!n) {
						if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
							var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
								r = new Blob([e], {
									type: "text/javascript"
								}),
								a = new Worker(URL.createObjectURL(r), {
									name: "wpTestEmojiSupports"
								});
							return void(a.onmessage = function(e) {
								c(n = e.data), a.terminate(), t(n)
							})
						} catch (e) {}
						c(n = f(s, u, p))
					}
					t(n)
				}).then(function(e) {
					for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
					n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
						n.DOMReady = !0
					}
				}).then(function() {
					return e
				}).then(function() {
					var e;
					n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
				}))
			}((window, document), window._wpemojiSettings);
		</script>
		<style id='wp-emoji-styles-inline-css'>
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 0.07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>
		<!-- <link rel='stylesheet' id='contact-form-7-css' href='../wp-content/plugins/contact-form-7/includes/css/stylesdfc9.css?ver=5.8.5' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='../wp-content/themes/gola/assets/css/bootstrap84e2.css?ver=1.00' media='all' />
<link rel='stylesheet' id='gola-css' href='../wp-content/themes/gola/style84e2.css?ver=1.00' media='all' /> -->
		<style id='gola-inline-css'>
			:root {
				--accent-color: #ED6C30;
				--accent-color-hover: #D5591F;
				--global-txt-color: #0C0C0C;

				--button-txt-color: #ffffff;
				--button-txt-color-hover: #ffffff;
				--button-bg-color: #ED6C30;
				--button-bg-color-hover: #D5591F;

				--header-menu-txt-color-first: #0C0C0C;
				--header-menu-txt-color-second: #ffffff;
				--header-menu-txt-color-inner: #ffffff;

				--header-menu-sticky-bg-color-first: #ffffff;
				--header-menu-sticky-bg-color-second: #000000;
				--header-menu-sticky-bg-color-inner: #000000;

				--header-cta-txt-color: #ffffff;
				--header-cta-txt-color-hover: #ffffff;
				--header-cta-bg-color: #ED6C30;
				--header-cta-bg-color-hover: #D5591F;

				--header-title-txt-color: #ffffff;
				--header-bg-overlay-color: #000000;
				--logo-height: 40px;

				--footer-txt-color: #0C0C0C;
				--footer-bg-color: #e4e5e9;
			}

			:root {
				--blog-sidebar-position-flex-flow: row-reverse;
				--blog-sidebar-position-margin: 0 20px 0 0;
			}

			:root {
				--header-menu-position: center
			}
		</style>
		<!-- <link rel='stylesheet' id='elementor-icons-css' href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7bb8.css?ver=5.25.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='../wp-content/plugins/elementor/assets/css/frontend-lite.minf3b2.css?ver=3.18.3' media='all' />

<link rel='stylesheet' id='swiper-css' href='../wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' />
<link rel='stylesheet' id='eael-general-css' href='../wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min7404.css?ver=5.9.3' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COutfit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat+Alternates%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.3' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' media='all' />
<script src="../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src="../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="../wp-content/themes/gola/assets/js/bootstrap.bundle.min84e2.js?ver=1.00" id="bootstrap-js"></script> -->

		<!-- <script src="../wp-content/themes/gola/assets/js/index84e2.js?ver=1.00" id="gola-js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../indexdd35.html?p=28048' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed4bec.json?url=https%3A%2F%2Fgola.peerduck.com%2Foil-gas-industry%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed8a20?url=https%3A%2F%2Fgola.peerduck.com%2Foil-gas-industry%2F&amp;format=xml" /> -->
		<meta name="generator" content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-internal, google_font-enabled, font_display-auto">
		<style>
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}
		</style>
		<link rel="icon" href="../wp-content/uploads/2023/06/cropped-fav-150x150.png" sizes="32x32" />
		<link rel="icon" href="../wp-content/uploads/2023/06/cropped-fav-300x300.png" sizes="192x192" />
		<!-- <link rel="apple-touch-icon" href="../wp-content/uploads/2023/06/cropped-fav-300x300.png" /> -->
		<meta name="msapplication-TileImage" content="https://gola.peerduck.com/wp-content/uploads/2023/06/cropped-fav-300x300.png" />
		<!-- </head> -->

		<!-- <main id="site-content" class="flex-grow-1" role="main"> -->



		<div class="entry-content clearfix">
			<div data-elementor-type="wp-page" data-elementor-id="28048" class="elementor elementor-28048">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-db5e5cf elementor-section-height-min-height elementor-reverse-tablet elementor-reverse-mobile elementor-section-items-bottom elementor-section-boxed elementor-section-height-default" data-id="db5e5cf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-custom">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a641d46" data-id="a641d46" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:500,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-0447b8f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0447b8f" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-eab6ec9" data-id="eab6ec9" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-4fc8819 elementor-widget elementor-widget-text-editor" data-id="4fc8819" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
													</div>
												</div>
												<div class="elementor-element elementor-element-b83f8a6 elementor-widget elementor-widget-text-editor" data-id="b83f8a6" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Oil and gas for a sustainable tomorrow</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-680e75d elementor-invisible" data-id="680e75d" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">


												<div class="elementor-element elementor-element-c2bcd00 elementor-tablet-align-center elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button" data-id="c2bcd00" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">

														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-480c0e5 elementor-tablet-align-center elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="480c0e5" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">

														</div>
													</div>
												</div>

											</div>
										</div>
								</section>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-45e307f elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="45e307f" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-45e701f" data-id="45e701f" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-de629a7 elementor-widget elementor-widget-image" data-id="de629a7" data-element_type="widget" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<img fetchpriority="high" decoding="async" width="1024" height="683" src="../wp-content/uploads/2023/04/4tiut4hg-1024x683.png" class="attachment-large size-large wp-image-28067" alt="" srcset="https://gola.peerduck.com/wp-content/uploads/2023/04/4tiut4hg-1024x683.png 1024w, https://gola.peerduck.com/wp-content/uploads/2023/04/4tiut4hg-300x200.png 300w, https://gola.peerduck.com/wp-content/uploads/2023/04/4tiut4hg-768x512.png 768w, https://gola.peerduck.com/wp-content/uploads/2023/04/4tiut4hg-1536x1025.png 1536w, https://gola.peerduck.com/wp-content/uploads/2023/04/4tiut4hg.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" />
													</div>
												</div>
												<div class="elementor-element elementor-element-af3eee2 elementor-widget__width-auto elementor-absolute rotate elementor-widget elementor-widget-text-path" data-id="af3eee2" data-element_type="widget" data-settings="{&quot;text&quot;:&quot;shaping the future for tomorrow&quot;,&quot;align&quot;:&quot;center&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}" data-widget_type="text-path.default">
													<div class="elementor-widget-container">
														<div class="e-text-path" data-text="shaping the future for tomorrow" data-url="//gola.peerduck.com/wp-content/plugins/elementor/assets/svg-paths/circle.svg" data-link-url=""></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-89b7a46 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="89b7a46" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7915e39" data-id="7915e39" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-45ef873 elementor-reverse-tablet elementor-reverse-mobile elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="45ef873" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-736cebd" data-id="736cebd" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-fa7cbdf elementor-widget elementor-widget-text-editor" data-id="fa7cbdf" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														About us </div>
												</div>
												<div class="elementor-element elementor-element-f8f4606 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-ucaddon_gradient_underline_text_effect" data-id="f8f4606" data-element_type="widget" data-widget_type="ucaddon_gradient_underline_text_effect.default">
													<div class="elementor-widget-container">
														<!-- start Gradient Underline Text Effect -->


														<div id="uc_gradient_underline_text_effect_elementor_f8f4606" class="gradient_underline_text_effect" style="color:#0C0C0C;">
															<span class="beginning_text" style="color:;">Learn about our history, mission, and </span>
															<span class="underline--magical" style="color:;">values</span>
															<span class="ending_text" style="color:;"></span>
														</div>
														<!-- end Gradient Underline Text Effect -->
													</div>
												</div>
												<div class="elementor-element elementor-element-8ff75a4 elementor-widget elementor-widget-text-editor" data-id="8ff75a4" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														At Gola, we&#8217;re committed to delivering excellence in the oil industry. With our state-of-the-art technology and advanced processes, we&#8217;re able to provide innovative solutions to meet the evolving needs of our clients worldwide. We pride ourselves on our commitment to safety, reliability, and sustainability, and we&#8217;re always looking for new ways to improve our operations. </div>
												</div>
												<div class="elementor-element elementor-element-80e3b87 elementor-tablet-align-center elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="80e3b87" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a class="elementor-button elementor-button-link elementor-size-xl" href="../contact-us/index.html">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">Discover more</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7e40d66" data-id="7e40d66" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-5daa851 elementor-widget elementor-widget-image" data-id="5daa851" data-element_type="widget" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<img decoding="async" width="1024" height="788" src="../wp-content/uploads/2023/04/i24uthg4-1024x788.png" class="attachment-large size-large wp-image-27971" alt="" srcset="https://gola.peerduck.com/wp-content/uploads/2023/04/i24uthg4-1024x788.png 1024w, https://gola.peerduck.com/wp-content/uploads/2023/04/i24uthg4-300x231.png 300w, https://gola.peerduck.com/wp-content/uploads/2023/04/i24uthg4-768x591.png 768w, https://gola.peerduck.com/wp-content/uploads/2023/04/i24uthg4-1536x1182.png 1536w, https://gola.peerduck.com/wp-content/uploads/2023/04/i24uthg4.png 1725w" sizes="(max-width: 1024px) 100vw, 1024px" />
													</div>
												</div>
												<div class="elementor-element elementor-element-a426600 elementor-widget elementor-widget-html" data-id="a426600" data-element_type="widget" data-widget_type="html.default">
													<div class="elementor-widget-container">
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>


				<section class="elementor-section elementor-inner-section elementor-element elementor-element-f22b175 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f22b175" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fe509a2" data-id="fe509a2" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-745dacf elementor-widget elementor-widget-image-carousel" data-id="745dacf" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:0,&quot;speed&quot;:8000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:60,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image-carousel.default">
									<div class="elementor-widget-container">
										<div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
											<div class="elementor-image-carousel swiper-wrapper swiper-image-stretch" aria-live="off">
												<div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 6">
													<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="assets/img/bg.png" alt="g-1" /></figure>
												</div>
												<div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="2 of 6">
													<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="assets/img/bg.png" alt="g-2" /></figure>
												</div>
												<div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="3 of 6">
													<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="assets/img/bg.png" alt="i4uhtg4t" /></figure>
												</div>
												<div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="4 of 6">
													<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="assets/img/bg.png" alt="g04" /></figure>
												</div>
												<div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="5 of 6">
													<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="assets/img/bg.png" alt="g-6" /></figure>
												</div>
												<div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="6 of 6">
													<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="assets/img/bg.png" alt="g-3" /></figure>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-88b2de7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="88b2de7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-98d3246" data-id="98d3246" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-ae246e3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ae246e3" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7a2a77d" data-id="7a2a77d" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-6b3d2b7 elementor-widget elementor-widget-text-editor" data-id="6b3d2b7" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Careers </div>
												</div>
												<div class="elementor-element elementor-element-f4ea511 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-ucaddon_gradient_underline_text_effect" data-id="f4ea511" data-element_type="widget" data-widget_type="ucaddon_gradient_underline_text_effect.default">
													<div class="elementor-widget-container">
														<!-- start Gradient Underline Text Effect -->


														<div id="uc_gradient_underline_text_effect_elementor_f4ea511" class="gradient_underline_text_effect" style="color:#FFFFFF;">
															<span class="beginning_text" style="color:;">Join our team of talented professionals and take your career to </span>
															<span class="underline--magical" style="color:;">the next level</span>
															<span class="ending_text" style="color:;"></span>
														</div>
														<!-- end Gradient Underline Text Effect -->
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0638427" data-id="0638427" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-cf6113b elementor-tablet-align-center elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="cf6113b" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a class="elementor-button elementor-button-link elementor-size-xl" href="../contact-us/index.html">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">Discover more</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-e99041a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e99041a" data-element_type="section">
									<div class="elementor-container elementor-column-gap-no">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7e801bd" data-id="7e801bd" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:100}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-06db1b3 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="06db1b3" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:150}">
													<div class="elementor-container elementor-column-gap-no">
														<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-34a19e9" data-id="34a19e9" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-8629596 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="8629596" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">01.</h2>
																	</div>
																</div>
																<div class="elementor-element elementor-element-2c0d773 elementor-widget elementor-widget-toggle" data-id="2c0d773" data-element_type="widget" data-widget_type="toggle.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-toggle">
																			<div class="elementor-toggle-item">
																				<div id="elementor-tab-title-4611" class="elementor-tab-title" data-tab="1" role="button" aria-controls="elementor-tab-content-4611" aria-expanded="false">
																					<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
																						<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
																						<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
																					</span>
																					<a class="elementor-toggle-title" tabindex="0">Career growth opportunities</a>
																				</div>

																				<div id="elementor-tab-content-4611" class="elementor-tab-content elementor-clearfix" data-tab="1" role="region" aria-labelledby="elementor-tab-title-4611"> At Gola, we believe in investing in our employees&#8217; professional development. We offer opportunities for career growth and development, with clear career paths and opportunities to take on new roles and responsibilities as you gain experience. </div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-49ccb9d elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="49ccb9d" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:250}">
													<div class="elementor-container elementor-column-gap-no">
														<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-88e0528" data-id="88e0528" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-cbb0e61 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="cbb0e61" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">02.</h2>
																	</div>
																</div>
																<div class="elementor-element elementor-element-ebb5375 elementor-widget elementor-widget-toggle" data-id="ebb5375" data-element_type="widget" data-widget_type="toggle.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-toggle">
																			<div class="elementor-toggle-item">
																				<div id="elementor-tab-title-2471" class="elementor-tab-title" data-tab="1" role="button" aria-controls="elementor-tab-content-2471" aria-expanded="false">
																					<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
																						<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
																						<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
																					</span>
																					<a class="elementor-toggle-title" tabindex="0">Competitive benefits</a>
																				</div>

																				<div id="elementor-tab-content-2471" class="elementor-tab-content elementor-clearfix" data-tab="1" role="region" aria-labelledby="elementor-tab-title-2471">We understand that attracting and retaining top talent requires offering competitive compensation packages. That&#8217;s why we offer competitive salaries, performance-based bonuses, and comprehensive benefits such as healthcare and retirement plans.</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-5035a9e elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="5035a9e" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:450}">
													<div class="elementor-container elementor-column-gap-no">
														<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f99a4da" data-id="f99a4da" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-be03102 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="be03102" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">03.</h2>
																	</div>
																</div>
																<div class="elementor-element elementor-element-3f72f6f elementor-widget elementor-widget-toggle" data-id="3f72f6f" data-element_type="widget" data-widget_type="toggle.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-toggle">
																			<div class="elementor-toggle-item">
																				<div id="elementor-tab-title-6651" class="elementor-tab-title" data-tab="1" role="button" aria-controls="elementor-tab-content-6651" aria-expanded="false">
																					<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
																						<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
																						<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
																					</span>
																					<a class="elementor-toggle-title" tabindex="0">Rewarding work</a>
																				</div>

																				<div id="elementor-tab-content-6651" class="elementor-tab-content elementor-clearfix" data-tab="1" role="region" aria-labelledby="elementor-tab-title-6651">Working in the oil industry can be both challenging and rewarding, with opportunities to work on cutting-edge projects and solve complex problems. </div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7b6b895" data-id="7b6b895" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-b7214fb elementor-widget elementor-widget-image" data-id="b7214fb" data-element_type="widget" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<img loading="lazy" decoding="async" width="604" height="1024" src="../wp-content/uploads/2023/04/toihbjth-604x1024.png" class="attachment-large size-large wp-image-27878" alt="" srcset="https://gola.peerduck.com/wp-content/uploads/2023/04/toihbjth-604x1024.png 604w, https://gola.peerduck.com/wp-content/uploads/2023/04/toihbjth-177x300.png 177w, https://gola.peerduck.com/wp-content/uploads/2023/04/toihbjth-768x1302.png 768w, https://gola.peerduck.com/wp-content/uploads/2023/04/toihbjth-906x1536.png 906w, https://gola.peerduck.com/wp-content/uploads/2023/04/toihbjth.png 1200w" sizes="(max-width: 604px) 100vw, 604px" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>




				<div class="section-inner clearfix"></div><!-- .section-inner -->
			</div>
		</div>
	</section>

	<?php
	require_once('./layouts/scripts.php');
	?>

</body>

</html>