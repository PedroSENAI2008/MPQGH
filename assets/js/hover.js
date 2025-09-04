const imagem = document.getElementById('imagem-hover');
const links = document.querySelectorAll('ul li');

links.forEach(link => {
  const a = link.querySelector('a');

  link.addEventListener('mouseenter', () => {
    // só mostra imagem se o link tiver href
    if (a.hasAttribute('href') && a.getAttribute('href') !== "#") {
      const imgSrc = link.getAttribute('data-img');
      imagem.src = imgSrc;
      imagem.style.opacity = '1';
    }
  });

  link.addEventListener('mouseleave', () => {
    imagem.style.opacity = '0';
  });
});
