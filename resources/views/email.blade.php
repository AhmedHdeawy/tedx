<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Email</title>
	<link rel="stylesheet" href="">
	<style>

		.container {
		  width: 100%;
		  padding-right: 15px;
		  padding-left: 15px;
		  margin-right: auto;
		  margin-left: auto;
		}

		@media (min-width: 576px) {
		  .container {
		    max-width: 540px;
		  }
		}

		@media (min-width: 768px) {
		  .container {
		    max-width: 720px;
		  }
		}

		@media (min-width: 992px) {
		  .container {
		    max-width: 960px;
		  }
		}

		@media (min-width: 1200px) {
		  .container {
		    max-width: 1140px;
		  }
		}

		.container-fluid {
		  width: 100%;
		  padding-right: 15px;
		  padding-left: 15px;
		  margin-right: auto;
		  margin-left: auto;
		}
		.row {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -ms-flex-wrap: wrap;
		  flex-wrap: wrap;
		  margin-right: -15px;
		  margin-left: -15px;
		}
		*,
		*::before,
		*::after {
		  box-sizing: border-box;
		}

		html {
		  font-family: sans-serif;
		  line-height: 1.15;
		  -webkit-text-size-adjust: 100%;
		  -ms-text-size-adjust: 100%;
		  -ms-overflow-style: scrollbar;
		  -webkit-tap-highlight-color: transparent;
		}

		@-ms-viewport {
		  width: device-width;
		}

		article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
		  display: block;
		}

		body {
		  margin: 0;
		  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		  font-size: 1rem;
		  font-weight: 400;
		  line-height: 1.5;
		  color: #212529;
		  text-align: left;
		  background-color: #fff;
		}

		[tabindex="-1"]:focus {
		  outline: 0 !important;
		}

		hr {
		  box-sizing: content-box;
		  height: 0;
		  overflow: visible;
		}

		h1, h2, h3, h4, h5, h6 {
		  margin-top: 0;
		  margin-bottom: 0.5rem;
		}

		p {
		  margin-top: 0;
		  margin-bottom: 1rem;
		}

		.text-left {
		  text-align: left !important;
		}

		.text-right {
		  text-align: right !important;
		}

		.text-center {
		  text-align: center !important;
		}

		a {
		  color: #007bff;
		  text-decoration: none;
		  background-color: transparent;
		  -webkit-text-decoration-skip: objects;
		}

		a:hover {
		  color: #0056b3;
		  text-decoration: underline;
		}

		a:not([href]):not([tabindex]) {
		  color: inherit;
		  text-decoration: none;
		}

		a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
		  color: inherit;
		  text-decoration: none;
		}

		a:not([href]):not([tabindex]):focus {
		  outline: 0;
		}


		.w-25 {
		  width: 25% !important;
		}

		.w-50 {
		  width: 50% !important;
		}

		.w-75 {
		  width: 75% !important;
		}

		.w-100 {
		  width: 100% !important;
		}

		.h-25 {
		  height: 25% !important;
		}

		.h-50 {
		  height: 50% !important;
		}

		.h-75 {
		  height: 75% !important;
		}

		.h-100 {
		  height: 100% !important;
		}

		.mw-100 {
		  max-width: 100% !important;
		}

		.mh-100 {
		  max-height: 100% !important;
		}

		.m-0 {
		  margin: 0 !important;
		}

		.mt-0,
		.my-0 {
		  margin-top: 0 !important;
		}

		.mr-0,
		.mx-0 {
		  margin-right: 0 !important;
		}

		.mb-0,
		.my-0 {
		  margin-bottom: 0 !important;
		}

		.ml-0,
		.mx-0 {
		  margin-left: 0 !important;
		}

		.m-1 {
		  margin: 0.25rem !important;
		}

		.mt-1,
		.my-1 {
		  margin-top: 0.25rem !important;
		}

		.mr-1,
		.mx-1 {
		  margin-right: 0.25rem !important;
		}

		.mb-1,
		.my-1 {
		  margin-bottom: 0.25rem !important;
		}

		.ml-1,
		.mx-1 {
		  margin-left: 0.25rem !important;
		}

		.m-2 {
		  margin: 0.5rem !important;
		}

		.mt-2,
		.my-2 {
		  margin-top: 0.5rem !important;
		}

		.mr-2,
		.mx-2 {
		  margin-right: 0.5rem !important;
		}

		.mb-2,
		.my-2 {
		  margin-bottom: 0.5rem !important;
		}

		.ml-2,
		.mx-2 {
		  margin-left: 0.5rem !important;
		}

		.m-3 {
		  margin: 1rem !important;
		}

		.mt-3,
		.my-3 {
		  margin-top: 1rem !important;
		}

		.mr-3,
		.mx-3 {
		  margin-right: 1rem !important;
		}

		.mb-3,
		.my-3 {
		  margin-bottom: 1rem !important;
		}

		.ml-3,
		.mx-3 {
		  margin-left: 1rem !important;
		}

		.m-4 {
		  margin: 1.5rem !important;
		}

		.mt-4,
		.my-4 {
		  margin-top: 1.5rem !important;
		}

		.mr-4,
		.mx-4 {
		  margin-right: 1.5rem !important;
		}

		.mb-4,
		.my-4 {
		  margin-bottom: 1.5rem !important;
		}

		.ml-4,
		.mx-4 {
		  margin-left: 1.5rem !important;
		}

		.m-5 {
		  margin: 3rem !important;
		}

		.mt-5,
		.my-5 {
		  margin-top: 3rem !important;
		}

		.mr-5,
		.mx-5 {
		  margin-right: 3rem !important;
		}

		.mb-5,
		.my-5 {
		  margin-bottom: 3rem !important;
		}

		.ml-5,
		.mx-5 {
		  margin-left: 3rem !important;
		}

		.p-0 {
		  padding: 0 !important;
		}

		.pt-0,
		.py-0 {
		  padding-top: 0 !important;
		}

		.pr-0,
		.px-0 {
		  padding-right: 0 !important;
		}

		.pb-0,
		.py-0 {
		  padding-bottom: 0 !important;
		}

		.pl-0,
		.px-0 {
		  padding-left: 0 !important;
		}

		.p-1 {
		  padding: 0.25rem !important;
		}

		.pt-1,
		.py-1 {
		  padding-top: 0.25rem !important;
		}

		.pr-1,
		.px-1 {
		  padding-right: 0.25rem !important;
		}

		.pb-1,
		.py-1 {
		  padding-bottom: 0.25rem !important;
		}

		.pl-1,
		.px-1 {
		  padding-left: 0.25rem !important;
		}

		.p-2 {
		  padding: 0.5rem !important;
		}

		.pt-2,
		.py-2 {
		  padding-top: 0.5rem !important;
		}

		.pr-2,
		.px-2 {
		  padding-right: 0.5rem !important;
		}

		.pb-2,
		.py-2 {
		  padding-bottom: 0.5rem !important;
		}

		.pl-2,
		.px-2 {
		  padding-left: 0.5rem !important;
		}

		.p-3 {
		  padding: 1rem !important;
		}

		.pt-3,
		.py-3 {
		  padding-top: 1rem !important;
		}

		.pr-3,
		.px-3 {
		  padding-right: 1rem !important;
		}

		.pb-3,
		.py-3 {
		  padding-bottom: 1rem !important;
		}

		.pl-3,
		.px-3 {
		  padding-left: 1rem !important;
		}

		.p-4 {
		  padding: 1.5rem !important;
		}

		.pt-4,
		.py-4 {
		  padding-top: 1.5rem !important;
		}

		.pr-4,
		.px-4 {
		  padding-right: 1.5rem !important;
		}

		.pb-4,
		.py-4 {
		  padding-bottom: 1.5rem !important;
		}

		.pl-4,
		.px-4 {
		  padding-left: 1.5rem !important;
		}

		.p-5 {
		  padding: 3rem !important;
		}

		.pt-5,
		.py-5 {
		  padding-top: 3rem !important;
		}

		.pr-5,
		.px-5 {
		  padding-right: 3rem !important;
		}

		.pb-5,
		.py-5 {
		  padding-bottom: 3rem !important;
		}

		.pl-5,
		.px-5 {
		  padding-left: 3rem !important;
		}

		.m-auto {
		  margin: auto !important;
		}

		.mt-auto,
		.my-auto {
		  margin-top: auto !important;
		}

		.mr-auto,
		.mx-auto {
		  margin-right: auto !important;
		}

		.mb-auto,
		.my-auto {
		  margin-bottom: auto !important;
		}

		.ml-auto,
		.mx-auto {
		  margin-left: auto !important;
		}

		@media (min-width: 576px) {
		  .m-sm-0 {
		    margin: 0 !important;
		  }
		  .mt-sm-0,
		  .my-sm-0 {
		    margin-top: 0 !important;
		  }
		  .mr-sm-0,
		  .mx-sm-0 {
		    margin-right: 0 !important;
		  }
		  .mb-sm-0,
		  .my-sm-0 {
		    margin-bottom: 0 !important;
		  }
		  .ml-sm-0,
		  .mx-sm-0 {
		    margin-left: 0 !important;
		  }
		  .m-sm-1 {
		    margin: 0.25rem !important;
		  }
		  .mt-sm-1,
		  .my-sm-1 {
		    margin-top: 0.25rem !important;
		  }
		  .mr-sm-1,
		  .mx-sm-1 {
		    margin-right: 0.25rem !important;
		  }
		  .mb-sm-1,
		  .my-sm-1 {
		    margin-bottom: 0.25rem !important;
		  }
		  .ml-sm-1,
		  .mx-sm-1 {
		    margin-left: 0.25rem !important;
		  }
		  .m-sm-2 {
		    margin: 0.5rem !important;
		  }
		  .mt-sm-2,
		  .my-sm-2 {
		    margin-top: 0.5rem !important;
		  }
		  .mr-sm-2,
		  .mx-sm-2 {
		    margin-right: 0.5rem !important;
		  }
		  .mb-sm-2,
		  .my-sm-2 {
		    margin-bottom: 0.5rem !important;
		  }
		  .ml-sm-2,
		  .mx-sm-2 {
		    margin-left: 0.5rem !important;
		  }
		  .m-sm-3 {
		    margin: 1rem !important;
		  }
		  .mt-sm-3,
		  .my-sm-3 {
		    margin-top: 1rem !important;
		  }
		  .mr-sm-3,
		  .mx-sm-3 {
		    margin-right: 1rem !important;
		  }
		  .mb-sm-3,
		  .my-sm-3 {
		    margin-bottom: 1rem !important;
		  }
		  .ml-sm-3,
		  .mx-sm-3 {
		    margin-left: 1rem !important;
		  }
		  .m-sm-4 {
		    margin: 1.5rem !important;
		  }
		  .mt-sm-4,
		  .my-sm-4 {
		    margin-top: 1.5rem !important;
		  }
		  .mr-sm-4,
		  .mx-sm-4 {
		    margin-right: 1.5rem !important;
		  }
		  .mb-sm-4,
		  .my-sm-4 {
		    margin-bottom: 1.5rem !important;
		  }
		  .ml-sm-4,
		  .mx-sm-4 {
		    margin-left: 1.5rem !important;
		  }
		  .m-sm-5 {
		    margin: 3rem !important;
		  }
		  .mt-sm-5,
		  .my-sm-5 {
		    margin-top: 3rem !important;
		  }
		  .mr-sm-5,
		  .mx-sm-5 {
		    margin-right: 3rem !important;
		  }
		  .mb-sm-5,
		  .my-sm-5 {
		    margin-bottom: 3rem !important;
		  }
		  .ml-sm-5,
		  .mx-sm-5 {
		    margin-left: 3rem !important;
		  }
		  .p-sm-0 {
		    padding: 0 !important;
		  }
		  .pt-sm-0,
		  .py-sm-0 {
		    padding-top: 0 !important;
		  }
		  .pr-sm-0,
		  .px-sm-0 {
		    padding-right: 0 !important;
		  }
		  .pb-sm-0,
		  .py-sm-0 {
		    padding-bottom: 0 !important;
		  }
		  .pl-sm-0,
		  .px-sm-0 {
		    padding-left: 0 !important;
		  }
		  .p-sm-1 {
		    padding: 0.25rem !important;
		  }
		  .pt-sm-1,
		  .py-sm-1 {
		    padding-top: 0.25rem !important;
		  }
		  .pr-sm-1,
		  .px-sm-1 {
		    padding-right: 0.25rem !important;
		  }
		  .pb-sm-1,
		  .py-sm-1 {
		    padding-bottom: 0.25rem !important;
		  }
		  .pl-sm-1,
		  .px-sm-1 {
		    padding-left: 0.25rem !important;
		  }
		  .p-sm-2 {
		    padding: 0.5rem !important;
		  }
		  .pt-sm-2,
		  .py-sm-2 {
		    padding-top: 0.5rem !important;
		  }
		  .pr-sm-2,
		  .px-sm-2 {
		    padding-right: 0.5rem !important;
		  }
		  .pb-sm-2,
		  .py-sm-2 {
		    padding-bottom: 0.5rem !important;
		  }
		  .pl-sm-2,
		  .px-sm-2 {
		    padding-left: 0.5rem !important;
		  }
		  .p-sm-3 {
		    padding: 1rem !important;
		  }
		  .pt-sm-3,
		  .py-sm-3 {
		    padding-top: 1rem !important;
		  }
		  .pr-sm-3,
		  .px-sm-3 {
		    padding-right: 1rem !important;
		  }
		  .pb-sm-3,
		  .py-sm-3 {
		    padding-bottom: 1rem !important;
		  }
		  .pl-sm-3,
		  .px-sm-3 {
		    padding-left: 1rem !important;
		  }
		  .p-sm-4 {
		    padding: 1.5rem !important;
		  }
		  .pt-sm-4,
		  .py-sm-4 {
		    padding-top: 1.5rem !important;
		  }
		  .pr-sm-4,
		  .px-sm-4 {
		    padding-right: 1.5rem !important;
		  }
		  .pb-sm-4,
		  .py-sm-4 {
		    padding-bottom: 1.5rem !important;
		  }
		  .pl-sm-4,
		  .px-sm-4 {
		    padding-left: 1.5rem !important;
		  }
		  .p-sm-5 {
		    padding: 3rem !important;
		  }
		  .pt-sm-5,
		  .py-sm-5 {
		    padding-top: 3rem !important;
		  }
		  .pr-sm-5,
		  .px-sm-5 {
		    padding-right: 3rem !important;
		  }
		  .pb-sm-5,
		  .py-sm-5 {
		    padding-bottom: 3rem !important;
		  }
		  .pl-sm-5,
		  .px-sm-5 {
		    padding-left: 3rem !important;
		  }
		  .m-sm-auto {
		    margin: auto !important;
		  }
		  .mt-sm-auto,
		  .my-sm-auto {
		    margin-top: auto !important;
		  }
		  .mr-sm-auto,
		  .mx-sm-auto {
		    margin-right: auto !important;
		  }
		  .mb-sm-auto,
		  .my-sm-auto {
		    margin-bottom: auto !important;
		  }
		  .ml-sm-auto,
		  .mx-sm-auto {
		    margin-left: auto !important;
		  }
		}

		@media (min-width: 768px) {
		  .m-md-0 {
		    margin: 0 !important;
		  }
		  .mt-md-0,
		  .my-md-0 {
		    margin-top: 0 !important;
		  }
		  .mr-md-0,
		  .mx-md-0 {
		    margin-right: 0 !important;
		  }
		  .mb-md-0,
		  .my-md-0 {
		    margin-bottom: 0 !important;
		  }
		  .ml-md-0,
		  .mx-md-0 {
		    margin-left: 0 !important;
		  }
		  .m-md-1 {
		    margin: 0.25rem !important;
		  }
		  .mt-md-1,
		  .my-md-1 {
		    margin-top: 0.25rem !important;
		  }
		  .mr-md-1,
		  .mx-md-1 {
		    margin-right: 0.25rem !important;
		  }
		  .mb-md-1,
		  .my-md-1 {
		    margin-bottom: 0.25rem !important;
		  }
		  .ml-md-1,
		  .mx-md-1 {
		    margin-left: 0.25rem !important;
		  }
		  .m-md-2 {
		    margin: 0.5rem !important;
		  }
		  .mt-md-2,
		  .my-md-2 {
		    margin-top: 0.5rem !important;
		  }
		  .mr-md-2,
		  .mx-md-2 {
		    margin-right: 0.5rem !important;
		  }
		  .mb-md-2,
		  .my-md-2 {
		    margin-bottom: 0.5rem !important;
		  }
		  .ml-md-2,
		  .mx-md-2 {
		    margin-left: 0.5rem !important;
		  }
		  .m-md-3 {
		    margin: 1rem !important;
		  }
		  .mt-md-3,
		  .my-md-3 {
		    margin-top: 1rem !important;
		  }
		  .mr-md-3,
		  .mx-md-3 {
		    margin-right: 1rem !important;
		  }
		  .mb-md-3,
		  .my-md-3 {
		    margin-bottom: 1rem !important;
		  }
		  .ml-md-3,
		  .mx-md-3 {
		    margin-left: 1rem !important;
		  }
		  .m-md-4 {
		    margin: 1.5rem !important;
		  }
		  .mt-md-4,
		  .my-md-4 {
		    margin-top: 1.5rem !important;
		  }
		  .mr-md-4,
		  .mx-md-4 {
		    margin-right: 1.5rem !important;
		  }
		  .mb-md-4,
		  .my-md-4 {
		    margin-bottom: 1.5rem !important;
		  }
		  .ml-md-4,
		  .mx-md-4 {
		    margin-left: 1.5rem !important;
		  }
		  .m-md-5 {
		    margin: 3rem !important;
		  }
		  .mt-md-5,
		  .my-md-5 {
		    margin-top: 3rem !important;
		  }
		  .mr-md-5,
		  .mx-md-5 {
		    margin-right: 3rem !important;
		  }
		  .mb-md-5,
		  .my-md-5 {
		    margin-bottom: 3rem !important;
		  }
		  .ml-md-5,
		  .mx-md-5 {
		    margin-left: 3rem !important;
		  }
		  .p-md-0 {
		    padding: 0 !important;
		  }
		  .pt-md-0,
		  .py-md-0 {
		    padding-top: 0 !important;
		  }
		  .pr-md-0,
		  .px-md-0 {
		    padding-right: 0 !important;
		  }
		  .pb-md-0,
		  .py-md-0 {
		    padding-bottom: 0 !important;
		  }
		  .pl-md-0,
		  .px-md-0 {
		    padding-left: 0 !important;
		  }
		  .p-md-1 {
		    padding: 0.25rem !important;
		  }
		  .pt-md-1,
		  .py-md-1 {
		    padding-top: 0.25rem !important;
		  }
		  .pr-md-1,
		  .px-md-1 {
		    padding-right: 0.25rem !important;
		  }
		  .pb-md-1,
		  .py-md-1 {
		    padding-bottom: 0.25rem !important;
		  }
		  .pl-md-1,
		  .px-md-1 {
		    padding-left: 0.25rem !important;
		  }
		  .p-md-2 {
		    padding: 0.5rem !important;
		  }
		  .pt-md-2,
		  .py-md-2 {
		    padding-top: 0.5rem !important;
		  }
		  .pr-md-2,
		  .px-md-2 {
		    padding-right: 0.5rem !important;
		  }
		  .pb-md-2,
		  .py-md-2 {
		    padding-bottom: 0.5rem !important;
		  }
		  .pl-md-2,
		  .px-md-2 {
		    padding-left: 0.5rem !important;
		  }
		  .p-md-3 {
		    padding: 1rem !important;
		  }
		  .pt-md-3,
		  .py-md-3 {
		    padding-top: 1rem !important;
		  }
		  .pr-md-3,
		  .px-md-3 {
		    padding-right: 1rem !important;
		  }
		  .pb-md-3,
		  .py-md-3 {
		    padding-bottom: 1rem !important;
		  }
		  .pl-md-3,
		  .px-md-3 {
		    padding-left: 1rem !important;
		  }
		  .p-md-4 {
		    padding: 1.5rem !important;
		  }
		  .pt-md-4,
		  .py-md-4 {
		    padding-top: 1.5rem !important;
		  }
		  .pr-md-4,
		  .px-md-4 {
		    padding-right: 1.5rem !important;
		  }
		  .pb-md-4,
		  .py-md-4 {
		    padding-bottom: 1.5rem !important;
		  }
		  .pl-md-4,
		  .px-md-4 {
		    padding-left: 1.5rem !important;
		  }
		  .p-md-5 {
		    padding: 3rem !important;
		  }
		  .pt-md-5,
		  .py-md-5 {
		    padding-top: 3rem !important;
		  }
		  .pr-md-5,
		  .px-md-5 {
		    padding-right: 3rem !important;
		  }
		  .pb-md-5,
		  .py-md-5 {
		    padding-bottom: 3rem !important;
		  }
		  .pl-md-5,
		  .px-md-5 {
		    padding-left: 3rem !important;
		  }
		  .m-md-auto {
		    margin: auto !important;
		  }
		  .mt-md-auto,
		  .my-md-auto {
		    margin-top: auto !important;
		  }
		  .mr-md-auto,
		  .mx-md-auto {
		    margin-right: auto !important;
		  }
		  .mb-md-auto,
		  .my-md-auto {
		    margin-bottom: auto !important;
		  }
		  .ml-md-auto,
		  .mx-md-auto {
		    margin-left: auto !important;
		  }
		}

		@media (min-width: 992px) {
		  .m-lg-0 {
		    margin: 0 !important;
		  }
		  .mt-lg-0,
		  .my-lg-0 {
		    margin-top: 0 !important;
		  }
		  .mr-lg-0,
		  .mx-lg-0 {
		    margin-right: 0 !important;
		  }
		  .mb-lg-0,
		  .my-lg-0 {
		    margin-bottom: 0 !important;
		  }
		  .ml-lg-0,
		  .mx-lg-0 {
		    margin-left: 0 !important;
		  }
		  .m-lg-1 {
		    margin: 0.25rem !important;
		  }
		  .mt-lg-1,
		  .my-lg-1 {
		    margin-top: 0.25rem !important;
		  }
		  .mr-lg-1,
		  .mx-lg-1 {
		    margin-right: 0.25rem !important;
		  }
		  .mb-lg-1,
		  .my-lg-1 {
		    margin-bottom: 0.25rem !important;
		  }
		  .ml-lg-1,
		  .mx-lg-1 {
		    margin-left: 0.25rem !important;
		  }
		  .m-lg-2 {
		    margin: 0.5rem !important;
		  }
		  .mt-lg-2,
		  .my-lg-2 {
		    margin-top: 0.5rem !important;
		  }
		  .mr-lg-2,
		  .mx-lg-2 {
		    margin-right: 0.5rem !important;
		  }
		  .mb-lg-2,
		  .my-lg-2 {
		    margin-bottom: 0.5rem !important;
		  }
		  .ml-lg-2,
		  .mx-lg-2 {
		    margin-left: 0.5rem !important;
		  }
		  .m-lg-3 {
		    margin: 1rem !important;
		  }
		  .mt-lg-3,
		  .my-lg-3 {
		    margin-top: 1rem !important;
		  }
		  .mr-lg-3,
		  .mx-lg-3 {
		    margin-right: 1rem !important;
		  }
		  .mb-lg-3,
		  .my-lg-3 {
		    margin-bottom: 1rem !important;
		  }
		  .ml-lg-3,
		  .mx-lg-3 {
		    margin-left: 1rem !important;
		  }
		  .m-lg-4 {
		    margin: 1.5rem !important;
		  }
		  .mt-lg-4,
		  .my-lg-4 {
		    margin-top: 1.5rem !important;
		  }
		  .mr-lg-4,
		  .mx-lg-4 {
		    margin-right: 1.5rem !important;
		  }
		  .mb-lg-4,
		  .my-lg-4 {
		    margin-bottom: 1.5rem !important;
		  }
		  .ml-lg-4,
		  .mx-lg-4 {
		    margin-left: 1.5rem !important;
		  }
		  .m-lg-5 {
		    margin: 3rem !important;
		  }
		  .mt-lg-5,
		  .my-lg-5 {
		    margin-top: 3rem !important;
		  }
		  .mr-lg-5,
		  .mx-lg-5 {
		    margin-right: 3rem !important;
		  }
		  .mb-lg-5,
		  .my-lg-5 {
		    margin-bottom: 3rem !important;
		  }
		  .ml-lg-5,
		  .mx-lg-5 {
		    margin-left: 3rem !important;
		  }
		  .p-lg-0 {
		    padding: 0 !important;
		  }
		  .pt-lg-0,
		  .py-lg-0 {
		    padding-top: 0 !important;
		  }
		  .pr-lg-0,
		  .px-lg-0 {
		    padding-right: 0 !important;
		  }
		  .pb-lg-0,
		  .py-lg-0 {
		    padding-bottom: 0 !important;
		  }
		  .pl-lg-0,
		  .px-lg-0 {
		    padding-left: 0 !important;
		  }
		  .p-lg-1 {
		    padding: 0.25rem !important;
		  }
		  .pt-lg-1,
		  .py-lg-1 {
		    padding-top: 0.25rem !important;
		  }
		  .pr-lg-1,
		  .px-lg-1 {
		    padding-right: 0.25rem !important;
		  }
		  .pb-lg-1,
		  .py-lg-1 {
		    padding-bottom: 0.25rem !important;
		  }
		  .pl-lg-1,
		  .px-lg-1 {
		    padding-left: 0.25rem !important;
		  }
		  .p-lg-2 {
		    padding: 0.5rem !important;
		  }
		  .pt-lg-2,
		  .py-lg-2 {
		    padding-top: 0.5rem !important;
		  }
		  .pr-lg-2,
		  .px-lg-2 {
		    padding-right: 0.5rem !important;
		  }
		  .pb-lg-2,
		  .py-lg-2 {
		    padding-bottom: 0.5rem !important;
		  }
		  .pl-lg-2,
		  .px-lg-2 {
		    padding-left: 0.5rem !important;
		  }
		  .p-lg-3 {
		    padding: 1rem !important;
		  }
		  .pt-lg-3,
		  .py-lg-3 {
		    padding-top: 1rem !important;
		  }
		  .pr-lg-3,
		  .px-lg-3 {
		    padding-right: 1rem !important;
		  }
		  .pb-lg-3,
		  .py-lg-3 {
		    padding-bottom: 1rem !important;
		  }
		  .pl-lg-3,
		  .px-lg-3 {
		    padding-left: 1rem !important;
		  }
		  .p-lg-4 {
		    padding: 1.5rem !important;
		  }
		  .pt-lg-4,
		  .py-lg-4 {
		    padding-top: 1.5rem !important;
		  }
		  .pr-lg-4,
		  .px-lg-4 {
		    padding-right: 1.5rem !important;
		  }
		  .pb-lg-4,
		  .py-lg-4 {
		    padding-bottom: 1.5rem !important;
		  }
		  .pl-lg-4,
		  .px-lg-4 {
		    padding-left: 1.5rem !important;
		  }
		  .p-lg-5 {
		    padding: 3rem !important;
		  }
		  .pt-lg-5,
		  .py-lg-5 {
		    padding-top: 3rem !important;
		  }
		  .pr-lg-5,
		  .px-lg-5 {
		    padding-right: 3rem !important;
		  }
		  .pb-lg-5,
		  .py-lg-5 {
		    padding-bottom: 3rem !important;
		  }
		  .pl-lg-5,
		  .px-lg-5 {
		    padding-left: 3rem !important;
		  }
		  .m-lg-auto {
		    margin: auto !important;
		  }
		  .mt-lg-auto,
		  .my-lg-auto {
		    margin-top: auto !important;
		  }
		  .mr-lg-auto,
		  .mx-lg-auto {
		    margin-right: auto !important;
		  }
		  .mb-lg-auto,
		  .my-lg-auto {
		    margin-bottom: auto !important;
		  }
		  .ml-lg-auto,
		  .mx-lg-auto {
		    margin-left: auto !important;
		  }
		}

		@media (min-width: 1200px) {
		  .m-xl-0 {
		    margin: 0 !important;
		  }
		  .mt-xl-0,
		  .my-xl-0 {
		    margin-top: 0 !important;
		  }
		  .mr-xl-0,
		  .mx-xl-0 {
		    margin-right: 0 !important;
		  }
		  .mb-xl-0,
		  .my-xl-0 {
		    margin-bottom: 0 !important;
		  }
		  .ml-xl-0,
		  .mx-xl-0 {
		    margin-left: 0 !important;
		  }
		  .m-xl-1 {
		    margin: 0.25rem !important;
		  }
		  .mt-xl-1,
		  .my-xl-1 {
		    margin-top: 0.25rem !important;
		  }
		  .mr-xl-1,
		  .mx-xl-1 {
		    margin-right: 0.25rem !important;
		  }
		  .mb-xl-1,
		  .my-xl-1 {
		    margin-bottom: 0.25rem !important;
		  }
		  .ml-xl-1,
		  .mx-xl-1 {
		    margin-left: 0.25rem !important;
		  }
		  .m-xl-2 {
		    margin: 0.5rem !important;
		  }
		  .mt-xl-2,
		  .my-xl-2 {
		    margin-top: 0.5rem !important;
		  }
		  .mr-xl-2,
		  .mx-xl-2 {
		    margin-right: 0.5rem !important;
		  }
		  .mb-xl-2,
		  .my-xl-2 {
		    margin-bottom: 0.5rem !important;
		  }
		  .ml-xl-2,
		  .mx-xl-2 {
		    margin-left: 0.5rem !important;
		  }
		  .m-xl-3 {
		    margin: 1rem !important;
		  }
		  .mt-xl-3,
		  .my-xl-3 {
		    margin-top: 1rem !important;
		  }
		  .mr-xl-3,
		  .mx-xl-3 {
		    margin-right: 1rem !important;
		  }
		  .mb-xl-3,
		  .my-xl-3 {
		    margin-bottom: 1rem !important;
		  }
		  .ml-xl-3,
		  .mx-xl-3 {
		    margin-left: 1rem !important;
		  }
		  .m-xl-4 {
		    margin: 1.5rem !important;
		  }
		  .mt-xl-4,
		  .my-xl-4 {
		    margin-top: 1.5rem !important;
		  }
		  .mr-xl-4,
		  .mx-xl-4 {
		    margin-right: 1.5rem !important;
		  }
		  .mb-xl-4,
		  .my-xl-4 {
		    margin-bottom: 1.5rem !important;
		  }
		  .ml-xl-4,
		  .mx-xl-4 {
		    margin-left: 1.5rem !important;
		  }
		  .m-xl-5 {
		    margin: 3rem !important;
		  }
		  .mt-xl-5,
		  .my-xl-5 {
		    margin-top: 3rem !important;
		  }
		  .mr-xl-5,
		  .mx-xl-5 {
		    margin-right: 3rem !important;
		  }
		  .mb-xl-5,
		  .my-xl-5 {
		    margin-bottom: 3rem !important;
		  }
		  .ml-xl-5,
		  .mx-xl-5 {
		    margin-left: 3rem !important;
		  }
		  .p-xl-0 {
		    padding: 0 !important;
		  }
		  .pt-xl-0,
		  .py-xl-0 {
		    padding-top: 0 !important;
		  }
		  .pr-xl-0,
		  .px-xl-0 {
		    padding-right: 0 !important;
		  }
		  .pb-xl-0,
		  .py-xl-0 {
		    padding-bottom: 0 !important;
		  }
		  .pl-xl-0,
		  .px-xl-0 {
		    padding-left: 0 !important;
		  }
		  .p-xl-1 {
		    padding: 0.25rem !important;
		  }
		  .pt-xl-1,
		  .py-xl-1 {
		    padding-top: 0.25rem !important;
		  }
		  .pr-xl-1,
		  .px-xl-1 {
		    padding-right: 0.25rem !important;
		  }
		  .pb-xl-1,
		  .py-xl-1 {
		    padding-bottom: 0.25rem !important;
		  }
		  .pl-xl-1,
		  .px-xl-1 {
		    padding-left: 0.25rem !important;
		  }
		  .p-xl-2 {
		    padding: 0.5rem !important;
		  }
		  .pt-xl-2,
		  .py-xl-2 {
		    padding-top: 0.5rem !important;
		  }
		  .pr-xl-2,
		  .px-xl-2 {
		    padding-right: 0.5rem !important;
		  }
		  .pb-xl-2,
		  .py-xl-2 {
		    padding-bottom: 0.5rem !important;
		  }
		  .pl-xl-2,
		  .px-xl-2 {
		    padding-left: 0.5rem !important;
		  }
		  .p-xl-3 {
		    padding: 1rem !important;
		  }
		  .pt-xl-3,
		  .py-xl-3 {
		    padding-top: 1rem !important;
		  }
		  .pr-xl-3,
		  .px-xl-3 {
		    padding-right: 1rem !important;
		  }
		  .pb-xl-3,
		  .py-xl-3 {
		    padding-bottom: 1rem !important;
		  }
		  .pl-xl-3,
		  .px-xl-3 {
		    padding-left: 1rem !important;
		  }
		  .p-xl-4 {
		    padding: 1.5rem !important;
		  }
		  .pt-xl-4,
		  .py-xl-4 {
		    padding-top: 1.5rem !important;
		  }
		  .pr-xl-4,
		  .px-xl-4 {
		    padding-right: 1.5rem !important;
		  }
		  .pb-xl-4,
		  .py-xl-4 {
		    padding-bottom: 1.5rem !important;
		  }
		  .pl-xl-4,
		  .px-xl-4 {
		    padding-left: 1.5rem !important;
		  }
		  .p-xl-5 {
		    padding: 3rem !important;
		  }
		  .pt-xl-5,
		  .py-xl-5 {
		    padding-top: 3rem !important;
		  }
		  .pr-xl-5,
		  .px-xl-5 {
		    padding-right: 3rem !important;
		  }
		  .pb-xl-5,
		  .py-xl-5 {
		    padding-bottom: 3rem !important;
		  }
		  .pl-xl-5,
		  .px-xl-5 {
		    padding-left: 3rem !important;
		  }
		  .m-xl-auto {
		    margin: auto !important;
		  }
		  .mt-xl-auto,
		  .my-xl-auto {
		    margin-top: auto !important;
		  }
		  .mr-xl-auto,
		  .mx-xl-auto {
		    margin-right: auto !important;
		  }
		  .mb-xl-auto,
		  .my-xl-auto {
		    margin-bottom: auto !important;
		  }
		  .ml-xl-auto,
		  .mx-xl-auto {
		    margin-left: auto !important;
		  }
		}
			

		button {
		  border-radius: 0;
		}

		button:focus {
		  outline: 1px dotted;
		  outline: 5px auto -webkit-focus-ring-color;
		}

		input,
		button,
		select,
		optgroup,
		textarea {
		  margin: 0;
		  font-family: inherit;
		  font-size: inherit;
		  line-height: inherit;
		}

		button,
		input {
		  overflow: visible;
		}

		button,
		select {
		  text-transform: none;
		}

		button,
		html [type="button"],
		[type="reset"],
		[type="submit"] {
		  -webkit-appearance: button;
		}

		button::-moz-focus-inner,
		[type="button"]::-moz-focus-inner,
		[type="reset"]::-moz-focus-inner,
		[type="submit"]::-moz-focus-inner {
		  padding: 0;
		  border-style: none;
		}

				

		.btn {
		  display: inline-block;
		  font-weight: 400;
		  text-align: center;
		  white-space: nowrap;
		  vertical-align: middle;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		  border: 1px solid transparent;
		  padding: 0.375rem 0.75rem;
		  font-size: 1rem;
		  line-height: 1.5;
		  border-radius: 0.25rem;
		  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}

		.btn:focus, .btn:hover {
		  text-decoration: none;
		}

		.btn:focus, .btn.focus {
		  outline: 0;
		  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
		}

		.btn.disabled, .btn:disabled {
		  opacity: 0.65;
		}

		.btn:not([disabled]):not(.disabled) {
		  cursor: pointer;
		}

		.btn:not([disabled]):not(.disabled):active, .btn:not([disabled]):not(.disabled).active {
		  background-image: none;
		}

		a.btn.disabled,
		fieldset[disabled] a.btn {
		  pointer-events: none;
		}

		.btn-primary {
		  color: #fff;
		  background-color: #007bff;
		  border-color: #007bff;
		}

		.btn-primary:hover {
		  color: #fff;
		  background-color: #0069d9;
		  border-color: #0062cc;
		}

		.btn-primary:focus, .btn-primary.focus {
		  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
		}

		.btn-primary.disabled, .btn-primary:disabled {
		  background-color: #007bff;
		  border-color: #007bff;
		}

		.btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active,
		.show > .btn-primary.dropdown-toggle {
		  color: #fff;
		  background-color: #0062cc;
		  border-color: #005cbf;
		}

		.btn-primary:not([disabled]):not(.disabled):active:focus, .btn-primary:not([disabled]):not(.disabled).active:focus,
		.show > .btn-primary.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
		}

		.btn-secondary {
		  color: #fff;
		  background-color: #868e96;
		  border-color: #868e96;
		}

		.btn-secondary:hover {
		  color: #fff;
		  background-color: #727b84;
		  border-color: #6c757d;
		}

		.btn-secondary:focus, .btn-secondary.focus {
		  box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
		}

		.btn-secondary.disabled, .btn-secondary:disabled {
		  background-color: #868e96;
		  border-color: #868e96;
		}

		.btn-secondary:not([disabled]):not(.disabled):active, .btn-secondary:not([disabled]):not(.disabled).active,
		.show > .btn-secondary.dropdown-toggle {
		  color: #fff;
		  background-color: #6c757d;
		  border-color: #666e76;
		}

		.btn-secondary:not([disabled]):not(.disabled):active:focus, .btn-secondary:not([disabled]):not(.disabled).active:focus,
		.show > .btn-secondary.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
		}

		.btn-success {
		  color: #fff;
		  background-color: #28a745;
		  border-color: #28a745;
		}

		.btn-success:hover {
		  color: #fff;
		  background-color: #218838;
		  border-color: #1e7e34;
		}

		.btn-success:focus, .btn-success.focus {
		  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
		}

		.btn-success.disabled, .btn-success:disabled {
		  background-color: #28a745;
		  border-color: #28a745;
		}

		.btn-success:not([disabled]):not(.disabled):active, .btn-success:not([disabled]):not(.disabled).active,
		.show > .btn-success.dropdown-toggle {
		  color: #fff;
		  background-color: #1e7e34;
		  border-color: #1c7430;
		}

		.btn-success:not([disabled]):not(.disabled):active:focus, .btn-success:not([disabled]):not(.disabled).active:focus,
		.show > .btn-success.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
		}

		.btn-info {
		  color: #fff;
		  background-color: #17a2b8;
		  border-color: #17a2b8;
		}

		.btn-info:hover {
		  color: #fff;
		  background-color: #138496;
		  border-color: #117a8b;
		}

		.btn-info:focus, .btn-info.focus {
		  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
		}

		.btn-info.disabled, .btn-info:disabled {
		  background-color: #17a2b8;
		  border-color: #17a2b8;
		}

		.btn-info:not([disabled]):not(.disabled):active, .btn-info:not([disabled]):not(.disabled).active,
		.show > .btn-info.dropdown-toggle {
		  color: #fff;
		  background-color: #117a8b;
		  border-color: #10707f;
		}

		.btn-info:not([disabled]):not(.disabled):active:focus, .btn-info:not([disabled]):not(.disabled).active:focus,
		.show > .btn-info.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
		}

		.btn-warning {
		  color: #212529;
		  background-color: #ffc107;
		  border-color: #ffc107;
		}

		.btn-warning:hover {
		  color: #212529;
		  background-color: #e0a800;
		  border-color: #d39e00;
		}

		.btn-warning:focus, .btn-warning.focus {
		  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
		}

		.btn-warning.disabled, .btn-warning:disabled {
		  background-color: #ffc107;
		  border-color: #ffc107;
		}

		.btn-warning:not([disabled]):not(.disabled):active, .btn-warning:not([disabled]):not(.disabled).active,
		.show > .btn-warning.dropdown-toggle {
		  color: #212529;
		  background-color: #d39e00;
		  border-color: #c69500;
		}

		.btn-warning:not([disabled]):not(.disabled):active:focus, .btn-warning:not([disabled]):not(.disabled).active:focus,
		.show > .btn-warning.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
		}

		.btn-danger {
		  color: #fff;
		  background-color: #dc3545;
		  border-color: #dc3545;
		}

		.btn-danger:hover {
		  color: #fff;
		  background-color: #c82333;
		  border-color: #bd2130;
		}

		.btn-danger:focus, .btn-danger.focus {
		  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
		}

		.btn-danger.disabled, .btn-danger:disabled {
		  background-color: #dc3545;
		  border-color: #dc3545;
		}

		.btn-danger:not([disabled]):not(.disabled):active, .btn-danger:not([disabled]):not(.disabled).active,
		.show > .btn-danger.dropdown-toggle {
		  color: #fff;
		  background-color: #bd2130;
		  border-color: #b21f2d;
		}

		.btn-danger:not([disabled]):not(.disabled):active:focus, .btn-danger:not([disabled]):not(.disabled).active:focus,
		.show > .btn-danger.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
		}

		.btn-light {
		  color: #212529;
		  background-color: #f8f9fa;
		  border-color: #f8f9fa;
		}

		.btn-light:hover {
		  color: #212529;
		  background-color: #e2e6ea;
		  border-color: #dae0e5;
		}

		.btn-light:focus, .btn-light.focus {
		  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
		}

		.btn-light.disabled, .btn-light:disabled {
		  background-color: #f8f9fa;
		  border-color: #f8f9fa;
		}

		.btn-light:not([disabled]):not(.disabled):active, .btn-light:not([disabled]):not(.disabled).active,
		.show > .btn-light.dropdown-toggle {
		  color: #212529;
		  background-color: #dae0e5;
		  border-color: #d3d9df;
		}

		.btn-light:not([disabled]):not(.disabled):active:focus, .btn-light:not([disabled]):not(.disabled).active:focus,
		.show > .btn-light.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
		}

		.btn-dark {
		  color: #fff;
		  background-color: #343a40;
		  border-color: #343a40;
		}

		.btn-dark:hover {
		  color: #fff;
		  background-color: #23272b;
		  border-color: #1d2124;
		}

		.btn-dark:focus, .btn-dark.focus {
		  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
		}

		.btn-dark.disabled, .btn-dark:disabled {
		  background-color: #343a40;
		  border-color: #343a40;
		}

		.btn-dark:not([disabled]):not(.disabled):active, .btn-dark:not([disabled]):not(.disabled).active,
		.show > .btn-dark.dropdown-toggle {
		  color: #fff;
		  background-color: #1d2124;
		  border-color: #171a1d;
		}

		.btn-dark:not([disabled]):not(.disabled):active:focus, .btn-dark:not([disabled]):not(.disabled).active:focus,
		.show > .btn-dark.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
		}

		.btn-outline-primary {
		  color: #007bff;
		  background-color: transparent;
		  background-image: none;
		  border-color: #007bff;
		}

		.btn-outline-primary:hover {
		  color: #fff;
		  background-color: #007bff;
		  border-color: #007bff;
		}

		.btn-outline-primary:focus, .btn-outline-primary.focus {
		  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
		}

		.btn-outline-primary.disabled, .btn-outline-primary:disabled {
		  color: #007bff;
		  background-color: transparent;
		}

		.btn-outline-primary:not([disabled]):not(.disabled):active, .btn-outline-primary:not([disabled]):not(.disabled).active,
		.show > .btn-outline-primary.dropdown-toggle {
		  color: #212529;
		  background-color: #007bff;
		  border-color: #007bff;
		  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
		}

		.btn-outline-secondary {
		  color: #868e96;
		  background-color: transparent;
		  background-image: none;
		  border-color: #868e96;
		}

		.btn-outline-secondary:hover {
		  color: #fff;
		  background-color: #868e96;
		  border-color: #868e96;
		}

		.btn-outline-secondary:focus, .btn-outline-secondary.focus {
		  box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
		}

		.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
		  color: #868e96;
		  background-color: transparent;
		}

		.btn-outline-secondary:not([disabled]):not(.disabled):active, .btn-outline-secondary:not([disabled]):not(.disabled).active,
		.show > .btn-outline-secondary.dropdown-toggle {
		  color: #212529;
		  background-color: #868e96;
		  border-color: #868e96;
		  box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
		}

		.btn-outline-success {
		  color: #28a745;
		  background-color: transparent;
		  background-image: none;
		  border-color: #28a745;
		}

		.btn-outline-success:hover {
		  color: #fff;
		  background-color: #28a745;
		  border-color: #28a745;
		}

		.btn-outline-success:focus, .btn-outline-success.focus {
		  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
		}

		.btn-outline-success.disabled, .btn-outline-success:disabled {
		  color: #28a745;
		  background-color: transparent;
		}

		.btn-outline-success:not([disabled]):not(.disabled):active, .btn-outline-success:not([disabled]):not(.disabled).active,
		.show > .btn-outline-success.dropdown-toggle {
		  color: #212529;
		  background-color: #28a745;
		  border-color: #28a745;
		  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
		}

		.btn-outline-info {
		  color: #17a2b8;
		  background-color: transparent;
		  background-image: none;
		  border-color: #17a2b8;
		}

		.btn-outline-info:hover {
		  color: #fff;
		  background-color: #17a2b8;
		  border-color: #17a2b8;
		}

		.btn-outline-info:focus, .btn-outline-info.focus {
		  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
		}

		.btn-outline-info.disabled, .btn-outline-info:disabled {
		  color: #17a2b8;
		  background-color: transparent;
		}

		.btn-outline-info:not([disabled]):not(.disabled):active, .btn-outline-info:not([disabled]):not(.disabled).active,
		.show > .btn-outline-info.dropdown-toggle {
		  color: #212529;
		  background-color: #17a2b8;
		  border-color: #17a2b8;
		  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
		}

		.btn-outline-warning {
		  color: #ffc107;
		  background-color: transparent;
		  background-image: none;
		  border-color: #ffc107;
		}

		.btn-outline-warning:hover {
		  color: #212529;
		  background-color: #ffc107;
		  border-color: #ffc107;
		}

		.btn-outline-warning:focus, .btn-outline-warning.focus {
		  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
		}

		.btn-outline-warning.disabled, .btn-outline-warning:disabled {
		  color: #ffc107;
		  background-color: transparent;
		}

		.btn-outline-warning:not([disabled]):not(.disabled):active, .btn-outline-warning:not([disabled]):not(.disabled).active,
		.show > .btn-outline-warning.dropdown-toggle {
		  color: #212529;
		  background-color: #ffc107;
		  border-color: #ffc107;
		  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
		}

		.btn-outline-danger {
		  color: #dc3545;
		  background-color: transparent;
		  background-image: none;
		  border-color: #dc3545;
		}

		.btn-outline-danger:hover {
		  color: #fff;
		  background-color: #dc3545;
		  border-color: #dc3545;
		}

		.btn-outline-danger:focus, .btn-outline-danger.focus {
		  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
		}

		.btn-outline-danger.disabled, .btn-outline-danger:disabled {
		  color: #dc3545;
		  background-color: transparent;
		}

		.btn-outline-danger:not([disabled]):not(.disabled):active, .btn-outline-danger:not([disabled]):not(.disabled).active,
		.show > .btn-outline-danger.dropdown-toggle {
		  color: #212529;
		  background-color: #dc3545;
		  border-color: #dc3545;
		  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
		}

		.btn-outline-light {
		  color: #f8f9fa;
		  background-color: transparent;
		  background-image: none;
		  border-color: #f8f9fa;
		}

		.btn-outline-light:hover {
		  color: #212529;
		  background-color: #f8f9fa;
		  border-color: #f8f9fa;
		}

		.btn-outline-light:focus, .btn-outline-light.focus {
		  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
		}

		.btn-outline-light.disabled, .btn-outline-light:disabled {
		  color: #f8f9fa;
		  background-color: transparent;
		}

		.btn-outline-light:not([disabled]):not(.disabled):active, .btn-outline-light:not([disabled]):not(.disabled).active,
		.show > .btn-outline-light.dropdown-toggle {
		  color: #fff;
		  background-color: #f8f9fa;
		  border-color: #f8f9fa;
		  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
		}

		.btn-outline-dark {
		  color: #343a40;
		  background-color: transparent;
		  background-image: none;
		  border-color: #343a40;
		}

		.btn-outline-dark:hover {
		  color: #fff;
		  background-color: #343a40;
		  border-color: #343a40;
		}

		.btn-outline-dark:focus, .btn-outline-dark.focus {
		  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
		}

		.btn-outline-dark.disabled, .btn-outline-dark:disabled {
		  color: #343a40;
		  background-color: transparent;
		}

		.btn-outline-dark:not([disabled]):not(.disabled):active, .btn-outline-dark:not([disabled]):not(.disabled).active,
		.show > .btn-outline-dark.dropdown-toggle {
		  color: #212529;
		  background-color: #343a40;
		  border-color: #343a40;
		  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
		}

		.btn-link {
		  font-weight: 400;
		  color: #007bff;
		  background-color: transparent;
		}

		.btn-link:hover {
		  color: #0056b3;
		  text-decoration: underline;
		  background-color: transparent;
		  border-color: transparent;
		}

		.btn-link:focus, .btn-link.focus {
		  text-decoration: underline;
		  border-color: transparent;
		  box-shadow: none;
		}

		.btn-link:disabled, .btn-link.disabled {
		  color: #868e96;
		}

		.btn-lg, .btn-group-lg > .btn {
		  padding: 0.5rem 1rem;
		  font-size: 1.25rem;
		  line-height: 1.5;
		  border-radius: 0.3rem;
		}

		.btn-sm, .btn-group-sm > .btn {
		  padding: 0.25rem 0.5rem;
		  font-size: 0.875rem;
		  line-height: 1.5;
		  border-radius: 0.2rem;
		}

		.btn-block {
		  display: block;
		  width: 100%;
		}

		.btn-block + .btn-block {
		  margin-top: 0.5rem;
		}

		input[type="submit"].btn-block,
		input[type="reset"].btn-block,
		input[type="button"].btn-block {
		  width: 100%;
		}


		.card {
		  position: relative;
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-orient: vertical;
		  -webkit-box-direction: normal;
		  -ms-flex-direction: column;
		  flex-direction: column;
		  min-width: 0;
		  word-wrap: break-word;
		  background-color: #fff;
		  background-clip: border-box;
		  border: 1px solid rgba(0, 0, 0, 0.125);
		  border-radius: 0.25rem;
		}

		.card > hr {
		  margin-right: 0;
		  margin-left: 0;
		}

		.card > .list-group:first-child .list-group-item:first-child {
		  border-top-left-radius: 0.25rem;
		  border-top-right-radius: 0.25rem;
		}

		.card > .list-group:last-child .list-group-item:last-child {
		  border-bottom-right-radius: 0.25rem;
		  border-bottom-left-radius: 0.25rem;
		}

		.card-body {
		  -webkit-box-flex: 1;
		  -ms-flex: 1 1 auto;
		  flex: 1 1 auto;
		  padding: 1.25rem;
		}

		.card-title {
		  margin-bottom: 0.75rem;
		}

		.card-subtitle {
		  margin-top: -0.375rem;
		  margin-bottom: 0;
		}

		.card-text:last-child {
		  margin-bottom: 0;
		}

		.card-link:hover {
		  text-decoration: none;
		}

		.card-link + .card-link {
		  margin-left: 1.25rem;
		}

		.card-header {
		  padding: 0.75rem 1.25rem;
		  margin-bottom: 0;
		  background-color: rgba(0, 0, 0, 0.03);
		  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
		}

		.card-header:first-child {
		  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
		}

		.card-header + .list-group .list-group-item:first-child {
		  border-top: 0;
		}

		.card-footer {
		  padding: 0.75rem 1.25rem;
		  background-color: rgba(0, 0, 0, 0.03);
		  border-top: 1px solid rgba(0, 0, 0, 0.125);
		}

		.card-footer:last-child {
		  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
		}

		.card-header-tabs {
		  margin-right: -0.625rem;
		  margin-bottom: -0.75rem;
		  margin-left: -0.625rem;
		  border-bottom: 0;
		}

		.card-header-pills {
		  margin-right: -0.625rem;
		  margin-left: -0.625rem;
		}

		.card-img-overlay {
		  position: absolute;
		  top: 0;
		  right: 0;
		  bottom: 0;
		  left: 0;
		  padding: 1.25rem;
		}

		.card-img {
		  width: 100%;
		  border-radius: calc(0.25rem - 1px);
		}

		.card-img-top {
		  width: 100%;
		  border-top-left-radius: calc(0.25rem - 1px);
		  border-top-right-radius: calc(0.25rem - 1px);
		}

		.card-img-bottom {
		  width: 100%;
		  border-bottom-right-radius: calc(0.25rem - 1px);
		  border-bottom-left-radius: calc(0.25rem - 1px);
		}

		.card-deck {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-orient: vertical;
		  -webkit-box-direction: normal;
		  -ms-flex-direction: column;
		  flex-direction: column;
		}

		.card-deck .card {
		  margin-bottom: 15px;
		}

		@media (min-width: 576px) {
		  .card-deck {
		    -webkit-box-orient: horizontal;
		    -webkit-box-direction: normal;
		    -ms-flex-flow: row wrap;
		    flex-flow: row wrap;
		    margin-right: -15px;
		    margin-left: -15px;
		  }
		  .card-deck .card {
		    display: -webkit-box;
		    display: -ms-flexbox;
		    display: flex;
		    -webkit-box-flex: 1;
		    -ms-flex: 1 0 0%;
		    flex: 1 0 0%;
		    -webkit-box-orient: vertical;
		    -webkit-box-direction: normal;
		    -ms-flex-direction: column;
		    flex-direction: column;
		    margin-right: 15px;
		    margin-bottom: 0;
		    margin-left: 15px;
		  }
		}

		.card-group {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-orient: vertical;
		  -webkit-box-direction: normal;
		  -ms-flex-direction: column;
		  flex-direction: column;
		}

		.card-group > .card {
		  margin-bottom: 15px;
		}

		@media (min-width: 576px) {
		  .card-group {
		    -webkit-box-orient: horizontal;
		    -webkit-box-direction: normal;
		    -ms-flex-flow: row wrap;
		    flex-flow: row wrap;
		  }
		  .card-group > .card {
		    -webkit-box-flex: 1;
		    -ms-flex: 1 0 0%;
		    flex: 1 0 0%;
		    margin-bottom: 0;
		  }
		  .card-group > .card + .card {
		    margin-left: 0;
		    border-left: 0;
		  }
		  .card-group > .card:first-child {
		    border-top-right-radius: 0;
		    border-bottom-right-radius: 0;
		  }
		  .card-group > .card:first-child .card-img-top,
		  .card-group > .card:first-child .card-header {
		    border-top-right-radius: 0;
		  }
		  .card-group > .card:first-child .card-img-bottom,
		  .card-group > .card:first-child .card-footer {
		    border-bottom-right-radius: 0;
		  }
		  .card-group > .card:last-child {
		    border-top-left-radius: 0;
		    border-bottom-left-radius: 0;
		  }
		  .card-group > .card:last-child .card-img-top,
		  .card-group > .card:last-child .card-header {
		    border-top-left-radius: 0;
		  }
		  .card-group > .card:last-child .card-img-bottom,
		  .card-group > .card:last-child .card-footer {
		    border-bottom-left-radius: 0;
		  }
		  .card-group > .card:only-child {
		    border-radius: 0.25rem;
		  }
		  .card-group > .card:only-child .card-img-top,
		  .card-group > .card:only-child .card-header {
		    border-top-left-radius: 0.25rem;
		    border-top-right-radius: 0.25rem;
		  }
		  .card-group > .card:only-child .card-img-bottom,
		  .card-group > .card:only-child .card-footer {
		    border-bottom-right-radius: 0.25rem;
		    border-bottom-left-radius: 0.25rem;
		  }
		  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
		    border-radius: 0;
		  }
		  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
		  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
		  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
		  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
		    border-radius: 0;
		  }
		}

		.card-columns .card {
		  margin-bottom: 0.75rem;
		}

		@media (min-width: 576px) {
		  .card-columns {
		    -webkit-column-count: 3;
		    -moz-column-count: 3;
		    column-count: 3;
		    -webkit-column-gap: 1.25rem;
		    -moz-column-gap: 1.25rem;
		    column-gap: 1.25rem;
		  }
		  .card-columns .card {
		    display: inline-block;
		    width: 100%;
		  }
		}

	.text-danger {
		color: #dc3545 !important;
	}
	.text-primary {
		color: #007bff!important
	}
	</style>
