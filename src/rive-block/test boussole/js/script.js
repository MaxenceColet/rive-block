"use strict";

document.addEventListener("DOMContentLoaded", initialiser)

function initialiser(evt) {
    const r = new rive.Rive({
        src: "../asset/flament-rose-anime.riv",
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