const route = (event) => {
  event = event || window.event;
  event.preventDefault();
  window.history.pushState({}, "", event.target.href);
  handleLocation();
};

const routes = {
  "/": "/public/pages/index.php",
  "/lutadores": "/public/pages/lutadores.php",
  "/social": "/public/pages/social.php",
  "/changelog": "/public/pages/changelog.php",
  "/login": "/public/pages/login.php",
  "/adicionar-atualizacao": "/public/pages/adicionar_atualizacao.php",
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