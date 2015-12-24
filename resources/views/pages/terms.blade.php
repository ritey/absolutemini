@extends('layouts.master')

@section('page_title')
Absolutemini.com Terms and Conditions
@endsection

@section('meta_description')
Absolutemini.com Terms and Conditions
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Absolutemini.com Terms and Conditions</h1>
		<p class="lead page-description"></p>
	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			<h2>1. Your Agreement with {{ env('SITE_NAME') }}</h2>

			<p>1.1. Your use of the {{ env('SITE_NAME') }}
			 service (the "Service") is governed by this agreement
			(the "Terms"). "{{ env('SITE_NAME') }}" means Coder Studios Ltd, located
			at 8 Ladythorpe Close, Addlestone, Surrey, UK and its subsidiaries or affiliates involved in providing the Service.</p>

			<p>1.2. In order to use the Service,
			you must first agree to the Terms. You can agree to the Terms by actually
			using the Service. You understand and agree that {{ env('SITE_NAME') }} will treat your
			use of the Service as acceptance of the Terms from that point onwards.</p>
			<p>1.3. You may not use the Service
			if you are a person barred from receiving the Service under the laws
			of the United States or other countries including the country in which
			you are resident or from which you use the Service. You affirm that
			you are over the age of 13, as the Service is not intended for children
			under 13.</p>

			<h2>2. Your Account and Use of the Service</h2>

			<p>2.1. You must provide accurate
			and complete registration information any time you register to use the
			Service. You are responsible for the security of your passwords and
			for any use of your account. If you become aware of any unauthorised
			use of your password or of your account, you agree to notify {{ env('SITE_NAME') }}
			immediately.</p>
			<p>2.2. Your use of the Service must comply with all applicable laws, regulations and ordinances, including any laws regarding the export of data or software. You agree not to use the Service in the design, development, production, or use of missiles or the design, development, production, stockpiling, or use of chemical or biological weapons.</p>
			<p>2.3. You agree not to (a) access
			(or attempt to access) the administrative interface of the Service by
			any means other than through the interface that is provided by {{ env('SITE_NAME') }}
			in connection with the Service, unless you have been specifically allowed
			to do so in a separate agreement with {{ env('SITE_NAME') }}, or (b) engage in any activity
			that interferes with or disrupts the Service (or the servers and networks
			which are connected to the Service).</p>

			<h2>3. Service Policies and Privacy</h2>

			<p>3.1. The Service shall be subject
			to the privacy policy for the Service available at <a href="{{ route('privacy') }}" target="_blank">{{ route('privacy') }}</a>
			(or such URL as {{ env('SITE_NAME') }} may provide), which references and incorporates
			{{ env('SITE_NAME') }}'s privacy policy available at <a href="{{ route('privacy') }}" target="_blank">{{ route('privacy') }}</a>.
			You agree to the use of your data in accordance with {{ env('SITE_NAME') }}'s privacy policies.</p>
			<p>3.2. You agree that you will
			protect the privacy and legal rights of the users of your application.
			You must provide legally adequate privacy notice and protection for
			those users. To do so, at a minimum, you must incorporate the privacy
			terms available at <a href="{{ route('privacy') }}" target="_blank">{{ route('privacy') }}</a> into
			the privacy policy for your application. If the users provide you with
			user names, passwords, or other login information or personal information,
			you must make the users aware that the information will be available
			to your application and to {{ env('SITE_NAME') }}.</p>

			<p>3.3. If the user provides you
			with {{ env('SITE_NAME') }} Account information, you may only use that information to
			access the user's {{ env('SITE_NAME') }} Account when, and for the limited purposes
			for which, the user has given you permission to do so.</p>

			<h2>4. Content in the Service and Take Down Obligations</h2>

			<p>4.1. You understand that all
			information (such as data files, written text, computer software, music,
			audio files or other sounds, photographs, videos or other images) to
			which you may have access as part of, or through your use of, the Service
			are the sole responsibility of the person from which such content originated.
			All such information is referred to below as the "Content."
			The term Content shall specifically exclude the web application that
			you create using the Service and any source code written by you to be
			used with the Service (collectively, the "Application").</p>

			<p>4.2. {{ env('SITE_NAME') }} reserves the right
			(but shall have no obligation) to pre-screen, review, flag, filter,
			modify, refuse or remove any or all Content from the Service. You agree
			to immediately take down any Content that violates the Acceptable Use Policies,
			including pursuant to a take down request from {{ env('SITE_NAME') }}. In the event
			that you elect not to comply with a request from {{ env('SITE_NAME') }} to take down
			certain Content, {{ env('SITE_NAME') }} reserves the right to disable the Application.</p>
			<p>4.3. In the event that you
			become aware of any violation of the Acceptable Use Policies by an end user
			of the Application, you shall immediately terminate such end user's
			account on your Application. {{ env('SITE_NAME') }} reserves the right to terminate
			end user {{ env('SITE_NAME') }} accounts or disable the Application in response to a
			violation or suspected violation of the Acceptable Use Policies.</p>
			<p>4.4. You agree that you are
			solely responsible for (and that {{ env('SITE_NAME') }} has no responsibility to you
			or to any third party for) the Application or any Content that you create,
			transmit or display while using the Service and for the consequences
			of your actions (including any loss or damage which {{ env('SITE_NAME') }} may suffer)
			by doing so.</p>
			<p>4.5. You agree that {{ env('SITE_NAME') }}
			has no responsibility or liability for the deletion or failure to store
			any Content and other communications maintained or transmitted through
			use of the Service. You further acknowledge that you are solely responsible
			for securing and backing up your Application and any Content.</p>

			<h2>5. Proprietary Rights</h2>

			<p>5.1. You acknowledge and agree
			that {{ env('SITE_NAME') }} (or {{ env('SITE_NAME') }}'s licensors) own all legal right, title and interest
			in and to the Service, including any intellectual property rights which
			subsist in the Service (whether those rights happen to be registered
			or not, and wherever in the world those rights may exist).</p>
			<p>5.2. Unless you have agreed
			otherwise in writing with {{ env('SITE_NAME') }}, nothing in the Terms gives you a right
			to use any of {{ env('SITE_NAME') }}'s trade names, trade marks, service marks, logos,
			domain names, and other distinctive brand features.</p>

			<p>5.3. Except as provided in
			Section 8, {{ env('SITE_NAME') }} acknowledges and agrees that it obtains no right,
			title or interest from you (or your licensors) under these Terms in
			or to any Content or the Application that you create, submit, post,
			transmit or display on, or through, the Service, including any intellectual
			property rights which subsist in that Content and the Application (whether
			those rights happen to be registered or not, and wherever in the world
			those rights may exist). Unless you have agreed otherwise in writing
			with {{ env('SITE_NAME') }}, you agree that you are responsible for protecting and enforcing
			those rights and that {{ env('SITE_NAME') }} has no obligation to do so on your behalf.</p>

			<h2>6. License from {{ env('SITE_NAME') }} and Restrictions</h2>

			<p>6.1. {{ env('SITE_NAME') }} gives you a personal,
			worldwide, royalty-free, non-assignable and non-exclusive license to
			use the software provided to you by {{ env('SITE_NAME') }} as part of the Service as
			provided to you by {{ env('SITE_NAME') }} (referred to as the "{{ env('SITE_NAME') }}
			Software" below). This license is for the sole purpose of enabling
			you to use and enjoy the benefit of the Service as provided by {{ env('SITE_NAME') }},
			in the manner permitted by the Terms.</p>
			<p>6.2. You may not (and you may
			not permit anyone else to): (a) copy, modify, create a derivative work
			of, reverse engineer, decompile or otherwise attempt to extract the
			source code of the {{ env('SITE_NAME') }}  Software or any part thereof, unless
			this is expressly permitted or required by law, or unless you have been
			specifically told that you may do so by {{ env('SITE_NAME') }}, in writing (e.g., through
			an open source software license); (b) attempt to disable or circumvent
			any security mechanisms used by the Service or any Application; (c)
			use the Service to create an Application that performs a malicious activity,
			including but not limited to spamming users, harvesting usernames and
			passwords, performing unauthorised scans of machines or ports or creating
			DoS attacks; or (d) upload or otherwise process any malicious content
			to or through the Service.</p>
			<p>6.3. Unless {{ env('SITE_NAME') }} has given
			you specific written permission to do so (e.g., through an open source
			software license), you may not assign (or grant a sub-license of) your
			rights to use the {{ env('SITE_NAME') }}  Software, grant a security interest
			in or over your rights to use the {{ env('SITE_NAME') }}  Software, or otherwise
			transfer any part of your rights to use the Software.</p>
			<p>6.4. Open source software licenses
			for components of the Service released under an open source license
			constitute separate written agreements. To the limited extent that the
			open source software licenses expressly supersede these Terms, the open
			source licenses govern your agreement with {{ env('SITE_NAME') }} for the use of the
			components of the Service released under an open source license.</p>

			<h2>7. License from You</h2>

			<p>7.1. {{ env('SITE_NAME') }} claims no ownership
			or control over any Content or Application. You retain copyright and
			any other rights you already hold in the Content and/or Application,
			and you are responsible for protecting those rights, as appropriate.
			By submitting, posting or displaying the Content on or through the Service
			you give {{ env('SITE_NAME') }} a worldwide, royalty-free, and non-exclusive license
			to reproduce, adapt, modify, translate, publish, publicly perform, publicly
			display and distribute such Content for the sole purpose of enabling
			{{ env('SITE_NAME') }} to provide you with the Service in accordance with its privacy
			policy. Furthermore, by creating an Application through use of the Service,
			you give {{ env('SITE_NAME') }} a worldwide, royalty-free, and non-exclusive license
			to reproduce, adapt, modify, translate, publish, publicly perform, publicly
			display and distribute such Application for the sole purpose of enabling
			{{ env('SITE_NAME') }} to provide you with the Service in accordance with its privacy
			policy.</p>
			<p>7.2. You agree that {{ env('SITE_NAME') }},
			in its sole discretion, may use your trade names, trademarks, service
			marks, logos, domain names and other distinctive brand features in presentations,
			marketing materials, customer lists, financial reports and Web site
			listings (including links to your website) for the purpose of advertising
			or publicising your use of the Service.</p>

			<h2>8. Software Updates</h2>

			<p>8.1. The Software which you
			use may automatically download and install updates from time to time
			from {{ env('SITE_NAME') }}. These updates are designed to improve, enhance and further
			develop the Service and may take the form of bug fixes, enhanced functions,
			new software modules and completely new versions. You agree to receive
			such updates (and permit {{ env('SITE_NAME') }} to deliver these to you) as part of
			your use of the Service.</p>

			<h2>9. Modification and Termination of the Service</h2>

			<p>9.1. {{ env('SITE_NAME') }} is constantly
			innovating in order to provide the best possible experience for its
			users. You acknowledge and agree that the form and nature of the Service
			which {{ env('SITE_NAME') }} provides may change from time to time without prior notice
			to you, subject to the terms in Sections 4.3 and 10.2.  Changes
			to the form and nature of the Service will be effective with respect
			to all versions of the Service (including the Deprecated Version of
			the Service); examples of changes to the form and nature of the Service
			include without limitation changes to fee and payment policies, security
			patches, added functionality, and other enhancements.</p>
			<p>9.2. If {{ env('SITE_NAME') }} in its discretion
			chooses to cease providing the current version of the Service whether
			through discontinuation of the Service or by upgrading the Service to
			a newer version, the current version of the Service will be deprecated
			and become the Deprecated Version of the Service.   {{ env('SITE_NAME') }} will issue
			an announcement if the current version of the Service will be deprecated.
			For a period of 3 years after an announcement (the “Deprecation Period”),
			{{ env('SITE_NAME') }} will use commercially reasonable efforts to continue to operate
			the Deprecated Version of the Service and to respond to problems with
			the Deprecated Version of the Service deemed by {{ env('SITE_NAME') }} in its discretion
			to be critical.   During the Deprecation Period, no new features will
			be added to the Deprecated Version of the Service.  <br>
			</p>
			<p>{{ env('SITE_NAME') }} reserves the right in
			its discretion to cease providing all or any part of the Deprecated
			Version of the Service immediately without any notice if:  </p>

			<p> </p>
			<p>(A) you have breached any provision
			of the Terms (or have acted in manner that clearly shows that you do
			not intend to, or are unable to comply with the provisions of the Terms);
			or  </p>
			<p> </p>
			<p>(B) {{ env('SITE_NAME') }} is required to do
			so by law (for example, due to a change to the law governing the provision
			of the Deprecated Version of the Service); or  </p>
			<p> </p>
			<p>(C) the Deprecated Version
			of the Service relies on data or services provided by a third party
			partner and the relationship with such partner (i) has expired or been
			terminated or (ii) requires {{ env('SITE_NAME') }} to change the way {{ env('SITE_NAME') }} provides
			the data or services through the Deprecated Version of the Service;
			or  </p>
			<p> </p>
			<p>(D) providing the Deprecated
			Version of the Service could create a substantial economic burden as
			determined by {{ env('SITE_NAME') }} in its reasonable good faith judgment; or  </p>
			<p> </p>

			<p>(E) providing the Deprecated
			Version of the Service could create a security risk or material technical
			burden as determined by {{ env('SITE_NAME') }} in its reasonable good faith judgment. </p>
			<p> <br>
			At any time prior to discontinuing the current version of the Service
			or upgrading to a new version of the Service, {{ env('SITE_NAME') }} may, in its discretion
			as part of its continuing innovation to provide the best possible experience
			for its users, label certain features or functionality of the Service
			as "experimental."  This Section 10.2 of the Terms will not
			apply to any features or functionality labeled as "experimental."</p>
			<p>This Section 10.2 of the Terms
			also will not apply to the {{ env('SITE_NAME') }} Software (as defined in
			Section 7.1).</p>
			<p>9.3. You may discontinue your
			use of the Service at any time. {{ env('SITE_NAME') }} may, at any time, terminate your
			use of the Service if (A) you have breached any provision of the Terms
			(or have acted in manner that clearly shows that you do not intend to,
			or are unable to comply with the provisions of the Terms); or (B) {{ env('SITE_NAME') }}
			is required to do so by law (for example, due to a change to the law
			governing the provision of the Service); or (C) the Service relies on
			data or services provided by a third party partner and the relationship
			with such partner (i) has expired or been terminated or (ii) requires
			{{ env('SITE_NAME') }} to change the way {{ env('SITE_NAME') }} provides the data or services through
			the Service; or (D) providing the Service could create a substantial
			economic burden as determined by {{ env('SITE_NAME') }} in its reasonable good faith
			judgment; or (E) providing the Service could create a security risk
			or material technical burden as determined by {{ env('SITE_NAME') }} in its reasonable
			good faith judgment. </p>
			<p>9.4. Upon any termination
			of the Service under Sections 4 or 10 , these Terms will also terminate,
			but Sections 6.1, 11, 12, 13, and 17 shall continue to be effective
			after these Terms are terminated.</p>

			<h2>10. EXCLUSION OF WARRANTIES</h2>

			<p>10.1. NOTHING IN THESE TERMS,
			INCLUDING SECTIONS 11 AND 12, SHALL EXCLUDE OR LIMIT {{ env('SITE_NAME') }}'S WARRANTY
			OR LIABILITY FOR LOSSES WHICH MAY NOT BE LAWFULLY EXCLUDED OR LIMITED
			BY APPLICABLE LAW.</p>
			<p>10.2. YOU EXPRESSLY UNDERSTAND
			AND AGREE THAT YOUR USE OF THE SERVICE IS AT YOUR SOLE RISK AND THAT
			THE SERVICE IS PROVIDED "AS IS" AND "AS AVAILABLE." </p>
			<p>10.3. {{ env('SITE_NAME') }}, ITS SUBSIDIARIES
			AND AFFILIATES, AND ITS LICENSORS MAKE NO EXPRESS WARRANTIES AND DISCLAIM
			ALL IMPLIED WARRANTIES REGARDING THE SERVICE INCLUDING IMPLIED WARRANTIES
			OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT.
			WITHOUT LIMITING THE GENERALITY OF THE FOREGOING, {{ env('SITE_NAME') }}, ITS SUBSIDIARIES
			AND AFFILIATES, AND ITS LICENSORS DO NOT REPRESENT OR WARRANT TO YOU
			THAT: (A) YOUR USE OF THE SERVICE WILL MEET YOUR REQUIREMENTS, (B) YOUR
			USE OF THE SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE OR FREE FROM
			ERROR, AND (C) USAGE DATA PROVIDED THROUGH THE SERVICE WILL BE ACCURATE.</p>

			<h2>11. LIMITATION OF LIABILITY</h2>

			<p>11.1. SUBJECT TO SECTION 11.1
			ABOVE, YOU EXPRESSLY UNDERSTAND AND AGREE THAT {{ env('SITE_NAME') }}, ITS SUBSIDIARIES
			AND AFFILIATES, AND ITS LICENSORS SHALL NOT BE LIABLE TO YOU FOR ANY
			DIRECT, INDIRECT, INCIDENTAL, SPECIAL CONSEQUENTIAL OR EXEMPLARY DAMAGES
			WHICH MAY BE INCURRED BY YOU, HOWEVER CAUSED AND UNDER ANY THEORY OF
			LIABILITY. THIS SHALL INCLUDE, BUT NOT BE LIMITED TO, ANY LOSS OF PROFIT
			(WHETHER INCURRED DIRECTLY OR INDIRECTLY), ANY LOSS OF GOODWILL OR BUSINESS
			REPUTATION, ANY LOSS OF DATA SUFFERED, COST OF PROCUREMENT OF SUBSTITUTE
			GOODS OR SERVICES, OR OTHER INTANGIBLE LOSS.</p>

			<p>11.2. THE LIMITATIONS ON {{ env('SITE_NAME') }}'S
			LIABILITY TO YOU IN PARAGRAPH 12.1 ABOVE SHALL APPLY WHETHER OR NOT
			{{ env('SITE_NAME') }} HAS BEEN ADVISED OF OR SHOULD HAVE BEEN AWARE OF THE POSSIBILITY
			OF ANY SUCH LOSSES ARISING.</p>

			<h2>12. Indemnification</h2>

			<p>12.1. You agree to hold harmless
			and indemnify {{ env('SITE_NAME') }}, and its subsidiaries, affiliates, officers, agents,
			employees, advertisers, licensors, suppliers or partners, (collectively
			"{{ env('SITE_NAME') }} and Partners") from and against any third party claim
			arising from or in any way related to (a) your breach of the Terms,
			(b) your use of the Service, (c) your violation of applicable laws,
			rules or regulations in connection with the Service, or (d) your Content
			or your Application, including any liability or expense arising from
			all claims, losses, damages (actual and consequential), suits, judgments,
			litigation costs and attorneys' fees, of every kind and nature. In such
			a case, {{ env('SITE_NAME') }} will provide you with written notice of such claim, suit
			or action.</p>

			<h2>13. Other Content</h2>

			<p>13.1. The Services may include
			hyperlinks to other web sites or content or resources or email content.
			{{ env('SITE_NAME') }} may have no control over any web sites or resources which are
			provided by companies or persons other than {{ env('SITE_NAME') }}.</p>
			<p>13.2. You acknowledge and agree
			that {{ env('SITE_NAME') }} is not responsible for the availability of any such external
			sites or resources, and does not endorse any advertising, products or
			other materials on or available from such web sites or resources.</p>

			<p>13.3. You acknowledge and agree
			that {{ env('SITE_NAME') }} is not liable for any loss or damage which may be incurred
			by you or users of your Application as a result of the availability
			of those external sites or resources, or as a result of any reliance
			placed by you on the completeness, accuracy or existence of any advertising,
			products or other materials on, or available from, such web sites or
			resources.</p>

			<h2>14. Changes to the Terms</h2>

			<p>14.1. {{ env('SITE_NAME') }} may make changes
			to the Terms from time to time. When these changes are made, {{ env('SITE_NAME') }}
			will make a new copy of the Terms available at <a href="{{ route('terms') }}" target="_blank">{{ route('terms') }}</a>.</p>
			<p>14.2. You understand and agree
			that if you use the Service after the date on which the Terms have changed,
			{{ env('SITE_NAME') }} will treat your use as acceptance of the updated Terms.</p>

			<h2>15. General Legal Terms</h2>

			<p>15.1. The Terms constitute
			the whole legal agreement between you and {{ env('SITE_NAME') }} and govern your use
			of the Service (but excluding any services which {{ env('SITE_NAME') }} may provide
			to you under a separate written agreement), and completely replace any
			prior agreements between you and {{ env('SITE_NAME') }} in relation to the Service.</p>
			<p>15.2. There are no third party
			beneficiaries to these Terms. The parties are independent contractors,
			and nothing in these Terms creates an agency, partnership or joint venture.</p>

			<p>15.3. If {{ env('SITE_NAME') }} provides you
			with a translation of the English language version of these Terms, the
			English language version of these Terms will control if there is any
			conflict. </p>
			<p>15.4. You agree that {{ env('SITE_NAME') }}
			may provide you with notices, including those regarding changes to the
			Terms, by email, regular mail, or postings on the Service.</p>
			<p>15.5. You agree that if {{ env('SITE_NAME') }}
			does not exercise or enforce any legal right or remedy which is contained
			in the Terms (or which {{ env('SITE_NAME') }} has the benefit of under any applicable
			law), this will not be taken to be a formal waiver of {{ env('SITE_NAME') }}'s rights
			and that those rights or remedies will still be available to {{ env('SITE_NAME') }}.</p>
			<p>15.6. {{ env('SITE_NAME') }} shall not be liable
			for failing or delaying performance of its obligations resulting from
			any condition beyond its reasonable control, including but not limited
			to, governmental action, acts of terrorism, earthquake, fire, flood
			or other acts of God, labor conditions, power failures, and Internet
			disturbances.</p>
			<p>15.7. The Terms, and your relationship
			with {{ env('SITE_NAME') }} under the Terms, shall be governed by the laws of the United Kingdom without regard to its conflict of laws provisions. You
			and {{ env('SITE_NAME') }} agree to submit to the exclusive jurisdiction of the courts
			located within the city of London, UK to resolve any
			legal matter arising from the Terms. Notwithstanding this, you agree
			that {{ env('SITE_NAME') }} shall still be allowed to apply for injunctive remedies
			(or an equivalent type of urgent legal relief) in any jurisdiction.</p>


			<p class="info">
			  Portions of this page are modifications based on work created and <a href="http://code.google.com/policies.html">shared by {{ env('SITE_NAME') }}</a> and used
			  according to terms described in the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons
			  3.0 Attribution License</a>.
			</p>

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

@endsection

@section('footer')

@endsection