</head>
<body>
	
	<div class="container">
		
		<div class="my-4 card text-center">
		  <div class="card-header">
		    TEDxAzharUniversity
		  </div>
		  <div class="card-body">
		    <h3 class="card-title text-primary">
		    	Hello, {{ $visitor->name }}
		    </h3>
		    <h3 class="card-title text-danger">
		    	Thanks for Registration in TedxAzhar University Event
		    </h3>
		    <h4 class="card-title">
		    	Your Code is [ <span class="text-danger">{{ $visitor->code }}</span>  ]
		    </h4>
		    <p class="card-text">
		    	please save it. you will need it in Event
		    </p>
		    <a href="https://tedxazhar.azurewebsites.net" class="btn btn-primary">Website</a>
		  </div>
		  <div class="card-footer text-muted">
		    contact-us 
		    <a target="_blank" href="https://tedxazhar.azurewebsites.net" class="text-primary font-weight-bold mx-2">Website</a>
            <a target="_blank" href="https://www.facebook.com/TEDxAzharUni/" class="text-primary font-weight-bold mx-2">
                Facebook Page
            </a>
            <a target="_blank" href="https://www.youtube.com/playlist?list=PLbCnr-sZIpM2YnD0JkWf8bfKRT6Ct-zp0" class="text-primary font-weight-bold mx-2">
                Youtube Channel
            </a>
            <a target="_blank" href="https://www.flickr.com/photos/tedxazharuni/" class="text-primary font-weight-bold mx-2">
                Flickr
            </a>
		  </div>
		</div>

	</div>

</body>
</html>