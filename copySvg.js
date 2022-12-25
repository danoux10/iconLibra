function copySVG(img) {
  // Lire le contenu du fichier SVG
  fetch(img.src)
      .then(response => response.text())
      .then(svg => {
        // Copier le contenu dans le presse-papiers
        navigator.clipboard.writeText(svg);
      });
  alert('code svg copie');
}
