<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => env('APP_NAME', 'Qerza Laravel'),


	'public' => [
		'global' => [
			'css' => [
				'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet',
				'css/style.css',
			],
			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				],
				'bottom'=> [
					'js/custom.min.js',
					'js/deznav-init.js',
				],
			],
		],
		'pagelevel' => [
			'css' => [
				'QerzaAdminController_dashboard_1' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
					'vendor/owl-carousel/owl.carousel.css',
				],
				'QerzaAdminController_dashboard_2' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
					'vendor/owl-carousel/owl.carousel.css',
				],
				'QerzaAdminController_search_job' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
				],
				'QerzaAdminController_application' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'QerzaAdminController_profile' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
				],
				'QerzaAdminController_statistics' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
				],
				'QerzaAdminController_companies' => [
					'vendor/jqvmap/css/jqvmap.min.css',
					'vendor/chartist/css/chartist.min.css',
				],
				'QerzaAdminController_app_calender' => [
					'vendor/fullcalendar/css/main.min.css',
				],
				'QerzaAdminController_app_profile' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'QerzaAdminController_post_details' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'QerzaAdminController_chart_chartist' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'QerzaAdminController_chart_chartjs' => [
				],
				'QerzaAdminController_chart_flot' => [

				],
				'QerzaAdminController_chart_morris' => [
				],
				'QerzaAdminController_chart_peity' => [
				],
				'QerzaAdminController_chart_sparkline' => [
				],
				'QerzaAdminController_ecom_checkout' => [
				],
				'QerzaAdminController_ecom_customers' => [
				],
				'QerzaAdminController_ecom_invoice' => [
				],
				'QerzaAdminController_ecom_product_detail' => [
					'vendor/star-rating/star-rating-svg.css',
				],
				'QerzaAdminController_ecom_product_grid' => [
				],
				'QerzaAdminController_ecom_product_list' => [
					'vendor/star-rating/star-rating-svg.css',
				],
				'QerzaAdminController_ecom_product_order' => [
				],
				'QerzaAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.css',
				],
				'QerzaAdminController_email_inbox' => [
				],
				'QerzaAdminController_email_read' => [
				],
				'QerzaAdminController_form_editor_summernote' => [
				],
				'QerzaAdminController_form_element' => [
				],
				'QerzaAdminController_form_pickers' => [
					'vendor/bootstrap-daterangepicker/daterangepicker.css',
					'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
					'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
					'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					'vendor/pickadate/themes/default.css',
					'vendor/pickadate/themes/default.date.css',
					'https://fonts.googleapis.com/icon?family=Material+Icons',
				],
				'QerzaAdminController_form_validation_jquery' => [
				],
				'QerzaAdminController_form_wizard' => [
					'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
				],
				'QerzaAdminController_map_jqvmap' => [
					'vendor/jqvmap/css/jqvmap.min.css',
				],
				'QerzaAdminController_table_bootstrap_basic' => [
				],
				'QerzaAdminController_table_datatable_basic' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'QerzaAdminController_uc_lightgallery' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'QerzaAdminController_uc_nestable' => [
					'vendor/nestable2/css/jquery.nestable.min.css',
				],
				'QerzaAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.css',
				],
				'QerzaAdminController_uc_select2' => [
					'vendor/select2/css/select2.min.css',
				],
				'QerzaAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'QerzaAdminController_uc_toastr' => [
					'vendor/toastr/css/toastr.min.css',
				],
				'QerzaAdminController_ui_accordion' => [
				],
				'QerzaAdminController_ui_alert' => [
				],
				'QerzaAdminController_ui_badge' => [
				],
				'QerzaAdminController_ui_button' => [
				],
				'QerzaAdminController_ui_button_group' => [
				],
				'QerzaAdminController_ui_card' => [
				],
				'QerzaAdminController_ui_carousel' => [
				],
				'QerzaAdminController_ui_dropdown' => [
				],
				'QerzaAdminController_ui_grid' => [
				],
				'QerzaAdminController_ui_list_group' => [
				],
				'QerzaAdminController_ui_media_object' => [
				],
				'QerzaAdminController_ui_modal' => [
				],
				'QerzaAdminController_ui_pagination' => [
				],
				'QerzaAdminController_ui_popover' => [
				],
				'QerzaAdminController_ui_progressbar' => [
				],
				'QerzaAdminController_ui_tab' => [
				],
				'QerzaAdminController_ui_typography' => [
				],
				'QerzaAdminController_widget_basic' => [
					'vendor/chartist/css/chartist.min.css',
				],
			],
			'js' => [
				'QerzaAdminController_dashboard_1' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/owl-carousel/owl.carousel.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
				],
				'QerzaAdminController_dashboard_2' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/owl-carousel/owl.carousel.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
				],
				'QerzaAdminController_search_job' => [
					'vendor/chart-js/Chart.bundle.min.js',
				],
				'QerzaAdminController_application' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
				],
				'QerzaAdminController_profile' => [
					'vendor/chart-js/Chart.bundle.min.js',
				],
				'QerzaAdminController_statistics' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/statistics.js',
				],
				'QerzaAdminController_companies' => [
					'vendor/chart-js/Chart.bundle.min.js',
				],
				'QerzaAdminController_app_calender' => [
					'vendor/jqueryui/js/jquery-ui.min.js',
					'vendor/moment/moment.min.js',
					'vendor/fullcalendar/js/main.min.js',
					'js/plugins-init/fullcalendar-init.js',
				],
				'QerzaAdminController_app_profile' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'QerzaAdminController_post_details' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'QerzaAdminController_chart_chartist' => [
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'js/plugins-init/chartist-init.js',
				],
				'QerzaAdminController_chart_chartjs' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'js/plugins-init/chartjs-init.js',
				],
				'QerzaAdminController_chart_flot' => [
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'js/plugins-init/flot-init.js',
				],
				'QerzaAdminController_chart_morris' => [
					'vendor/raphael/raphael.min.js',
					'vendor/morris/morris.min.js',
					'js/plugins-init/morris-init.js',
				],
				'QerzaAdminController_chart_peity' => [
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',

				],
				'QerzaAdminController_chart_sparkline' => [
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
				],
				'QerzaAdminController_ecom_checkout' => [
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'QerzaAdminController_ecom_customers' => [
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'QerzaAdminController_ecom_invoice' => [
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'QerzaAdminController_ecom_product_detail' => [
					'vendor/highlightjs/highlight.pack.min.js',
					'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'QerzaAdminController_ecom_product_grid' => [
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'QerzaAdminController_ecom_product_list' => [
					'vendor/highlightjs/highlight.pack.min.js',
					'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'QerzaAdminController_ecom_product_order' => [
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'QerzaAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.js',
				],
				'QerzaAdminController_email_inbox' => [
				],
				'QerzaAdminController_email_read' => [
				],
				'QerzaAdminController_form_editor_summernote' => [
					'vendor/ckeditor/ckeditor.js'
				],
				'QerzaAdminController_form_element' => [
				],
				'QerzaAdminController_form_pickers' => [
					'vendor/moment/moment.min.js',
					'vendor/bootstrap-daterangepicker/daterangepicker.js',
					'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
					'vendor/jquery-asColor/jquery-asColor.min.js',
					'vendor/jquery-asGradient/jquery-asGradient.min.js',
					'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
					'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
					'vendor/pickadate/picker.js',
					'vendor/pickadate/picker.time.js',
					'vendor/pickadate/picker.date.js',
					'js/plugins-init/bs-daterange-picker-init.js',
					'js/plugins-init/clock-picker-init.js',
					'js/plugins-init/jquery-asColorPicker.init.js',
					'js/plugins-init/material-date-picker-init.js',
					'js/plugins-init/pickadate-init.js',
				],
				'QerzaAdminController_form_validation_jquery' => [
					'vendor/jquery-validation/jquery.validate.min.js',
					'js/plugins-init/jquery.validate-init.js',
				],
				'QerzaAdminController_form_wizard' => [
					'vendor/jquery-validation/jquery.validate.min.js',
					'js/plugins-init/jquery.validate-init.js',
					'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
				],
				'QerzaAdminController_map_jqvmap' => [
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
					'js/plugins-init/jqvmap-init.js',
				],
				'QerzaAdminController_page_error_400' => [
				],
				'QerzaAdminController_page_error_403' => [
				],
				'QerzaAdminController_page_error_404' => [
				],
				'QerzaAdminController_page_error_500' => [
				],
				'QerzaAdminController_page_error_503' => [
				],
				'QerzaAdminController_page_forgot_password' => [
				],
				'QerzaAdminController_page_lock_screen' => [
					'vendor/deznav/deznav.min.js',
				],
				'QerzaAdminController_page_login' => [
				],
				'QerzaAdminController_page_register' => [
				],
				'QerzaAdminController_table_bootstrap_basic' => [
				],
				'QerzaAdminController_table_datatable_basic' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'QerzaAdminController_uc_lightgallery' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'QerzaAdminController_uc_nestable' => [
					'vendor/nestable2/js/jquery.nestable.min.js',
					'js/plugins-init/nestable-init.js',
				],
				'QerzaAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.js',
					'vendor/wnumb/wNumb.js',
					'js/plugins-init/nouislider-init.js',
				],
				'QerzaAdminController_uc_select2' => [
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
				],
				'QerzaAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.js',
					'js/plugins-init/sweetalert.init.js',
				],
				'QerzaAdminController_uc_toastr' => [
					'vendor/toastr/js/toastr.min.js',
					'js/plugins-init/toastr-init.js',
				],
				'QerzaAdminController_ui_accordion' => [
				],
				'QerzaAdminController_ui_alert' => [
				],
				'QerzaAdminController_ui_badge' => [
				],
				'QerzaAdminController_ui_button' => [
				],
				'QerzaAdminController_ui_button_group' => [
				],
				'QerzaAdminController_ui_card' => [
				],
				'QerzaAdminController_ui_carousel' => [
				],
				'QerzaAdminController_ui_dropdown' => [
				],
				'QerzaAdminController_ui_grid' => [
				],
				'QerzaAdminController_ui_list_group' => [
				],
				'QerzaAdminController_ui_media_object' => [
				],
				'QerzaAdminController_ui_modal' => [
				],
				'QerzaAdminController_ui_pagination' => [
				],
				'QerzaAdminController_ui_popover' => [
				],
				'QerzaAdminController_ui_progressbar' => [
				],
				'QerzaAdminController_ui_tab' => [
				],
				'QerzaAdminController_ui_typography' => [
				],
				'QerzaAdminController_widget_basic' => [
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
					'vendor/chart-js/chart.bundle.min.js',
					'js/plugins-init/widgets-script-init.js',
				]

			]
		],
	]
];
