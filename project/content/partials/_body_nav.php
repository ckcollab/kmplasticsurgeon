<div class="container">
	<div class="row picture-nav">
		<div class="col-lg-12">
			<div class="big-button">

			    <a
			        <?php if($page != 'procedures'): ?>
			            href="index.php?page=procedures&category=face"
			        <?php else: ?>
			            ng-click="show_procedures_for = 'face'"
			        <?php endif; ?>
			    >
                    <div class="image-container">
                        <div class="image">
                            <img class="sepia" src="assets/img/big-nav-buttons/face-sepia.png" alt="Face">
                            <img class="normal" src="assets/img/big-nav-buttons/face.png" alt="Face">
                        </div>
                    </div>
                    <div class="text">
                        face
                    </div>
				</a>
			</div>

			<div class="big-button">
			    <a
			        <?php if($page != 'procedures'): ?>
			            href="index.php?page=procedures&category=breasts"
			        <?php else: ?>
			            ng-click="show_procedures_for = 'breasts'"
			        <?php endif; ?>
			    >
                    <div class="image-container">
                        <div class="image">
                            <img class="sepia" src="assets/img/big-nav-buttons/breasts-sepia.png" alt="Breasts">
                            <img class="normal" src="assets/img/big-nav-buttons/breasts.png" alt="Breasts">
                        </div>
                    </div>
                    <div class="text">
                        breasts
                    </div>
                </a>
			</div>

			<div class="big-button">
			    <a
			        <?php if($page != 'procedures'): ?>
			            href="index.php?page=procedures&category=body"
			        <?php else: ?>
			            ng-click="show_procedures_for = 'body'"
			        <?php endif; ?>
			    >
                    <div class="image-container">
                        <div class="image">
                            <img class="sepia" src="assets/img/big-nav-buttons/body-sepia.png" alt="Body">
                            <img class="normal" src="assets/img/big-nav-buttons/body.png" alt="Body">
                        </div>
                    </div>
                    <div class="text">
                        body
                    </div>
				</a>
			</div>

			<div class="big-button">
			    <a
			        <?php if($page != 'procedures'): ?>
			            href="index.php?page=procedures&category=mommy"
			        <?php else: ?>
			            ng-click="show_procedures_for = 'mommy'"
			        <?php endif; ?>
			    >
                    <div class="image-container">
                        <div class="image">
                            <img class="sepia" src="assets/img/big-nav-buttons/mommy-makeover-sepia.png" alt="Mommy Makeover">
                            <img class="normal" src="assets/img/big-nav-buttons/mommy-makeover.png" alt="Mommy Makeover">
                        </div>
                    </div>
                    <div class="text">
                        mommy
                    </div>
				</a>
			</div>

			<div class="big-button">
			    <a
			        <?php if($page != 'procedures'): ?>
			            href="index.php?page=procedures&category=male"
			        <?php else: ?>
			            ng-click="show_procedures_for = 'male'"
			        <?php endif; ?>
			    >
                    <div class="image-container">
                        <div class="image">
                            <img class="sepia" src="assets/img/big-nav-buttons/male-sepia.png" alt="Male">
                            <img class="normal" src="assets/img/big-nav-buttons/male.png" alt="Male">
                        </div>
                    </div>
                    <div class="text">
                        male
                    </div>
				</a>
			</div>
		</div>
	</div>
</div>
