document.addEventListener("DOMContentLoaded", (event) => {

    /* SMOOTH SCROLL */
    const scroll = new LocomotiveScroll({});

    gsap.registerPlugin(ScrollTrigger);

    let wrapper = document.querySelector("#hero");

    const markerTl = gsap.timeline({ paused: true });

    markerTl.to(".map-marker", { 
        opacity: 1,
        stagger: 0.2,
        duration: 0.4,
        onStart: () => {
            if(markerContainer) markerContainer.style.pointerEvents = "auto";
        }
    });

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: wrapper,
            pin: true,
            start: "top top",
            end: "+=200%", 
            scrub: 0.8,
            onUpdate: (self) => {

                if (self.progress > 0.2) {
                    markerTl.play();
                } else {
                    markerTl.reverse();
                    if(markerContainer) markerContainer.style.pointerEvents = "none";
                }
            }
        },
    });

    tl.to(".move-right", { x: "100vw" }, 0)
      .to(".move-left", { x: "-100vw" }, 0);

    // 4. THE KEY: Add "Dead Space"
    // This empty tween lasts from position 0.5 to 1.0 of the scroll.
    // The elements will have finished moving at 0.5, 
    // but because the timeline lasts until 1.0, it stays pinned.
    tl.to({}, { duration: 1 }, 1); 

});