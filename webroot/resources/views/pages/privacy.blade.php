@extends('layouts.master')

@section('page_title')
Absolutemini.com Privacy Policy
@endsection

@section('meta_description')
Absolutemini.com respects your privacy. Our privacy policy outlines how we use cookies to collect non-personal information to help improve your experience on the site.
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Absolutemini.com Privacy Policy</h1>
		<p class="lead page-description"></p>
	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			<h2>Information collected automatically</h2>

			<p>Like most website operators, {{ env('SITE_NAME') }} collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. {{ env('SITE_NAME') }}’s purpose in collecting non-personally identifying information is to better understand how {{ env('SITE_NAME') }}’s visitors use its website.</p>

			<p>{{ env('SITE_NAME') }} also collects potentially personally-identifying information like Internet Protocol (IP) addresses. {{ env('SITE_NAME') }} does not use such information to identify its visitors, however, and does not disclose such information, other than under the same circumstances that it uses and discloses personally-identifying information, as described below.</p>

			<h2>Voluntary information</h2>

			<p>Certain visitors to {{ env('SITE_NAME') }}’s websites choose to interact with {{ env('SITE_NAME') }} in ways that require {{ env('SITE_NAME') }} to gather personally-identifying information. The amount and type of information that {{ env('SITE_NAME') }} gathers depends on the nature of the interaction. {{ env('SITE_NAME') }} collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor’s interaction with {{ env('SITE_NAME') }}. {{ env('SITE_NAME') }} does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities.</p>

			<h2>Protection of Personally-Identifying Information</h2>

			<p>{{ env('SITE_NAME') }} discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organisations that</p>

			<ul>
			  <li>need to know that information in order to process it on {{ env('SITE_NAME') }}’s behalf or to provide services available at {{ env('SITE_NAME') }}’s websites, and</li>
			  <li>that have agreed not to disclose it to others.</li>
			</ul>

			<p>Some of those employees, contractors and affiliated organisations may be located outside of your home country; by using {{ env('SITE_NAME') }}’s websites, you consent to the transfer of such information to them.</p>

			<p>{{ env('SITE_NAME') }} will not rent or sell potentially personally-identifying and personally-identifying information to anyone.</p>

			<p>Other than to its employees, contractors and affiliated organisations, as described above, {{ env('SITE_NAME') }} discloses potentially personally-identifying and personally-identifying information only when required to do so by law, or when {{ env('SITE_NAME') }} believes in good faith that disclosure is reasonably necessary to protect the property or rights of {{ env('SITE_NAME') }}, third parties or the public at large.</p>

			<p>{{ env('SITE_NAME') }} takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>

			<h2>Your Rights</h2>

			<p>You may ask us to:</p>

			<ul>
			  <li>Give you a copy of your Personally-Identifying Information</li>
			  <li>Correct any errors in your Personally-Identifying Information</li>
			  <li>Remove your Personally-Identifying Information from the system</li>
			</ul>

			<p>Should you wish to exercise that right, or if you have any questions concerning our  privacy policy please contact us via the following channels:</p>

			Data Controller<br />
			Coder Studios Ltd<br />
			8 Ladythorpe Close<br />
			Addlestone, Surrey KT15 1RD.<br />

			<p>support@absolutemini.com</p>

			<h2>Marketing Activities</h2>

			<p>If you are a registered user of an {{ env('SITE_NAME') }} website and have supplied your email address, {{ env('SITE_NAME') }} may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what’s going on with {{ env('SITE_NAME') }} and our products. We primarily use our various product blogs to communicate this type of information, so we expect to keep this type of email to a minimum.</p>

			<p>If you wish to opt-out of receiving this communication, please contact support@absolutemini.com with the subject line “Unsubscribe”.</p>

			<h2>Publication of Support Requests</h2>

			<p>If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users.</p>

			<h2>Aggregated Statistics</h2>

			<p>From time to time, {{ env('SITE_NAME') }} may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>

			<p>{{ env('SITE_NAME') }} may collect statistics about the behavior of visitors to its websites. {{ env('SITE_NAME') }} may display this information publicly or provide it to others. However, {{ env('SITE_NAME') }} does not disclose personally-identifying information other than as described below.</p>

			<h2>Children</h2>

			<p>{{ env('SITE_NAME') }} is designed exclusively for the use of adults. If you are under 18, you may use {{ env('SITE_NAME') }} only with the involvement of a parent or guardian.</p>

			<h2>Cookies</h2>

			<p>A cookie is a string of information that a website stores on a visitor’s computer, and that the visitor’s browser provides to the website each time the visitor returns. {{ env('SITE_NAME') }} uses cookies to help {{ env('SITE_NAME') }} identify and track visitors, their usage of {{ env('SITE_NAME') }} website, and their website access preferences. {{ env('SITE_NAME') }} visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using {{ env('SITE_NAME') }}’s websites, with the drawback that certain features of {{ env('SITE_NAME') }}’s websites may not function properly without the aid of cookies.</p>

			<h2>Advertising Partners</h2>

			<p>Ads appearing on any of our websites may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognise your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by {{ env('SITE_NAME') }} and does not cover the use of cookies by any advertisers.</p>

			<h2>Changes To This Policy</h2>

			<p>Although most changes are likely to be minor, {{ env('SITE_NAME') }} may change its Privacy Policy from time to time, and in {{ env('SITE_NAME') }}’s sole discretion. {{ env('SITE_NAME') }} encourages visitors to frequently check this page for any changes to its Privacy Policy.</p>

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

@endsection

@section('footer')

@endsection