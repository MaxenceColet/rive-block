<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<div class="canvas_container">
		<canvas id="canvas_boussole" height="192" width="108"></canvas>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", initialiser)

	function initialiser(evt) {
		const r = new rive.Rive({
			src: "<?= get_site_url() . "/wp-content/plugins/rive-block/assets/boussole.riv"?>",
			canvas: document.getElementById("canvas_boussole"),
			autoplay: true,
			autoBind: true,
			// artboard: "Arboard", // Optional. If not supplied the default is selected
			stateMachines: "State Machine 1",
			onLoad: () => {
				// Ensure the drawing surface matches the canvas size and device pixel ratio
				r.resizeDrawingSurfaceToCanvas();
			},
		});
	}
</script>
<script src="https://unpkg.com/@rive-app/webgl2"></script>
