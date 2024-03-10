document.addEventListener('DOMContentLoaded', function () {
  const themeCheckbox = document.getElementById('theme');
  const isDark = JSON.parse(localStorage.getItem('isDark'));
  if (isDark === null) {
      localStorage.setItem('isDark', JSON.stringify(false));
  } else {
      themeCheckbox.checked = isDark;
  }

  themeCheckbox.addEventListener('change', function () {
      localStorage.setItem('isDark', JSON.stringify(themeCheckbox.checked));
  });
});
