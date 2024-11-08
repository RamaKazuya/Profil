function loadContent(fileName, elementId) {
            fetch(fileName)
            .then(response => response.text())
            .then(data => {
                document.getElementById(elementId).innerHTML = data;
            });
        }
        function goToPage1(event) {
            event.preventDefault();  // Mencegah perilaku default <a>
            document.getElementById('halaman1').style.display = 'block';
            document.getElementById('halaman2').style.display = 'none';
            document.getElementById('halaman3').style.display = 'none';
            document.getElementById('halaman4').style.display = 'none';
        }
        
        function goToPage2(event) {
            event.preventDefault();  // Mencegah perilaku default <a>
            document.getElementById('halaman1').style.display = 'none';
            document.getElementById('halaman2').style.display = 'block';
            document.getElementById('halaman3').style.display = 'none';
            document.getElementById('halaman4').style.display = 'none';
        }
        
        function goToPage3(event) {
            event.preventDefault();  // Mencegah perilaku default <a>
            document.getElementById('halaman1').style.display = 'none';
            document.getElementById('halaman2').style.display = 'none';
            document.getElementById('halaman3').style.display = 'block';
            document.getElementById('halaman4').style.display = 'none';
        }
        
        function goToPage4(event) {
            event.preventDefault();  // Mencegah perilaku default <a>
            document.getElementById('halaman1').style.display = 'none';
            document.getElementById('halaman2').style.display = 'none';
            document.getElementById('halaman3').style.display = 'none';
            document.getElementById('halaman4').style.display = 'block';
        }