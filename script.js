const btnBrand = document.getElementById('brand');
const btnRegular = document.getElementById('regular');
const btnSolid = document.getElementById('solid');

const brand = document.getElementById('view-brand');
const regulard = document.getElementById('view-regular');
const solid = document.getElementById('view-solid');

regulard.classList.add('hidden');
solid.classList.add('hidden');

btnBrand.classList.add('active');

function showBrand() {
  if (!btnBrand.classList.contains('active')) {
    btnBrand.classList.add('active');
    btnRegular.classList.remove('active');
    btnSolid.classList.remove('active');

    brand.classList.remove('hidden');
    regulard.classList.add('hidden');
    solid.classList.add('hidden');
  }
}

function showRegular() {
  if (!btnRegular.classList.contains('active')) {
    btnRegular.classList.add('active');
    btnBrand.classList.remove('active');
    btnSolid.classList.remove('active');

    brand.classList.add('hidden');
    regulard.classList.remove('hidden');
    solid.classList.add('hidden');
  }
}

function showSolid() {
  if (!btnSolid.classList.contains('active')) {
    btnSolid.classList.add('active');
    btnBrand.classList.remove('active');
    btnRegular.classList.remove('active');

    brand.classList.add('hidden');
    regulard.classList.add('hidden');
    solid.classList.remove('hidden');
  }
}

btnBrand.addEventListener('click',showBrand);
btnRegular.addEventListener('click',showRegular);
btnSolid.addEventListener('click',showSolid);