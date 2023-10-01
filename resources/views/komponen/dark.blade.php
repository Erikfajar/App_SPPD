<style>
 .switch-name {
  --dark-sky: #35d5e5;
  --moon: #ffd365;
  --light-sky: #5050e5;
  
  --sun: #ffed89;
  display: inline-block;
  position: relative;
  border-radius: 5em;
  cursor: pointer;
  width: 80px;
  height: 40px;
  overflow: hidden;
  transition: all .5s;
}

.switch-name .back {
  background-color: var(--dark-sky);
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  transition: .5s ease-in-out;
}

.switch-name .checkbox {
  opacity: 0;
}

.switch-name .checkbox:checked ~ .back {
  background-color: var(--light-sky);
}

.switch-name .checkbox:checked ~ .moon {
  transform: translate(100%) rotate(180deg);
  opacity: 0;
}

.switch-name .checkbox:checked ~ .sun {
  transform: translate(100%) rotate(180deg);
  opacity: 1;
}

.switch-name .moon {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  padding: .4em;
  fill: var(--moon);
  transition: .5s;
}

.switch-name .sun {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  padding: .4em;
  fill: var(--sun);
  transition: .5s;
  opacity: 0;
  
}

.dark-mode {
  background-color: #333;
  color: #fff;
}
</style>
<script>
    // Dapatkan tombol toggle dan mode saat ini dari localStorage
const darkModeToggle = document.getElementById('dark-mode-toggle');
const currentMode = localStorage.getItem('darkMode');

// Periksa apakah mode saat ini adalah dark atau light
if (currentMode === 'dark') {
  document.body.classList.add('dark-mode');
  darkModeToggle.checked = true;
}

// Tambahkan event listener untuk mengubah mode saat tombol toggle dinyalakan atau dimatikan
darkModeToggle.addEventListener('change', () => {
  if (darkModeToggle.checked) {
    document.body.classList.add('dark-mode');
    localStorage.setItem('darkMode', 'dark');
  } else {
    document.body.classList.remove('dark-mode');
    localStorage.setItem('darkMode', 'light');
  }
});

</script>