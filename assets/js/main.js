document.getElementById('year').textContent = new Date().getFullYear();

// Assemble the address from its parts only on human interaction
const link = document.getElementById('email');
const address = () => `${link.dataset.u}${String.fromCharCode(64)}${link.dataset.d}.${link.dataset.t}`;
const arm = () => { link.href = 'mailto:' + address(); link.textContent = address(); };
['mouseenter', 'focus', 'touchstart'].forEach(ev => link.addEventListener(ev, arm, { once: true, passive: true }));
link.addEventListener('click', arm);
