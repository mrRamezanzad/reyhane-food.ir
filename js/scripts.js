ScrollReveal({
  delay: 0,
  distance: "0px",
  duration: 500,
  easing: "cubic-bezier(0.5, 0, 0, 1)",
  interval: 0,
  opacity: 0,
  origin: "bottom",
  rotate: {
    x: 2,
    y: 2,
    z: 0
  },
  scale: 1,
  cleanup: true,
  container: document.documentElement,
  desktop: true,
  mobile: true,
  reset: false,
  useDelay: "always",
  viewFactor: 0.0,
  viewOffset: {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0
  }
});
ScrollReveal().reveal("#products", {
  origin: "left",
  distance: "200px",
  delay: 500
});
ScrollReveal().reveal("#products-title", {
  origin: "top",
  distance: "200px",
  delay: 500
});
ScrollReveal().reveal("#certificates", { origin: "right", distance: "200px" });
ScrollReveal().reveal("#customers", { origin: "left", distance: "200px" });
