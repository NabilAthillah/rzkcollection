<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{asset('assets\img\Desain_tanpa_judul__4_-removebg-preview.png')}} type="image/x-icon">
    @vite('resources/css/app.css')
    <title>RZKCollection</title>
</head>
<body>
    @yield('content')
    <script>
        const colorOptions = document.querySelectorAll('.color-option');

        colorOptions.forEach((option) => {
        option.addEventListener('click', () => {
        // Hapus kelas 'active' dari semua pilihan warna
        colorOptions.forEach((option) => {
        option.classList.remove('active');
        });

        // Tambahkan kelas 'active' pada pilihan warna yang diklik
        option.classList.add('active');
        });
        });

        const colorLabels = document.querySelectorAll('.color-option');
const selectedColorText = document.getElementById('selectedColor');
selectedColorText.textContent = 'Silahkan Pilih Warna';

colorLabels.forEach(label => {
  label.addEventListener('click', () => {
    const colorName = label.getAttribute('data-color-name');
    selectedColorText.textContent = colorName;
  });
});

function toggleSizeOption(element) {
        const selectedClassName = 'selected';
        const isSelected = element.classList.contains(selectedClassName);
        const sizeOptions = document.querySelectorAll('.size-option');

        sizeOptions.forEach(option => option.classList.remove(selectedClassName));

        if (!isSelected) {
            element.classList.add(selectedClassName);
        }
    }
    </script>
</body>
</html>