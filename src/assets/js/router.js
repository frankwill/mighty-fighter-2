const route = (event) => {
  event = event || window.event;
  event.preventDefault();
  window.history.pushState({}, "", event.target.href);
  handleLocation();
};

const routes = {
  "/": "/src/pages/index.html",
  "/lutadores": "/src/pages/lutadores.html",
  "/social": "/src/pages/social.html",
  "/changelog": "/src/pages/changelog.html",
  "/login": "/src/pages/login.html",
};

const handleLocation = async () => {
  const path = window.location.pathname;
  const route = routes[path] || routes[404];
  const html = await fetch(route).then((data) => data.text());
  document.getElementById("main-page").innerHTML = html;
};

window.onpopstate = handleLocation;
window.route = route;

handleLocation();