<?php include('partials/_body_nav.php'); ?>

<div class="container" ng-init="init()">
	<div class="row">
		<div class="col-lg-12">
			<p>The number of people choosing to have plastic surgery has soared in recent years. Technological advances have increased the options you can consider. But do your research before you consider any operation.</p>

			<p>All surgery carries some risk. And while plastic surgery can improve a part of you body, it rarely improves your whole life. Make sure your goals are realistic.</p>

			<p><b>To begin your quest for plastic surgery information, please click the part of the body you are interested in having a procedure on.</b></p>

            <iframe src='http://www.plasticsurgery.org/x8496.xml?key=22362f99a983d-3e0d-4758-84ed-a1094e26693a492131' width='100%' height='724' scrolling='auto' style='border:none;'></iframe>
		</div>
	</div>
</div>

<div ng-cloak ng-show="show_procedures_for == 'face'">
    <div id="procedure_table_of_contents" class="table_of_contents_wrapper">
        <img class="divider" src="assets/img/divider-3x.png">

        <div class="container table_of_contents">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Face</h1>

                    <p>Explore a subcategory:</p>
                    <div class="btn-group">
                        <button class="btn btn-default" ng-click="subcategory = 'eyelid surgery'" ng-class="{active: subcategory == 'eyelid surgery'}">Eyelid Surgery</button>
                        <button class="btn btn-default" ng-click="subcategory = 'forehead lift'" ng-class="{active: subcategory == 'forehead lift'}">Forehead Lift</button>
                    </div>
                </div>
                <div class="col-sm-8">
                    <ol ng-show="subcategory == 'eyelid surgery'">
                        <li><a href="#eyelid_surgery_information">Eyelid surgery information</a>
                        <li><a href="#eyelid_what_to_expect">What to expect during your eyelid surgery consultation</a>
                        <li>Preparing for eyelid surgery
                        <li>Eyelid surgery steps
                        <li>Important facts about eyelid surgery risks and safety
                        <li>My eyelid surgery recovery
                        <li>Eyelid surgery results will be long-lasting
                        <li>How much will eyelid surgery cost?
                        <li>Blepharoplasty words to know
                        <li>Questions to ask your surgeon
                    </ol>

                    <ol ng-show="subcategory == 'forehead lift'">
                        <li>Filler
                        <li>Content
                        <li>Here!
                    </ol>
                </div>
            </div>
        </div>

        <img class="divider" src="assets/img/divider-3x.png">
    </div>

    <!-- Content -->
    <div ng-show="subcategory == 'eyelid surgery'">
        <?php include('partials/procedures/eyelid_surgery.php'); ?>
    </div>
</div>
