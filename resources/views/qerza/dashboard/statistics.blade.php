@extends('layouts.default')

@section('content')
<div class="container-fluid">
	<div class="row sp-sm-15">
		<div class="col-xl-2 col-xxl-4 col-md-4 col-6">
			<div class="card">
				<div class="card-body">
					<p class="text-black mb-0">Profile Viewed</p>
					<span class="fs-28 text-black font-w600 mb-sm-5 mb-3 d-block">456k</span>
					<div class="d-flex align-items-center">
						<svg class="min-w42 primary-icon me-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21 6.99982C12.021 6.99982 4.20051 12.6394 0 21C4.20051 29.3622 12.021 35.0002 21 35.0002C29.979 35.0002 37.7995 29.3622 42 21C37.7995 12.6394 29.979 6.99982 21 6.99982ZM21 29.7502C16.1668 29.7502 12.2498 25.8332 12.2498 21C12.2498 16.1668 16.1668 12.2498 21 12.2498C25.8332 12.2498 29.7502 16.1668 29.7502 21C29.7502 25.8332 25.8332 29.7502 21 29.7502Z" fill="#8743DF"></path>
							<path d="M21 26.25C23.8995 26.25 26.25 23.8995 26.25 21C26.25 18.1005 23.8995 15.75 21 15.75C18.1005 15.75 15.75 18.1005 15.75 21C15.75 23.8995 18.1005 26.25 21 26.25Z" fill="#8743DF"></path>
						</svg>
						<div>
							<span class="font-w600 text-success d-block">+24% </span>
							<span class="fs-12">than last month</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-xxl-4 col-md-4 col-6">
			<div class="card">
				<div class="card-body">
					<p class="text-black mb-0">Unread Messages</p>
					<span class="fs-28 text-black font-w600 mb-sm-5 mb-3 d-block">28</span>
					<div class="d-flex align-items-center">
						<svg class="min-w42 primary-icon me-3" width="42" height="42" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M33.0465 38.8331C33.3981 38.8331 33.745 38.9669 34.0088 39.2217C35.6956 40.8505 38.1561 41.3929 40.3434 40.714C38.9357 37.7814 38.7407 34.4217 39.8315 31.3109C41.1853 27.4404 41.5246 23.5611 39.9839 19.6703C38.6302 16.2524 36.0181 13.4128 32.7122 11.7935C32.9156 12.8777 33.0181 13.9825 33.0181 15.0989C33.0182 19.8378 31.196 24.2948 27.8873 27.6491C24.5783 31.0038 20.1426 32.8901 15.3975 32.9606C14.5158 32.9744 13.6382 32.9225 12.7705 32.8082C15.3784 37.3794 20.2967 40.3565 25.7014 40.4367C28.0657 40.4732 30.3359 39.9779 32.45 38.9683C32.6404 38.8773 32.8443 38.8331 33.0465 38.8331Z" fill="#8743DF"></path>
							<path d="M15.4356 0.00331767C7.01784 -0.163828 0.0203427 6.64603 4.56442e-05 15.062C-0.00492713 17.1182 0.396447 19.1118 1.1931 20.9876C1.20467 21.0149 1.21543 21.0425 1.22517 21.0705C2.31604 24.1813 2.12108 27.541 0.713283 30.4737C2.9008 31.1523 5.361 30.6102 7.04788 28.9813C7.46347 28.5798 8.08527 28.4787 8.6067 28.728C10.7205 29.7376 12.991 30.2344 15.3552 30.1965C23.7071 30.0725 30.2493 23.4409 30.2492 15.0991C30.2493 6.93942 23.6039 0.167521 15.4356 0.00331767ZM7.05702 17.3541C5.84762 17.3541 4.86717 16.3753 4.86717 15.1679C4.86717 13.9606 5.84762 12.9817 7.05702 12.9817C8.26642 12.9817 9.24686 13.9606 9.24686 15.1679C9.24676 16.3753 8.26642 17.3541 7.05702 17.3541ZM15.1247 17.3541C13.9153 17.3541 12.9348 16.3753 12.9348 15.1679C12.9348 13.9606 13.9153 12.9817 15.1247 12.9817C16.3341 12.9817 17.3145 13.9606 17.3145 15.1679C17.3145 16.3753 16.3341 17.3541 15.1247 17.3541ZM23.1924 17.3541C21.983 17.3541 21.0026 16.3753 21.0026 15.1679C21.0026 13.9606 21.983 12.9817 23.1924 12.9817C24.4018 12.9817 25.3823 13.9606 25.3823 15.1679C25.3823 16.3753 24.4018 17.3541 23.1924 17.3541Z" fill="#8743DF"></path>
						</svg>
						<div>
							<span class="font-w600 fs-12 text-primary d-block">Go to Message</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-xxl-4 col-md-4 col-6">
			<div class="card">
				<div class="card-body">
					<p class="text-black mb-0">Application Sent</p>
					<span class="fs-28 text-black font-w600 mb-sm-5 mb-3 d-block">651</span>
					<div class="d-flex align-items-center">
						<svg class="min-w42 me-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0)">
							<path d="M38.4998 10.4995H35.0002V38.4998H38.4998C40.4245 38.4998 42 36.9238 42 34.9991V13.9991C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="#2BC155"></path>
							<path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5756 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="#2BC155"></path>
							<path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9996V34.9996C0 36.9243 1.57551 38.5003 3.50017 38.5003H6.99983V10.4995H3.50017Z" fill="#2BC155"></path>
							</g>
							<defs>
							<clipPath id="clip0">
							<rect width="42" height="42" fill="white"></rect>
							</clipPath>
							</defs>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-xxl-4 col-md-4 col-6">
			<div class="card">
				<div class="card-body">
					<p class="text-black mb-0">App. Answered</p>
					<span class="fs-28 text-black font-w600 mb-sm-5 mb-3 d-block">24</span>
					<div class="d-flex align-items-center">
						<svg class="min-w42 me-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.84 15.2366V5.88067C21.84 5.56149 21.6603 5.27085 21.3764 5.12804C21.0925 4.98522 20.7497 5.01713 20.496 5.20867L0.336 20.3287C0.124359 20.4866 0 20.7352 0 21.0007C0 21.2644 0.124359 21.513 0.336 21.6727L20.496 36.7927C20.7496 36.9842 21.0924 37.0128 21.3764 36.8717C21.6603 36.7289 21.84 36.4382 21.84 36.1207V26.9428C31.4647 27.3846 37.3766 30.4304 40.409 36.4952C40.5535 36.7859 40.8458 36.9606 41.16 36.9606C41.2238 36.9606 41.2876 36.9522 41.3532 36.937C41.7328 36.848 42 36.5103 42 36.1206C42 24.3623 34.1157 16.2379 21.84 15.2366Z" fill="#FF9330"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-xxl-4 col-md-4 col-6">
			<div class="card">
				<div class="card-body">
					<p class="text-black mb-0">Interviewed</p>
					<span class="fs-28 text-black font-w600 mb-sm-5 mb-3 d-block">261</span>
					<div class="d-flex align-items-center">
						<svg class="min-w42 me-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M33.25 8.74997H31.5V5.24997C31.5 4.78584 31.3156 4.34072 30.9874 4.01253C30.6593 3.68434 30.2141 3.49997 29.75 3.49997C29.2859 3.49997 28.8407 3.68434 28.5126 4.01253C28.1844 4.34072 28 4.78584 28 5.24997V8.74997H14V5.24997C14 4.78584 13.8156 4.34072 13.4874 4.01253C13.1592 3.68434 12.7141 3.49997 12.25 3.49997C11.7859 3.49997 11.3408 3.68434 11.0126 4.01253C10.6844 4.34072 10.5 4.78584 10.5 5.24997V8.74997H8.75C7.35761 8.74997 6.02226 9.30309 5.03769 10.2877C4.05312 11.2722 3.5 12.6076 3.5 14V15.75H38.5V14C38.5 12.6076 37.9469 11.2722 36.9623 10.2877C35.9777 9.30309 34.6424 8.74997 33.25 8.74997Z" fill="#3F9AE0"></path>
							<path d="M3.5 33.25C3.5 34.6424 4.05312 35.9777 5.03769 36.9623C6.02226 37.9469 7.35761 38.5 8.75 38.5H33.25C34.6424 38.5 35.9777 37.9469 36.9623 36.9623C37.9469 35.9777 38.5 34.6424 38.5 33.25V19.25H3.5V33.25Z" fill="#3F9AE0"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-xxl-4 col-md-4 col-6">
			<div class="card">
				<div class="card-body">
					<p class="text-black mb-0">Hired</p>
					<span class="fs-28 text-black font-w600 mb-sm-5 mb-3 d-block">69</span>
					<div class="d-flex align-items-center">
						<svg class="min-w42 primary-icon me-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip1)">
							<path d="M39.5172 32.7361L39.3003 32.2672C38.6496 30.7299 30.6354 28.3739 29.9713 28.3362L29.4399 28.377C28.3472 28.6021 27.1435 29.6376 24.6167 31.8772C21.7702 30.5598 17.8713 27.0487 16.0334 24.9748C14.0432 22.7326 11.5603 18.9618 10.6679 16.1447C13.55 13.5905 14.7507 12.4818 14.8271 11.2486C14.8679 10.5845 13.4932 2.35035 12.0452 1.51531L11.6114 1.24157C10.6896 0.647742 9.29636 -0.249819 7.74812 0.0651832C7.37423 0.143722 7.00806 0.290294 6.66628 0.501594C5.62783 1.15795 3.08493 2.92257 1.92456 5.22985C1.20882 6.6665 0.883478 19.7776 10.7113 30.8608C18.9979 40.2111 28.9285 41.9267 32.7793 42H33.2868C33.6898 41.9914 33.9999 41.9632 34.1903 41.9241L34.2419 41.9159L34.402 41.8668C36.8312 40.9967 38.889 38.6812 39.6616 37.7268C41.0896 35.9596 40.0702 33.8609 39.5172 32.7361Z" fill="#8743DF"></path>
							</g>
							<defs>
							<clipPath id="clip2">
							<rect width="42" height="42" fill="white"></rect>
							</clipPath>
							</defs>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-4">	
			<div class="card">
				<div class="card-header border-0 pb-0">
					<h4 class="fs-20 text-black">Profile Strength</h4>
					<div class="dropdown float-end custom-dropdown mb-0">
						<div class="" data-bs-toggle="dropdown" role="button" aria-expanded="false">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</div>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="javascript:void(0);">Details</a>
							<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
						</div>
					</div>
				</div>
				<div class="card-body pt-0">
					<div id="stackedChart"></div>
					<div class="d-flex mb-3 align-items-center">
						<div>
							<svg class="me-3 min-w32" width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="32" height="23" rx="11.5" fill="#2BC155"></rect>
							</svg>
							<span class="fs-14">Aplication Sent</span>
						</div>
						<span class="fs-18 text-black ms-auto font-w600">30%</span>
					</div>
					<div class="d-flex mb-3 align-items-center">
						<div>
							<svg class="me-3 min-w32" width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="32" height="23" rx="11.5" fill="#FF9B52"></rect>
							</svg>
							<span class="fs-14">Appllication Answered</span>
						</div>
						<span class="fs-18 text-black ms-auto font-w600">46%</span>
					</div>
					<div class="d-flex mb-3 align-items-center">
						<div>
							<svg class="me-3 min-w32" width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="32" height="23" rx="11.5" fill="#3F9AE0"></rect>
							</svg>
							<span class="fs-14">Hired</span>
						</div>
						<span class="fs-18 text-black ms-auto font-w600">10%</span>
					</div>
					<div class="d-flex align-items-center">
						<div>
							<svg class="me-3 min-w32" width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="32" height="23" rx="11.5" fill="#C4C4C4"></rect>
							</svg>
							<span class="fs-14">Pending</span>
						</div>
						<span class="fs-18 text-black ms-auto font-w600">14%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<div class="card">
				<div class="card-header border-0 pb-0 flex-wrap">
					<h4 class="fs-20 text-black me-4 mb-2">Visitor Graph</h4>
					<div class="form-check custom-switch toggle-switch text-end me-3 mb-2">
						<input type="checkbox" class="form-check-input" id="customSwitch1">
						<label class="form-check-label" for="customSwitch1">Show Details</label>
					</div>
					
					<div>
						<select class="default-select w-auto style-1" aria-label="Default select example">
						  <option selected>Month</option>
						  <option value="1">Week</option>
						  <option value="2">Today</option>
						 
						</select>
					</div>
				</div>
				<div class="card-body pb-0">
					<div id="chartBar"></div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="card">
				<div class="card-header border-0 pb-0">
					<h4 class="fs-20 text-black">Network</h4>
					<div class="dropdown float-end custom-dropdown mb-0">
						<div class="" data-bs-toggle="dropdown" role="button" aria-expanded="false">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</div>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="javascript:void(0);">Details</a>
							<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row sp10">
						<div class="col-xl-3 col-xxl-6 col-md-3 col-6 mb-4 text-center">
							<div class="d-inline-block ms-auto me-auto mb-2 relative donut-chart-sale me-4">
								<span class="donut2" data-peity='{ "fill": ["rgb(135, 67, 223)", "rgba(239, 239, 239, 1)"],   "innerRadius": 38, "radius": 10}'>6/9</span>
								<small class="text-black fs-20">66%</small>
							</div>
							<h6 class="fs-18 text-black font-w600 mb-0">Engineer</h6>
							<span class="fs-14">5,050 Vacancy</span>
						</div>
						<div class="col-xl-3 col-xxl-6 col-md-3 col-6 mb-4 text-center">
							<div class="d-inline-block ms-auto me-auto mb-2 relative donut-chart-sale me-4">
								<span class="donut2" data-peity='{ "fill": ["rgb(135, 67, 223)", "rgba(239, 239, 239, 1)"],   "innerRadius": 38, "radius": 10}'>3/9</span>
								<small class="text-black fs-20">31%</small>
							</div>
							<h6 class="fs-18 text-black font-w600 mb-0">Designer</h6>
							<span class="fs-14">10,524 Vacany</span>
						</div>
						<div class="col-xl-3 col-xxl-6 col-md-3 col-6 mb-4 text-center">
							<div class="d-inline-block ms-auto me-auto mb-2 relative donut-chart-sale me-4">
								<span class="donut2" data-peity='{ "fill": ["rgb(135, 67, 223)", "rgba(239, 239, 239, 1)"],   "innerRadius": 38, "radius": 10}'>6/8</span>
								<small class="text-black fs-20">75%</small>
							</div>
							<h6 class="fs-18 text-black font-w600 mb-0">Manager</h6>
							<span class="fs-14">621 Vacancy</span>
						</div>
						<div class="col-xl-3 col-xxl-6 col-md-3 col-6 mb-4 text-center">
							<div class="d-inline-block ms-auto me-auto mb-2 relative donut-chart-sale me-4">
								<span class="donut2" data-peity='{ "fill": ["rgb(135, 67, 223)", "rgba(239, 239, 239, 1)"],   "innerRadius": 38, "radius": 10}'>7/10</span>
								<small class="text-black fs-20">62%</small>
							</div>
							<h6 class="fs-18 text-black font-w600 mb-0">Programmer</h6>
							<span class="fs-14">9,662 Vacancy</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="card">
				<div class="card-header border-0 pb-0 network-header">
					<h4 class="fs-20 text-black">Network</h4>
					<div class="dropdown float-end custom-dropdown mb-0">
						<div class="" data-bs-toggle="dropdown" role="button" aria-expanded="false">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</div>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="javascript:void(0);">Details</a>
							<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-xxl-12 col-sm-6">
							<div class="d-flex align-items-center mb-4">
								<svg class="me-3 min-w30" width="30" height="30" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="31" height="31" rx="15.5" fill="#2BC155"></rect>
								</svg>
								<div>
									<p class="fs-14 font-w500 mb-1">Following</p>
									<span class="fs-20 text-black font-w600">567 Companies</span>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<svg class="me-3 min-w30" width="30" height="30" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="31" height="31" rx="15.5" fill="#FF9B52"></rect>
								</svg>
								<div>
									<p class="fs-14 font-w500 mb-1">Followers</p>
									<span class="fs-20 text-black font-w600">8,334 Person</span>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-xxl-12 col-sm-6">
							<div id="radialBar" class="network-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection