document.getElementById('add').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'none';
        })