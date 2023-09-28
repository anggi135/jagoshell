<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QerzaAdminController extends Controller{
	
    // Dashboard
    public function dashboard_1(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.index', compact('page_title', 'page_description'));
    }
    // Dashboard-2
    public function dashboard_2(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.index_2', compact('page_title', 'page_description'));
    }
    // Search Job
    public function search_job(){
        $page_title = 'Search Job';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.search_job', compact('page_title', 'page_description'));
    }
    // Application
    public function application(){
        $page_title = 'Application';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.application', compact('page_title', 'page_description'));
    }
    // Profile
    public function profile(){
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.profile', compact('page_title', 'page_description'));
    }
    // Statistics
    public function statistics(){
        $page_title = 'Statistics';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.statistics', compact('page_title', 'page_description'));
    }
    // Companies
    public function companies(){
        $page_title = 'Companies';
        $page_description = 'Some description for the page';
        return view('qerza.dashboard.companies', compact('page_title', 'page_description'));
    }

    // Calender
    public function app_calender(){
        $page_title = 'Calender';
        $page_description = 'Some description for the page';
        return view('qerza.app.calender', compact('page_title', 'page_description'));
    }
    // Profile
    public function app_profile(){
        $page_title = 'App Profile';
        $page_description = 'Some description for the page';
        return view('qerza.app.profile', compact('page_title', 'page_description'));
    }
    // Post Details
    public function post_details(){
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';		
        return view('qerza.app.post_details', compact('page_title', 'page_description'));
    }
	
    // Chart Chartist
    public function chart_chartist(){
        $page_title = 'Chartist';
        $page_description = 'Some description for the page';
        return view('qerza.chart.chartist', compact('page_title', 'page_description'));
    }
    // Chart Chartjs
    public function chart_chartjs(){
        $page_title = 'Chartjs';
        $page_description = 'Some description for the page';
        return view('qerza.chart.chartjs', compact('page_title', 'page_description'));
    }
    // Chart Flot
    public function chart_flot(){
        $page_title = 'Flot';
        $page_description = 'Some description for the page';
        return view('qerza.chart.flot', compact('page_title', 'page_description'));
    }
    // Chart Morris
    public function chart_morris(){
        $page_title = 'Morris';
        $page_description = 'Some description for the page';
        return view('qerza.chart.morris', compact('page_title', 'page_description'));
    }
    // Chart Peity
    public function chart_peity(){
        $page_title = 'Peity';
        $page_description = 'Some description for the page';
        return view('qerza.chart.peity', compact('page_title', 'page_description'));
    }
    // Chart Sparkline
    public function chart_sparkline(){
        $page_title = 'Sparkline';
        $page_description = 'Some description for the page';
        return view('qerza.chart.sparkline', compact('page_title', 'page_description'));
    }
    // Ecommerce Checkout
    public function ecom_checkout(){
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.checkout', compact('page_title', 'page_description'));
    }
    // Ecommerce Customers
    public function ecom_customers(){
        $page_title = 'Customers';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.customers', compact('page_title', 'page_description'));
    }
    // Ecommerce Invoice
    public function ecom_invoice(){
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.invoice', compact('page_title', 'page_description'));
    }
    // Ecommerce Product Detail
    public function ecom_product_detail(){
        $page_title = 'Product Details';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.product_detail', compact('page_title', 'page_description'));
    }
    // Ecommerce Product Grid
    public function ecom_product_grid(){
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.product_grid', compact('page_title', 'page_description'));
    }
    // Ecommerce Product List
    public function ecom_product_list(){
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.product_list', compact('page_title', 'page_description'));
    }
    // Ecommerce Product Order
    public function ecom_product_order(){
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
        return view('qerza.ecom.product_order', compact('page_title', 'page_description'));
    }
    // Email Compose
    public function email_compose(){
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
        return view('qerza.message.compose', compact('page_title', 'page_description'));
    }
    // Email Inbox
    public function email_inbox(){
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
        return view('qerza.message.inbox', compact('page_title', 'page_description'));
    }
    // Email Read
    public function email_read(){
        $page_title = 'Read';
        $page_description = 'Some description for the page';
        return view('qerza.message.read', compact('page_title', 'page_description'));
    }
	
    // Form Editor Summernote
    public function form_editor_summernote(){
        $page_title = 'Form CkEditor';
        $page_description = 'Some description for the page';
        return view('qerza.form.editor_summernote', compact('page_title', 'page_description'));
	}
    // Form Element
    public function form_element(){
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
        return view('qerza.form.element', compact('page_title', 'page_description'));
    }
    // Form Pickers
    public function form_pickers(){
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
        return view('qerza.form.pickers', compact('page_title', 'page_description'));
    }
    // Form Validation Jquery
    public function form_validation_jquery(){
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
        return view('qerza.form.validation_jquery', compact('page_title', 'page_description'));
    }
    // Form Wizard
    public function form_wizard(){
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
        return view('qerza.form.wizard', compact('page_title', 'page_description'));
    }
    
    	
    // Map Jqvmap
    public function map_jqvmap(){
        $page_title = 'Jqvmap';
        $page_description = 'Some description for the page';
        return view('qerza.map.jqvmap', compact('page_title', 'page_description'));
    }
	
    // Page Error 400
    public function page_error_400(){
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
        return view('qerza.page.error_400', compact('page_title', 'page_description'));
    }
    // Page Error 403
    public function page_error_403(){
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
        return view('qerza.page.error_403', compact('page_title', 'page_description'));
    }
    // Page Error 404
    public function page_error_404(){
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
        return view('qerza.page.error_404', compact('page_title', 'page_description'));
    }
    // Page Error 500
    public function page_error_500(){
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
        return view('qerza.page.error_500', compact('page_title', 'page_description'));
    }
    // Page Error 503
    public function page_error_503(){
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
        return view('qerza.page.error_503', compact('page_title', 'page_description'));
    }
    // Page Forgot Password
    public function page_forgot_password(){
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        return view('qerza.page.forgot_password', compact('page_title', 'page_description'));
    }
    // Page Lock Screen
    public function page_lock_screen(){
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
        return view('qerza.page.lock_screen', compact('page_title', 'page_description'));
    }
    // Page Login
    public function page_login(){
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
        return view('qerza.page.login', compact('page_title', 'page_description'));
    }
    // Page Register
    public function page_register(){
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
        return view('qerza.page.register', compact('page_title', 'page_description'));
    }
    // Table Bootstrap Basic
    public function table_bootstrap_basic(){
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';
        return view('qerza.table.bootstrap_basic', compact('page_title', 'page_description'));
    }
    // Table Datatable Basic
    public function table_datatable_basic(){
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
        return view('qerza.table.datatable_basic', compact('page_title', 'page_description'));
    }
    // UC Nestable.
    public function uc_nestable(){
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
        return view('qerza.uc.nestable', compact('page_title', 'page_description'));
    }
    // UC Lightgallery.
    public function uc_lightgallery(){
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
        return view('qerza.uc.lightgallery', compact('page_title', 'page_description'));
    }
	
    // UC NoUi Slider
    public function uc_noui_slider(){
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
        return view('qerza.uc.noui_slider', compact('page_title', 'page_description'));
    }
	
    // UC Select2
    public function uc_select2(){
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
        return view('qerza.uc.select2', compact('page_title', 'page_description'));
    }
	
    // UC Sweetalert
    public function uc_sweetalert(){
        $page_title = 'Sweet Alert';
        $page_description = 'Some description for the page';
        return view('qerza.uc.sweetalert', compact('page_title', 'page_description'));
    }
	
    // UC Toastr
    public function uc_toastr(){
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
        return view('qerza.uc.toastr', compact('page_title', 'page_description'));
    }
	
    // Ui Accordion
    public function ui_accordion(){
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
        return view('qerza.ui.accordion', compact('page_title', 'page_description'));
    }
	
    // Ui Alert
    public function ui_alert(){
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
        return view('qerza.ui.alert', compact('page_title', 'page_description'));
    }
	
    // Ui Badge
    public function ui_badge(){
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
        return view('qerza.ui.badge', compact('page_title', 'page_description'));
    }
	
    // Ui Button
    public function ui_button(){
        $page_title = 'Buttons';
        $page_description = 'Some description for the page';
        return view('qerza.ui.button', compact('page_title', 'page_description'));
    }
	
    // Ui Button Group
    public function ui_button_group(){
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
        return view('qerza.ui.button_group', compact('page_title', 'page_description'));
    }
	
    // Ui Card
    public function ui_card(){
        $page_title = 'Card';
        $page_description = 'Some description for the page';
        return view('qerza.ui.card', compact('page_title', 'page_description'));
    }
	
    // Ui Carousel
    public function ui_carousel(){
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
        return view('qerza.ui.carousel', compact('page_title', 'page_description'));
    }
	
    // Ui Dropdown
    public function ui_dropdown(){
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
        return view('qerza.ui.dropdown', compact('page_title', 'page_description'));
    }
	
    // Ui Grid
    public function ui_grid(){
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
        return view('qerza.ui.grid', compact('page_title', 'page_description'));
    }
	
    // Ui List Group
    public function ui_list_group(){
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
        return view('qerza.ui.list_group', compact('page_title', 'page_description'));
    }
	
    // Ui Media Object
    public function ui_media_object(){
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
        return view('qerza.ui.media_object', compact('page_title', 'page_description'));
    }
	
    // Ui Modal
    public function ui_modal(){
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
        return view('qerza.ui.modal', compact('page_title', 'page_description'));
    }
	
    // Ui Pagination
    public function ui_pagination(){
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
        return view('qerza.ui.pagination', compact('page_title', 'page_description'));
    }
	
    // Ui Popover
    public function ui_popover(){
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
        return view('qerza.ui.popover', compact('page_title', 'page_description'));
    }
	
    // Ui Progressbar
    public function ui_progressbar(){
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
        return view('qerza.ui.progressbar', compact('page_title', 'page_description'));
    }
	
    // Ui Tab
    public function ui_tab(){
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
        return view('qerza.ui.tab', compact('page_title', 'page_description'));
    }
	

    // Ui Typography
    public function ui_typography(){
        $page_title = 'UI Typography';
        $page_description = 'Some description for the page';
        return view('qerza.ui.typography', compact('page_title', 'page_description'));
    }
	
    // Widget Basic
    public function widget_basic(){
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
        return view('qerza.widget.widget_basic', compact('page_title', 'page_description'));
    }
}
